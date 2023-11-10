<?php

/**
 * Title : Abstract Class Model
 * Description : Abstract model for all models
 * Author : Montavon Victorien
 * Creation date : 13.09.2023
 * Version : 1.0
 */

namespace App\models;

use Exception;
use PDO;

abstract class Model
{
    public static $pdo;
    protected static $table;

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
        self::setupConnection();
    }

    public static function setupConnection()
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
            return $pdo;
        }

    }

    /**
     * Method to get all exercises from database
     * @return array of exercises
     * @throws Exception
     */
    public static function getAll()
    {
        if (self::$table == null) {
            throw new Exception("Table does not exist");
        } else {
            $query = "SELECT * FROM " . self::$table;
            $stmt = self::$pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
        }
    }
}
