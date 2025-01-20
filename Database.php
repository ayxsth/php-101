<?php

class Database {
  private $connection;

  public function __construct($config, $username = "root", $password = "") {
    $connectionString = "mysql:" . http_build_query($config, "", ";");

    $this->connection = new PDO($connectionString, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($sql, $params = []) {
    $statement = $this->connection->prepare($sql);

    $statement->execute($params);

    return $statement;
  }
}
