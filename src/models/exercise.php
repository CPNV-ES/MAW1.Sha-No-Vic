<?php

/**
 * Title : Create Exercise
 * Description : Create a new exercise
 * Author : Montavon Victorien
 * Creation date : 06.09.2023
 * Version : 1.0
 */

class Exercise
{

    protected $id;
    protected $creation_date;
    protected $modification_date;
    protected $title;
    protected $status;


    public function __construct($id, $creation_date, $modification_date, $title, $status)
    {
        $this->id = $id;
        $this->creation_date = $creation_date;
        $this->modification_date = $modification_date;
        $this->title = $title;
        $this->status = $status;
    }

    // All getter and setter
    function getId()
    {
        return $this->id;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getStatus()
    {
        return $this->status;
    }

    // Save exercises to Database

    function save()
    {
        $pdo   = $this->connect();
        $query = 'SELECT * FROM exercises WHERE id = ?';
        $stmt  = $pdo->prepare($query);
        $stmt->execute([$this->id]);

        if ($stmt->fetch() == null) {
            $query = 'INSERT INTO exercises (id, title, creation_date, modification_date, status) VALUES (?, ?, ?, ?, ?)';
            $stmt  = $pdo->prepare($query);
            $stmt->execute([$this->id, $this->title, date("Y-m-d H:i:s"), date("Y-m-d H:i:s"), $this->status]);

            return $pdo->lastInsertId();
        } else {
            $query = 'UPDATE exercises SET title=?, creation_date=?, modification_date=?, status=? WHERE id=?';
            $stmt  = $pdo->prepare($query);
            $stmt->execute([$this->title, $this->creation_date, date("Y-m-d H:i:s"), $this->status, $this->id]);
        }
    }
        // TODO: test the save function
    }

    function update()
    {
        // TODO: create function who update the exercise in th database
        // Title is not modifiable after created, only label of question and answer
    }

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
