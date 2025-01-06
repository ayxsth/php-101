<?php

include 'util.php';
include 'Database.php';

$dsn = 'mysql:host=localhost;dbname=pdo;port=3306;charset=utf8;user=root;password=';

$pdo = new PDO($dsn);

$pdoStatement = $pdo->prepare('SELECT * FROM movies WHERE year > 1990');
$pdoStatement->execute();

$pdoMovies = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

// ----------------------------

$config = include 'config.php';

$db = new Database($config['database']);

$dbStatement = $db->query('SELECT * FROM movies');
$dbMovies = $dbStatement->fetchAll();

// ----------------------------

$dbStatementWithParams = $db->query('SELECT * FROM movies WHERE director = :director', ['director' => 'Francis Ford Coppola']);
$dbMoviesWithParams = $dbStatementWithParams->fetchAll();

?>

<h1>Movies [PDO]</h1>
<?php generateMoviesTable($pdoMovies); ?>

<h1>Movies [Custom Database Class]</h1>
<?php generateMoviesTable($dbMovies); ?>

<h1>Movies By Francis Ford Coppola [Custom Database Class]</h1>
<?php generateMoviesTable($dbMoviesWithParams); ?>
