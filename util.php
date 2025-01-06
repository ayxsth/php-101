<?php

function dd($data) {
  echo '<pre>';
  var_dump($data);
  echo '</pre>';

  die();
}

function generateMoviesTable($movies) {
  echo '<table border="1">';
  echo '<tr>';
  echo '<th>ID</th>';
  echo '<th>Title</th>';
  echo '<th>Director</th>';
  echo '<th>Year</th>';
  echo '</tr>';
  foreach ($movies as $movie) {
    echo '<tr>';
    echo '<td>' . $movie['id'] . '</td>';
    echo '<td>' . $movie['title'] . '</td>';
    echo '<td>' . $movie['director'] . '</td>';
    echo '<td>' . $movie['year'] . '</td>';
    echo '</tr>';
  }
  echo '</table>';
}
