<?php

class DB
{
  public static function connect()
  {
    try {
      $conn = new PDO("mysql:host=localhost;dbname=db_employees_php", "root", "");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;

    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
}
