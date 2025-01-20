<?php

include 'Database.php';

$config = include 'config.php';

$navTitle = 'Todos';

$connection = new Database($config['database']);

$sql = "SELECT * FROM todo";

$statement = $connection->query($sql);

$todos = $statement->fetchAll();

include 'views/todos.view.php';
