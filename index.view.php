<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Fundamentals</title>
</head>
<body>
  <h1>Names</h1>

  For-each loop:
  <ul>
    <?php
      foreach ($names as $name) {
        echo "<li>{$name}</li>";
      }
    ?>
  </ul>

  <h1>Movies Recommendation</h1>

  Custom filter function:
  <ul>
    <?php foreach (filter($movies, function($movie) {
      return $movie['year'] > 1990;
    }) as $movie) : ?>
      <li><?= $movie['title']; ?></li>
    <?php endforeach; ?>
  </ul>

  Built-in filter function:
  <ul>
    <?php
      foreach (array_filter($movies, function($movie) {
        return $movie['director'] === 'Francis Ford Coppola';
      }) as $movie) {
        echo "<li>{$movie['title']}</li>";
      }
    ?>
  </ul>
</body>
</html>
