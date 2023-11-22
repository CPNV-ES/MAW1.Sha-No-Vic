<?php

namespace App\Services;

use Error;

class Renderer
{
    private $head;
    private $header;
    private $footer;

    //TODO: Modifier le passage des parametres pour que le header puisse être a null
    public function __construct($head = __DIR__ . '/../views/gabarits/head.php', $header = __DIR__ . '/../views/gabarits/shortHeader.php', $footer = __DIR__ . '/../views/gabarits/footer.php')
    {
        $this->head = $head;
        $this->header = $header;
        $this->footer = $footer;
    }

    /**
     * Render a view in between header and footer
     * @param string $view
     * @param array $data
     * @return string
     */
    public function createView($view, $data = [])
    {
        //TODO : move the concatenation of the path in a function or other
        $view = __DIR__ . '/' . $view;
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
            echo (Renderer::insertDataInView(__DIR__ . '/../views/site/404.html.php', [$error]));
        } else {
            echo (Renderer::insertDataInView(__DIR__ . '/../views/site/404.html.php', []));
        }
    }
}
