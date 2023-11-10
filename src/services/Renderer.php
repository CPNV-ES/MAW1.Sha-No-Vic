<?php

namespace App\Services;

class Renderer
{
    private $head;
    private $header;
    private $footer;

    public function __construct($head = __DIR__ . '/../views/gabarits/head.php', $header = __DIR__ .  '/../views/gabarits/header.php', $footer =  __DIR__ . '/../views/gabarits/footer.php')
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
        $head = $this->insertDataInView($this->head, $data);
        $content = $this->insertDataInView($view, $data);
        $header = $this->insertDataInView($this->header, $data);
        $footer = $this->insertDataInView($this->footer, $data);
        return $head . $header . $content . $footer;
    }

    /**
     * insert data in the view
     * @param string $view
     * @param array $data
     * @return string
     */
    private function insertDataInView($view, $data)
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
}
