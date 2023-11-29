<?php

namespace App\controllers;

use App\models\Exercise;
use App\models\Question;
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

    public function takeOneExercise($exercise_id): void
    {
        $data['title'] = Exercise::getTitleById($exercise_id);
        $data['questions'] = Question::GetQuestionByExercise($exercise_id);
        $renderer = new Renderer();
        $view = '../views/fulfillments/fulfillmentsNew.php';
        $renderer->renderView($renderer->createView($view, $data));
    }
    public function newExercise(): void
    {
        $data['title'] = 'New exercise';
        $renderer = new Renderer();
        $view = '../views/exercises/new.php';
        dd($data);
        $renderer->renderView($renderer->createView($view, $data));
    }
}
