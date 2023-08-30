<?php

/**
 *  * Title: user.php
 * Author: Montavon Victorien
 * Version: 1.0 from 30.08.2023
 */


define('USER_DATA_PATHNAME', 'data/users.json');


/**
 * Define of User
 * @param string $username
 * @param string $password
 * @param string $name
 */
class User
{
    protected $id;
    protected $username;
    protected $password;
    protected $name;



    /**
     * Constructor of User
     */

    public function __construct($id, $username, $password, $name)
    {

        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
    }

    /**
     * Get the user from the database
     */
    static function getUser($id)
    {
        $pdo = getConnector();
        $query = 'SELECT * FROM users WHERE id = ?';
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $user = $stmt->fetch();
        $userAsObject = new User($user['id'], $user['username'], $user['password'], $user['name']);

        return $userAsObject;
    }

    /**
     * Get the username of the user
     */
    public function getUsername()
    {
        return $this->username;
    }

    /** 
     * Get the name of the user
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Save the user in the database
     */
    function save()
    {
        $pdo = getConnector();
        $query = 'INSERT INTO users (id, username, password, name) VALUES (?, ?, ?, ?)';
        $stmt = $pdo->prepare($query);
        $stmt->execute([$this->id, $this->username, $this->password, $this->name]);

        return $pdo->lastInsertId();
    }
}
