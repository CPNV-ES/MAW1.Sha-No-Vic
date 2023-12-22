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
        $data['header']['link'] = "/exercises/" . $params["id"][0] . "/results";
        $data['color'] = 'results';
        $data['header']['type'] = "Exercise";
        $data['header']['title'] = Exercise::getTitleById($params["id"][0])['title'];
        $data['exercise_id'] = $params["id"][0];

        $data['fulfillments'] = Fulfillment::getAll($params["id"][0]);
        foreach ($data['fulfillments'] as $key => $fulfillment) {
            $data['answers'][$key] = Answer::getAnswerByFulfillment($fulfillment->getId());
        }
        $data['questions'] = Question::getQuestionByExercise($params["id"][0]);

        $renderer = new Renderer();
        $view = 'fulfillments/results.php';
        $renderer->renderView($renderer->createView($view, $data));
    }

    public function save($params)
    {
        $exercise_id = $params['id'][0];
        $fulfillment_id = Fulfillment::create($params['id'][0]);
        foreach ($_POST['fulfillment'] as $key => $answer) {
            Answer::save($key, $fulfillment_id, $answer);
        }
        header('location: /exercises/' . $exercise_id . '/fulfillments/' . $fulfillment_id . '/edit');
    }

    public function editExerciseFulfillment($params)
    {
        $data['header']['type'] = "Exercise";
        $data['header']['link'] = "/exercises/" . $params["id"][0] . "/results";
        $data['header']['title'] = Exercise::getTitleById($params["id"][0])['title'];
        $data['exercise_id'] = $params["id"][0];
        $data['fulfillment_id'] = $params["id"][1];
        $data['questions'] = Question::getQuestionByExercise($params["id"][0]);
        $data['answers'] = Answer::getAnswerByFulfillment($params["id"][1]);
        $renderer = new Renderer();
        $view = 'fulfillments/fulfillmentsEdit.php';
        $renderer->renderView($renderer->createView($view, $data));
    }

    public function updateExerciseFulfillment($params)
    {
        $fulfillment_id = $params['id'][1];
        foreach ($_POST['answers']['attributes'] as $key => $answer) {
            Answer::update($answer, $fulfillment_id, $key);
        }
        header('location: /exercises/' . $params['id'][0] . '/fulfillments/' . $params['id'][1] . '/edit');
    }

    public function showFieldFulfillments($params)
    {
        $data['color'] = 'results';
        $data['header']['type'] = "Exercise";
        $data['header']['link'] = "/exercises/" . $params["id"][0] . "/results";
        $data['header']['title'] = Question::getAQuestion($params["id"][1])[0]->getTitle();

        $data['exercise_id'] = $params["id"][0];
        $data['question'] = Question::getAQuestion($params["id"][1]);

        $data['fulfillments'] = Fulfillment::getAll($params["id"][0]);
        $data['answers'] = Answer::getAnswerByQuestionId($params["id"][1]);
        $renderer = new Renderer();
        $view = 'fulfillments/fieldFulfillments.php';
        $renderer->renderView($renderer->createView($view, $data));
    }


    public function showFullfilment($params)
    {
        $data['color'] = 'results';
        $data['header']['type'] = "Exercise";
        $data['header']['title'] = Exercise::getTitleById($params["id"][0])['title'];
        $data['header']['link'] = "/exercises/" . $params["id"][0] . "/results";
        $data['exercise_id'] = $params["id"][0];
        $data['questions'] = Question::getQuestionByExercise($params["id"][0]);
        $data['fulfillment'] = Fulfillment::getFulfillmentById($params["id"][1]);
        $data['answers'] = Answer::getAnswerByFulfillment($params["id"][1]);

        $renderer = new Renderer();

        $view = 'fulfillments/fullfilment.php';

        $renderer->renderView($renderer->createView($view, $data));
    }


    public function manageFulfillments($params)
    {

        $data['header']['type'] = "Exercise";
        $data['header']['title'] = Exercise::getTitleById($params["id"][0])['title'];
        $data['header']['link'] = "/exercises/" . $params["id"][0] . "/results";

        $data['exercise_id'] = $params["id"][0];
        $data['questions'] = Question::getQuestionByExercise($params["id"][0]);
        $data['fulfillments'] = Fulfillment::getAll($params["id"][0]);
        $renderer = new Renderer();
        $view = 'fulfillments/manageFulfillments.php';
        $renderer->renderView($renderer->createView($view, $data));
    }

    public function deleteFulfillment($params)
    {
        Fulfillment::delete($params["id"][1]);
        header('location: /exercises/' . $params["id"][0] . '/fulfillments');
    }
}