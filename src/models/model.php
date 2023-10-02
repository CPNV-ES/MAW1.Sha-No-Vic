<?php

/**
 * Title : Abstract Class Model
 * Author : Montavon Victorien
 * Verison : 1.0.0
 * Date : 30.08.2023
 */

abstract class Model
{
    private $host;
    private $db;
    private $user;
    private $password;

    public function __construct($host, $db, $user, $password)
    {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->password = $password;
    }

    private function connect()
    {
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
