<?php
namespace App\controllers;

use App\models\Exercise;
use App\models\Question;
use App\Services\Renderer;

class QuestionsController
{
    public function newQuestion($params): void
    {
        $data['title'] = 'New question';
        $data['exercise_id'] = $params[0];
        $renderer = new Renderer();
        $view = '../views/questions/new.php';
        $renderer->renderView($renderer->createView($view, $data));
    }

    public function manageQuestions($params): void
    {
        $data['title'] = 'Manage fields';
        $data['exercise_id'] = $params['id'][0];
        $renderer = new Renderer();
        $view = '../views/exercises/Fields.php';
        $renderer->renderView($renderer->createView($view, $data));
    }
}