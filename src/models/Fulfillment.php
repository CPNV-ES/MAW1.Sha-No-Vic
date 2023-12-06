<?php
/**
 * Title : Model Fulfillment
 * Description : Create a new exercise
 * Author : Montavon Victorien
 * Creation date : 06.10.2023
 * Version : 1.0
 */
namespace App\models;

use Exception;
use PDO;
use Exercise;

class Fulfillment extends Model
{
    public static $table = 'fulfillments';
    protected $id;
    protected $timestamp;
    protected $exercise_id;

    public static function getAll($exercise_id)
    {
        $query = "SELECT * FROM " . self::$table . " WHERE exercise_id = " . $exercise_id;
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}