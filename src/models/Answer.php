<?php

namespace App\models;

use App\models\Model;
use PDO;

class Answer extends Model
{
    protected $id;
    public static $table = 'answers';
    protected $questions_id;
    protected $fulfillments_id;
    protected $answer;

    public function getId()
    {
        return $this->id;
    }

    public function getQuestionsId()
    {
        return $this->questions_id;
    }

    public function getFulfillmentsId()
    {
        return $this->fulfillments_id;
    }

    public function getAnswer()
    {
        return $this->answer;
    }

    public static function getAnswerByQuestionId($question_id)
    {
        $query = "SELECT * FROM answers WHERE questions_id = " . $question_id;
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
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

    public static function update($answer, $fulfillment_id, $question_id)
    {
        $query = "UPDATE " . self::$table . " SET answer = :answer WHERE fulfillments_id = :fulfillments_id AND questions_id = :questions_id";
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute([':answer' => $answer, ':fulfillments_id' => $fulfillment_id, ':questions_id' => $question_id]);
    }
}