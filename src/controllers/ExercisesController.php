<?php

namespace App\controllers;

use App\models\Exercise;
use App\models\Model;
use App\Services\Renderer;

class ExercisesController
{
    public function takeExercises(): void
    {
        $data['title'] = 'Take an exercise';
        $status = "'answering'";
        $data['exercises'] = Exercise::getAll($status);
        $renderer = new Renderer();
        $view = '../views/exercises/answering.php';
        $renderer->renderView($renderer->createView($view, $data));
    }

}
