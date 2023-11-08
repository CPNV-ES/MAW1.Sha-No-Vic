<?php

/**
 * Title : Abstract Class Model
 * Description : Abstract model for all models
 * Author : Montavon Victorien
 * Creation date : 13.09.2023
 * Version : 1.0
 */

namespace App\models;

use PDO;

abstract class Model
{
    protected static $pdo;

    protected $host;
    protected $db;
    protected $dbuser;
    protected $dbpassword;

    /**
     * Constructor of the model
     * @param $host , @param $db, @param $dbuser, @param $dbpassword
     * @return void, create a new model
     */

    public function __construct()
    {
        $this->setupConnection();
    }

    public static function setupConnection(): void
    {
        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_DATABASE'];
        $dbuser = $_ENV['DB_USERNAME'];
        $dbpassword = $_ENV['DB_PASSWORD'];

        if (self::$pdo == null) {
            $dsn = "mysql:host=$host;dbname=$dbname";
            $pdo = new PDO($dsn, $dbuser, $dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo = $pdo;

        }

    }
}
