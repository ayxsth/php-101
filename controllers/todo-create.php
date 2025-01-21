<?php

include 'Database.php';

$config = include 'config.php';

$connection = new Database($config['database']);

$navTitle = "Create Todo";

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (empty($_POST['title'])) {
    $errors['title'] = 'Title is required';
  }

  if (empty($_POST['description'])) {
    $errors['description'] = 'Description is required';
  }

  if (empty($errors)) {
    $connection->query("INSERT INTO todo(title, description, created_by) VALUES (:title, :description, :createdBy)", [
      'title' => $_POST['title'],
      'description' => $_POST['description'],
      'createdBy' => 1
    ]);

    header('Location: /php-101/todos.php');
  }
}

include 'views/todo-create.view.php';
