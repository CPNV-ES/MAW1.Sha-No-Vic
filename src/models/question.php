<?php

/**
 * Title : Model Question
 * Description : Model of the question
 * Author : Montavon Victorien
 * Creation date : 06.09.2023
 * Version : 1.0
 */

class Question
{

    protected $id;
    protected $label;
    protected $value_kind;
    protected $exercise_id;

    public function __construct($id, $label, $value_kind, $exercise_id)
    {
        $this->id = $id;
        $this->label = $label;
        $this->value_kind = $value_kind;
        $this->exercise_id = $exercise_id;
    }

    // All getter and setter
    public function getId()
    {
        return $this->id;
    }

    function setLabel($newLabel)
    {
        $this->label = $newLabel;
    }

    public function getLabel()
    {
        return $this->label;
    }

    function setValueKind($newValueKind)
    {
        $this->value_kind = $newValueKind;
    }

    public function getValueKind()
    {
        return $this->value_kind;
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
