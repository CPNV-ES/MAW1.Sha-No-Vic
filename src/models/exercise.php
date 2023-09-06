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

    // Save exercices to Database

    function save()
    {
        // TODO: create function who save the exercice in the database
    }

    function update()
    {
        // TODO: create function who update the exercice in th database
        // Title is not modifiable after created, only label of question and answer
    }

    function beReady()
    {
        //TODO: create a function who change the status of the exercice from building to answering
        // cannot go backwards in status
    }

    function close()
    {
        //TODO: create a function who change the status of the exercice from answering to closed
        // cannot go backwards in status
        // once the exerices is closed the "user" can't answer anymore
    }

    function delete()
    {
        // TODO: create function who delete the exercice, question and answers accordingly 

    }
}
