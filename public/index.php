<?php

require_once __DIR__ . "/../vendor/autoload.php";

use App\Php\Mvc\App\Router;
use App\Php\Mvc\Controller\HomeController;
use App\Php\Mvc\Controller\ProductController;


Router::add("GET", "/product/([0-9a-zA-Z]*)", ProductController::class, "categori");
Router::add("GET", "/", HomeController::class, "index");

Router::run();