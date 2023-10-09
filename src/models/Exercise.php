<?php

/**
 * Title : Create Exercise
 * Description : Create a new exercise
 * Author : Montavon Victorien
 * Creation date : 06.09.2023
 * Version : 1.0
 */

class Exercise extends Model
{

    protected $id;
    protected $title;
    protected $status;
    protected $creation_date;
    protected $modification_date;

    /**
     * Constructor of the exercice
     * @param $id , @param $creation_date, @param $modification_date, @param $title, @param $status
     * @return void, create a new exercise
     */
    public function __construct($id, $title, $status, $creation_date, $modification_date)
    {
        $this->id = $id;
        $this->title = $title;
        $this->status = $status;
        $this->creation_date = $creation_date;
        $this->modification_date = $modification_date;

    }

    // All getter for exercise

    /**
     * Method to get all exercises from database
     * @return array of exercises
     * @throws Exception
     */
    public function getAll()
    {
        $query = 'SELECT * FROM exercises';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, Exercise::class);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
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

    /**
     * Save exercises to Database
     * Return the last inserted id in the DB if new, return the id modified if it was already existing
     */
    function save()
    {
        $pdo = $this->connect();
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
        }
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
}
