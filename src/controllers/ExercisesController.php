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

    public function takeOneExercise($exercise_id): void {
        $data['title'] = Exercise::getTitleById($exercise_id);
        $data['questions'] = Question::GetQuestionByExercise($exercise_id);
        $renderer = new Renderer();
        $view = '../views/fulfillments/fulfillmentsNew.php';
        $renderer->renderView($renderer->createView($view, $data));
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
        $exercise = Exercise::getStatusById($params['id'][0]);

        if ($exercise['status'] == 'answering') {
            Exercise::setStatus($params['id'][0], 'closed');
        } else {
            Exercise::setStatus($params['id'][0], 'answering');
        }
        header('Location: /exercises');
    }
}
