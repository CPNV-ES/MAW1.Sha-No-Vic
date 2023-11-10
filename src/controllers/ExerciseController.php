<?php

namespace App\controllers;

use App\models\Model;
use App\Services\Renderer;

class ExerciseController
{
    public function index()
    {
        $data = Model::getAll();
        $render = new Renderer();
        $view = $render->createView('exercises', $data);
        $render->renderView($view);
    }

}