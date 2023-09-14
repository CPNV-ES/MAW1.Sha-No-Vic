<?php

/**
 * Title : Entry point of the application
 * Author : Victorien Montavon
 * Creation Date : 11.09.2023
 * Version : 1.0
 */

// Require the autoload file
require_once __DIR__ . '/../vendor/autoload.php';

// Load the environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
