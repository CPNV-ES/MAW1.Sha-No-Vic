<?php

namespace App\controllers;

use App\Services\Renderer;

class IndexController
{
    public function index(): void
    {
        $data['title'] = 'Exercise Looper';
        $render = new Renderer(header: __DIR__ . '/../views/gabarits/longHeader.php');
        $view = $render->createView('../views/site/index.php', $data);
        $render->renderView($view);
    }
}