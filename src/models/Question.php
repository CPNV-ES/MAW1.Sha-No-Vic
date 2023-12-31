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
    protected $id;
    protected $type;
    protected $title;


    // All getter and setter
    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function getType()
    {
        return $this->type;
    }

    public static function getAQuestion($id)
    {
        $query = "SELECT * FROM " . self::$table . " WHERE id = " . $id;
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Get all questions from an exercise
     * @param int $exercise_id
     * @return array of questions
     */
    public static function getQuestionByExercise($exercise_id): array
    {
        $query = "SELECT id, title, type FROM " . self::$table . " WHERE exercises_id = " . $exercise_id;
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function save($title, $type, $exercise_id)
    {
        $query = "INSERT INTO " . self::$table . " (title, type, exercises_id) VALUES (:title, :type, :exercise_id)";
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute(['title' => $title, 'type' => $type, 'exercise_id' => $exercise_id]);
        return self::getConnection()->lastInsertId();
    }
    public static function getQuestionById($id)
    {
        $query = "SELECT id, title, type FROM " . self::$table . " WHERE id = " . $id;
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    public static function updateQuestion($id, $title, $type)
    {
        $query = "UPDATE " . self::$table . " SET title = :title, type = :type WHERE id = :id";
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute(['title' => $title, 'type' => $type, 'id' => $id]);
    }
    public static function deleteQuestion($id)
    {
        $query = "DELETE FROM " . self::$table . " WHERE id = " . $id;
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute();
    }
}