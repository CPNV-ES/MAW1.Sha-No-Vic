<?php

namespace App\Services;
class Renderer
{
    private $head;
    private $header;
    private $footer;

    public function __construct($head = '../views/gabarits/head.php', $header = '../views/gabarits/header.php', $footer = '../views/gabarits/footer.php')
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

    public function renderView($view){
        include $view;
    }
}