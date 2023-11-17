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
    public static PDO $pdo;
    protected static $table;

    protected $db;
    protected $dbuser;
    protected $dbpassword;


    public static function getConnection(): PDO
    {
        if (isset(self::$pdo)) return self::$pdo;
        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_DATABASE'];
        $dbuser = $_ENV['DB_USERNAME'];
        $dbpassword = $_ENV['DB_PASSWORD'];

        $dsn = "mysql:host=$host;dbname=$dbname";
        $pdo = new PDO($dsn, $dbuser, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$pdo = $pdo;
        return $pdo;

    }

}
