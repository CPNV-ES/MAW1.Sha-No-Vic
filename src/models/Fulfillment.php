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
use App\models\Exercise;

class Fulfillment extends Model
{
    public static $table = 'fulfillments';
    protected $id;
    protected $timestamp;
    protected $exercises_id;

    public static function getAll($exercises_id)
    {
        $query = "SELECT * FROM " . self::$table . " WHERE exercises_id = " . $exercises_id . " ORDER BY id";
        $stmt = self::getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }
}