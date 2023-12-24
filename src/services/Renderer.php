<?php

namespace App\Services;

use Error;

class Renderer
{
    const VIEW_FOLDER = '../src/views/';
    private $head;
    private $header;
    private $footer;

    //TODO: Modifier le passage des parametres pour que le header puisse être a null
    public function __construct($head = 'gabarits/head.php', $header = 'gabarits/shortHeader.php', $footer = 'gabarits/footer.php')
    {
        $this->head = self::VIEW_FOLDER . $head;
        $this->header = self::VIEW_FOLDER . $header;
        $this->footer = self::VIEW_FOLDER . $footer;
    }

    /**
     * Render a view in between header and footer
     * @param string $view
     * @param array $data
     * @return string
     */
    public function createView($view, $data = [])
    {
        if ($_SERVER['REQUEST_METHOD'] != "POST") {
            $_SESSION['token'] = md5(uniqid(mt_rand(), true));
        }
        $view = self::VIEW_FOLDER . $view;
        $head = Renderer::insertDataInView($this->head, $data);
        $content = Renderer::insertDataInView($view, $data);
        $header = Renderer::insertDataInView($this->header, $data);
        $footer = Renderer::insertDataInView($this->footer, $data);
        return $head . $header . $content . $footer;
    }

    /**
     * insert data in the view
     * @param string $view
     * @param array $data
     * @return string
     */
    private static function insertDataInView($view, $data)
    {
        ob_start();
        include($view);
        return ob_get_clean();
    }

    /**
     * Render and show a view with already inserted data
     * @param string $view
     * @param array $data
     * @return string
     */

    public function renderView($view)
    {
        echo $view;
    }
    //TODO : refactor displayError
    public static function displayError($error = null)
    {
        if ($_ENV['APP_DEBUG'] == 'true') {
            echo (Renderer::insertDataInView('../src/views/site/error.php', [$error, http_response_code()]));
        } else {
            echo (Renderer::insertDataInView('../src/views/site/error.php', [null, http_response_code()]));
        }
    }
}
