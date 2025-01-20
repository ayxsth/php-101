<?php

class Database {
  private $connection;

  public function __construct() {
    $connectionString = "mysql:host=localhost;dbname=session;port=3306";

    $this->connection = new PDO($connectionString, "root", "", [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
  }

  public function query($sql, $params = []) {
    $statement = $this->connection->prepare($sql);

    $statement->execute($params);

    return $statement;
  }
}
