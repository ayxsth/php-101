<?php

include 'Database.php';
include 'utils.php';

$db = new Database();

$statement = $db->query("SELECT * FROM note");
$notes = $statement->fetchAll();

$navTitle = "Notes";

include 'views/notes.view.php';
