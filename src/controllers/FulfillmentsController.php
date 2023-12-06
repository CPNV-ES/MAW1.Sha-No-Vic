<?php

namespace App\controllers;

use App\models\Exercise;
use App\models\Fulfillment;
use App\models\Question;
use App\Services\Renderer;

class FulfillmentsController {
    public function showFulfillments($params): void {
        $data['header']['type'] = "Exercise";
        $data['header']['title'] = Exercise::getTitleById($params["id"][0])['title'];
        $data['exercise_id'] = $params["id"][0];
        //$data['questions'] = Question::GetQuestionByExercise($params["id"][0]);
        $data['fulfillments'] = Fulfillment::getAll($params["id"][0]);
        $renderer = new Renderer();
        $view = '../views/fulfillments/results.php';
        $renderer->renderView($renderer->createView($view, $data));
    }

    public function save($params) {
        $fulfillment_id = Fulfillment::create($params['id'][0]);
        header('location: /exercises/' . $params['id'][0] . '/fulfillments/' . $fulfillment_id . '/edit');

    }

    public function editExerciseFulfillment($params){
        //dd($params);
        $data['header']['type'] = "Exercise";
        $data['header']['title'] = Exercise::getTitleById($params["id"][0])['title'];
        $data['exercise_id'] = $params["id"][0];
        $data['questions'] = Question::GetQuestionByExercise($params["id"][0]);
        $data['fulfillments'] = Fulfillment::getAll($params["id"][1]);
        $renderer = new Renderer();
        $view = '../views/fulfillments/fulfillmentsEdit.php';
        $renderer->renderView($renderer->createView($view, $data));
    }
}