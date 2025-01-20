<?php

function dd($data) {
  echo "<pre>";
  var_dump($data);
  echo "</pre>";

  die();
}

function abort($code=404){
  http_response_code($code);

  include 'views/errors/'.$code.'.view.php';

  die();
}
