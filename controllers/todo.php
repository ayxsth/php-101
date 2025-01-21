<?php

include 'Database.php';

$config = include 'config.php';

$navTitle = 'Todos';

$connection = new Database($config['database']);

$sql = "SELECT * FROM todo WHERE id = :id";

$statement = $connection->query($sql, [
  'id' => $_GET['id']
]);

$todo = $statement->findOrFail();

include 'views/todo.view.php';
