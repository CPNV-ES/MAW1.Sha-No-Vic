<?php

namespace App\controllers;

use App\models\Answer;
use App\models\Exercise;
use App\models\Fulfillment;
use App\models\Question;
use App\Services\Renderer;

class FulfillmentsController
{

    public function showFulfillments($params): void
    {

        $data['header']['type'] = "Exercise";
        $data['header']['title'] = Exercise::getTitleById($params["id"][0])['title'];
        $data['exercise_id'] = $params["id"][0];

        $data['fulfillments'] = Fulfillment::getAll($params["id"][0]);
        foreach ($data['fulfillments'] as $key => $fulfillment) {
            $data['answers'][$key] = Answer::getAnswerByFulfillment($fulfillment->getId());
        }
        $data['questions'] = Question::GetQuestionByExercise($params["id"][0]);
        $renderer = new Renderer();
        $view = '../views/fulfillments/results.php';
        $renderer->renderView($renderer->createView($view, $data));
    }

    public function save($params)
    {
        $exercise_id = $params['id'][0];
        $fulfillment_id = Fulfillment::create($params['id'][0]);
        foreach ($_POST['fulfillment'] as $key=>$answer) {
            Answer::save($key, $fulfillment_id, $answer);
        }
        $answers = Answer::getAnswerByFulfillment($fulfillment_id);
        header('location: /exercises/' . $exercise_id . '/fulfillments/' . $fulfillment_id . '/edit');
    }

    public function editExerciseFulfillment($params)
    {
        $data['header']['type'] = "Exercise";
        $data['header']['title'] = Exercise::getTitleById($params["id"][0])['title'];
        $data['exercise_id'] = $params["id"][0];
        $data['questions'] = Question::GetQuestionByExercise($params["id"][0]);
        $data['fulfillments'] = Answer::getAnswerByFulfillment($params["id"][1]);

        $renderer = new Renderer();
        $view = '../views/fulfillments/fulfillmentsEdit.php';
        $renderer->renderView($renderer->createView($view, $data));
    }

    public function updateExerciseFulfillment($params)
    {
        $data['fulfillments'] = Fulfillment::update($params['id'][1]);
        header('location: /exercises/' . $params['id'][0] . '/fulfillments');
    }

    public function showFieldFulfillments($params)
    {
        $data['header']['type'] = "Exercise";
        $data['header']['title'] = Exercise::getTitleById($params["id"][0])['title'];
        $data['question'] = Question::getAQuestion($params["id"][1]);
        $data['fulfillments'] = Fulfillment::getAll($params["id"][0]);
        $data['answers'] = Answer::getAnswersByQuestion($params["id"][1]);
        dd($data);
        $renderer = new Renderer();
        $view = '../views/fulfillments/fulfillment.php';
        $renderer->renderView($renderer->createView($view, $data));
    }

}