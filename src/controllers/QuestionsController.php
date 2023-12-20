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

    public function createQuestion($params): void
    {
        $question = Question::save($_POST['label'], $_POST['value_kind'], $params['id'][0]);
        header('Location: /exercises/' . $params['id'][0] . '/fields');
    }

    public function manageQuestions($params): void
    {
        $exercise = Exercise::getStatusById($params['id'][0]);
        if ($exercise['status'] == 'building') {
            $data['title'] = 'Manage fields';
            $data['exercise_id'] = $params['id'][0];
            $data['questions'] = Question::getQuestionByExercise($params['id'][0]);
            $renderer = new Renderer();
            $view = '../views/questions/Fields.php';
            $renderer->renderView($renderer->createView($view, $data));
        } else {
            Renderer::displayError(500);
        }
    }
    public function editQuestion($params): void
    {
        $data['title'] = 'Edit question';
        $data['id'] = $params['id'];
        $data['question'] = Question::getQuestionById($params['id'][1]);
        $renderer = new Renderer();
        $view = '../views/questions/edit.php';
        $renderer->renderView($renderer->createView($view, $data));
    }
    public function updateQuestion($params): void
    {
        Question::updateQuestion($params['id'][1], $_POST['label'], $_POST['value_kind']);
        header('Location: /exercises/' . $params['id'][0] . '/fields');
    }
    public function deleteQuestion($params): void
    {
        Question::deleteQuestion($params['id'][1]);
        header('Location: /exercises/' . $params['id'][0] . '/fields');
    }
}