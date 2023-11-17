<?php

/**
 * Title : Model Question
 * Description : Model of the question
 * Author : Montavon Victorien
 * Creation date : 06.09.2023
 * Version : 1.0
 */

namespace App\models;

use PDO;

class Question extends Model
{
    public static $table = 'questions';
    protected $label;
    protected $value_kind;
    protected $exercise_id;

    public function __construct($exercise_id, $label, $value_kind)
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

    /**
     * Get all questions from an exercise
     * @param int $exercise_id
     * @return array of questions
     */
    public function GetAllQuestions($exercise_id): array
    {
        $query = "SELECT * FROM " . self::$table . " WHERE exercises_id = " . $exercise_id;
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
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
