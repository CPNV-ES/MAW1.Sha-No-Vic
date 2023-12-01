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

class Fulfillment extends Model
{
    public static $table = 'fulfillments';
    protected $id;
    protected $timestamp;
    protected $exercise_id;

}