<?php

/**
 * Title : Model Question
 * Description : Model of the question
 * Author : Montavon Victorien
 * Creation date : 06.09.2023
 * Version : 1.0
 */

namespace App\models;

class Question
{
    protected $label;
    protected $value_kind;
    protected $exercise_id;

    public function __construct($label, $value_kind, $exercise_id)
    {
        $this->exercise_id = $exercise_id;
        $this->label = $label;
        $this->value_kind = $value_kind;
    }

    // All getter and setter

    public function getLabel()
    {
        return $this->label;
    }

    function setLabel($newLabel)
    {
        $this->label = $newLabel;
    }

    public function getValueKind()
    {
        return $this->value_kind;
    }

    function setValueKind($newValueKind)
    {
        $this->value_kind = $newValueKind;
    }

    public function getAQuestion($id)
    {
        //TODO: create function who return a question depending of the id
    }

    public function GetAllQuestions($exercise_id)
    {
        //TODO: create function who return all questions from an exercise
    }

    public function save($exercise_id)
    {
        //TODO: create function who save the question in the database
    }

    public function delete($id)
    {
        //TODO: create function who delete the question in the database
    }

    public function edit($id)
    {
        //TODO: create function who edit the question in the database
    }
}
