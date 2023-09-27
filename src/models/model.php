<?php

/**
 * Title : Abstract Class Model
 * Description : Abstract model for all models
 * Author : Montavon Victorien
 * Creation date : 13.09.2023
 * Version : 1.0
 */


abstract class Model
{
    protected $host;
    protected $db;
    protected $dbuser;
    protected $dbpassword;


    public function connect()
    {
        $this->host = $_ENV['DB_HOST'];
        $this->dbname = $_ENV['DB_DATABASE'];
        $this->dbuser = $_ENV['DB_USERNAME'];
        $this->dbpassword = $_ENV['DB_PASSWORD'];

        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname";
            $pdo = new PDO($dsn, $this->dbuser, $this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
