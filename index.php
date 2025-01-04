<?php

$names = ['John', 'Jane', 'Doe'];

$movies = [
  [
    'title' => 'The Shawshank Redemption',
    'director' => 'Frank Darabont',
    'year' => 1994
  ],
  [
    'title' => 'The Godfather',
    'director' => 'Francis Ford Coppola',
    'year' => 1972
  ],
  [
    'title' => 'The Dark Knight',
    'director' => 'Christopher Nolan',
    'year' => 2008
  ], [
    'title' => 'The Godfather: Part II',
    'director' => 'Francis Ford Coppola',
    'year' => 1974
  ]
];

function filter($data, $fn) {
  $filteredData = [];

  foreach ($data as $datum) {
    if ($fn($datum)) {
      $filteredData[] = $datum;
    }
  }

  return $filteredData;
}


include 'index.view.php';
