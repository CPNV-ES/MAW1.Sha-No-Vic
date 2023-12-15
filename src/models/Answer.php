<?php

namespace App\models;

use App\models\Model;
use PDO;

class Answer extends Model
{
    protected $id;
    protected $questions_id;
    protected $fulfillments_id;
    protected $answer;
    public static function getAnswer($question_id, $fulfillment_id)
    {
        $query = "SELECT * FROM answers WHERE questions_id =  . $question_id . AND fulfillments_id = . $fulfillment_id";
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_CLASS, self::class);
    }
    public static function save($questions_id, $fulfillments_id, $answer)
    {
        $query = "INSERT INTO answers (questions_id, fulfillments_id, answer) VALUES (?, ?, ?)";
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute([$questions_id, $fulfillments_id, $answer]);
        return $stmt->fetch(PDO::FETCH_CLASS) && $stmt->lastInsertId();

    }

    public static function getAnswerByFulfillment($fulfillment_id)
    {
        $query = "SELECT * FROM answers WHERE fulfillments_id = " . $fulfillment_id;
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getAnswersByQuestion($question_id)
    {
        $query = "SELECT * FROM answers WHERE questions_id = " . $question_id;
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function getAnAnswer()
    {
        return $this->answer;
    }

}