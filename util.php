<?php

function dd($data) {
  echo '<pre>';
  var_dump($data);
  echo '</pre>';

  die();
}

function getBaseUrl() {
  // Get the folder name dynamically
  $scriptName = dirname($_SERVER['SCRIPT_NAME']) . '/';

  return rtrim($scriptName, '/') . '/';
}

function isPageActive($path) {
  $currentUrl = parse_url($_SERVER['REQUEST_URI'])['path'];

  return rtrim($currentUrl, '/') === rtrim($path, '/');

}
