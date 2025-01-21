<?php

class Database {
  private $connection;
  private $statement;

  public function __construct($config, $username = "root", $password = "") {
    $connectionString = "mysql:" . http_build_query($config, "", ";");

    $this->connection = new PDO($connectionString, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($sql, $params = []) {
    $this->statement = $this->connection->prepare($sql);

    $this->statement->execute($params);

    return $this;
  }

  public function get() {
    return $this->statement->fetchAll();
  }

  public function find() {
    return $this->statement->fetch();
  }

  public function findOrFail() {
    $result = $this->find();

    if (!$result) {
      abort();
    }

    return $result;
  }
}
