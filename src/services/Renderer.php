<?php

namespace App\Services;
class Renderer
{
    private $header;
    private $footer;

    public function __construct($header = './public/views/gabarit/header.php', $footer = './public/views/gabarit/footer.php')
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
        //
        $content = $this->renderView($view, $data);
        $header = $this->renderView($this->header, $data);
        $footer = $this->renderView($this->footer, $data);
        return $header . $content . $footer;
    }

    /**
     * Render a view with data (insert data in the view)
     * @param string $view
     * @param array $data
     * @return string
     */
    private function renderView($view, $data)
    {
        ob_start();
        include($view);
        return ob_get_clean();
    }
}