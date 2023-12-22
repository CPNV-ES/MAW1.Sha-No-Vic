<?php

/**
 * Title : Entry point of the application
 * Author : Victorien Montavon
 * Creation Date : 11.09.2023
 * Version : 1.0
 */

// Require the autoload file
require_once __DIR__ . '/../vendor/autoload.php';


use App\Routing\Router;

session_start();
// Load the environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
// Create the router
$router = new Router();
$router->redirectByPath($_SERVER['REQUEST_URI']);
