<?php

include 'utils.php';

$currentURL = $_SERVER['REDIRECT_URL'] ?? '/php-101/';

$routes = [
  "/php-101/" => "controllers/home.php",
  "/php-101/team.php" => "controllers/team.php",
  "/php-101/todo.php" => "controllers/todo.php",
  "/php-101/todos.php" => "controllers/todos.php",
  "/php-101/todo-create.php" => "controllers/todo-create.php",
];

if (array_key_exists($currentURL, $routes)) {
  include $routes[$currentURL];
} else {
  abort();
}
