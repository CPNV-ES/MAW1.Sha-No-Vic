<?php

namespace App\controllers;

use App\Services\Renderer;

class IndexController
{
    public function index(): void
    {
        $data['title'] = '<h1>Exercise<br>Looper</h1>'; //
        $render = new Renderer(header: __DIR__ . '/../views/gabarits/longHeader.php');
        $view = $render->createView('../views/site/index.php', $data);
        $render->renderView($view);
    }
}