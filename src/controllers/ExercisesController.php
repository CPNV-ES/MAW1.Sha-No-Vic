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
        $data['exercises'] = Exercise::getByStatus($status);
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
        $data['questions'] = Question::getQuestionByExercise($params["id"][0]);
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
    public function manageExercises(): array
    {
        $data['title'] = 'Manage exercises';
        $data['exercises'] = Exercise::getAll();

        $renderer = new Renderer();
        $view = '../views/exercises/exercises.php';
        $renderer->renderView($renderer->createView($view, $data));
        return $data;
    }

    public function destroyExercise($params): void
    {
        Exercise::delete($params['id'][0]);
        header('Location: /exercises');
    }

    public function changeExerciseStatus($params): void
    {
        $exercise = Exercise::getById($params['id'][0]);
        if ($exercise[0]->hasQuestions() && $exercise[0]->getStatus() == 'building') {
            Exercise::setStatus($params['id'][0], 'answering');
        } else if ($exercise[0]->hasQuestions() && $exercise[0]->getStatus() == 'answering') {
            Exercise::setStatus($params['id'][0], 'closed');
        }
        header('Location: /exercises');
    }
}
