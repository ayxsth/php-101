<?php

include 'util.php';

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$baseUrl = getBaseUrl();

$routes = [
  $baseUrl => 'controllers/home.php',
  $baseUrl . 'about/' => 'controllers/about.php',
  $baseUrl . 'career/' => 'controllers/career.php',
];

if (array_key_exists($url, $routes)) {
  include $routes[$url];
} else {
  dd('404 - Page not found');
}
