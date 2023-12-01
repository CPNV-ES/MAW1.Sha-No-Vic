<?php

namespace App\controllers;

use App\models\Exercise;
use App\models\Question;
use App\Services\Renderer;

class ExercisesController
{
    public function takeExercises(): array
    {
        $data['title'] = 'Take an exercise';
        $status = "'answering'";
        $data['exercises'] = Exercise::getAll($status);
        $renderer = new Renderer();
        $view = '../views/exercises/answering.php';
        $renderer->renderView($renderer->createView($view, $data));
        return $data;
    }

    public function takeOneExercise($params): void
    {
        $data['header']['type'] = "Exercise";
        $data['header']['title'] = Exercise::getTitleById($params["id"][0])['title'];
        $data['exercise_id'] = $params["id"][0];
        $data['questions'] = Question::GetQuestionByExercise($params["id"][0]);
        $renderer = new Renderer();
        $view = '../views/fulfillments/fulfillmentsNew.php';
        $renderer->renderView($renderer->createView($view, $data));
    }
    public function newExercise(): void
    {
        $data['title'] = 'New exercise';
        $renderer = new Renderer();
        $view = '../views/exercises/new.php';
        $renderer->renderView($renderer->createView($view, $data));
    }
    public function createExercise(): void
    {
        $exercise = Exercise::save($_POST['title'], 'building');
        header('Location: /exercises/' . $exercise . '/fields');
    }
    public function manageFields($params): void
    {
        $data['title'] = 'Manage fields';
        $data['exercise_id'] = $params['id'][0];
        $renderer = new Renderer();
        $view = '../views/exercises/Fields.php';
        $renderer->renderView($renderer->createView($view, $data));
    }
}
