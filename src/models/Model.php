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
    protected $pdo;


    public static function getInstance()
    {
        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_DATABASE'];
        $dbuser = $_ENV['DB_USERNAME'];
        $dbpassword = $_ENV['DB_PASSWORD'];

        try {
            $dsn = "mysql:host=$host;dbname=$dbname";
            $pdo = new PDO($dsn, $dbuser, $dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
