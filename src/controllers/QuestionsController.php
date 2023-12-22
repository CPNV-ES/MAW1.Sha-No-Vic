<?php
namespace App\controllers;

use App\models\Exercise;
use App\models\Question;
use App\Services\Renderer;
use App\Services\FormValidator;

class QuestionsController
{
    public function newQuestion($params): void
    {
        $data['title'] = 'New question';
        $data['exercise_id'] = $params[0];
        $renderer = new Renderer();
        $view = 'questions/new.php';
        $renderer->renderView($renderer->createView($view, $data));
    }

    public function createQuestion($params): void
    {
        if (FormValidator::csrfValidator()) {
            Question::save($_POST['label'], $_POST['value_kind'], $params['id'][0]);
        }
        header('Location: /exercises/' . $params['id'][0] . '/fields');
    }

    public function manageQuestions($params): void
    {
        $exercise = Exercise::getStatusById($params['id'][0]);
        if ($exercise['status'] == 'building') {
            $data['color'] = 'managing';
            $data['title'] = 'Manage fields';
            $data['exercise_id'] = $params['id'][0];
            $data['questions'] = Question::getQuestionByExercise($params['id'][0]);
            $renderer = new Renderer();
            $view = 'questions/Fields.php';
            $renderer->renderView($renderer->createView($view, $data));
        } else {
            http_response_code(500);
            Renderer::displayError('You can\'t edit this exercise because it\'s not in building status');
        }
    }
    public function editQuestion($params): void
    {
        $data['title'] = 'Edit question';
        $data['id'] = $params['id'];
        $data['question'] = Question::getQuestionById($params['id'][1]);
        $renderer = new Renderer();
        $view = 'questions/edit.php';
        $renderer->renderView($renderer->createView($view, $data));
    }
    public function updateQuestion($params): void
    {
        if (FormValidator::csrfValidator()) {
            Question::updateQuestion($params['id'][1], $_POST['label'], $_POST['value_kind']);
        }
        header('Location: /exercises/' . $params['id'][0] . '/fields');
    }
    public function deleteQuestion($params): void
    {
        if (FormValidator::csrfValidator()) {
            Question::deleteQuestion($params['id'][1]);
        }
        header('Location: /exercises/' . $params['id'][0] . '/fields');
    }
}