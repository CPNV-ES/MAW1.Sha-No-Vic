<?php

/**
 * Title : Create Exercise
 * Description : Create a new exercise
 * Author : Montavon Victorien
 * Creation date : 06.09.2023
 * Version : 1.0
 */

namespace App\models;

use Exception;
use PDO;

class Exercise extends Model
{
    public static $table = 'exercises';
    protected $id;
    protected $title;
    protected $status;
    //TODO: Use object DATETIME instead of string and use it with format to avoid conflict with the database
    protected $creation_date;
    protected $modification_date;


    /**
     * Method to get all exercises from database
     * @return array of exercises
     * @throws Exception
     */
    public static function getByStatus($status): array
    {
        $query = "SELECT * FROM " . self::$table . " WHERE status = " . $status;
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getAll(): array
    {
        $query = "SELECT * FROM " . self::$table;
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }


    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public static function getTitleById($exercise_id)
    {
        $query = "SELECT title FROM " . self::$table . " WHERE id = " . $exercise_id;
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)->toString();
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getCreationDate()
    {
        return $this->creation_date;
    }

    public function getModificationDate()
    {
        return $this->modification_date;
    }
}

/**
 * Save exercises to Database
 * Return the last inserted id in the DB if new, return the id modified if it was already existing
 */
function save()
{/*
    $pdo = self::$pdo;
    $query = 'SELECT * FROM exercises WHERE id = ?';
    $stmt = $pdo->prepare($query);
    $stmt->execute([$this->id]);

    if ($stmt->fetch() == null) {
        $query = 'INSERT INTO exercises (id, title, creation_date, modification_date, status) VALUES (?, ?, ?, ?, ?)';
        $stmt = $pdo->prepare($query);
        $stmt->execute([$this->id, $this->title, date("Y-m-d H:i:s"), date("Y-m-d H:i:s"), $this->status]);

        return $pdo->lastInsertId();
    } else {
        $query = 'UPDATE exercises SET title=?, creation_date=?, modification_date=?, status=? WHERE id=?';
        $stmt = $pdo->prepare($query);
        $stmt->execute([$this->title, $this->creation_date, date("Y-m-d H:i:s"), $this->status, $this->id]);

        return $this->id;
    }*/
}// TODO: test the save function


function beReady()
{
    //TODO: create a function who change the status of the exercise from building to answering
    // cannot go backwards in status
}

function close()
{
    //TODO: create a function who change the status of the exercise from answering to closed
    // cannot go backwards in status
    // once the exercises is closed the "user" can't answer anymore
}

function delete()
{
    // TODO: create function who delete the exercise, question and answers accordingly


}
