<?php

use CoffeeCode\Router\Router;
use Dotenv\Dotenv;

// autoload PSR-4
require __DIR__. '/vendor/autoload.php';

// Load dotenv file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();
