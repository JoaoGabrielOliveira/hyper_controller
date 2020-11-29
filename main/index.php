<?php

include_once '../vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router("http://localhost/main");

$router->namespace("Hyper\\Controller");
$router->get("/", "HomeController:index");

$router->group("user");
$router->get("/", "UserController:index");
$router->get("/{id}", "UserController:show");

$router->dispatch();


?>