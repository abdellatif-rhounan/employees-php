<?php

class User
{
  public static function createUser($data)
  {
    try {
      $query = 'INSERT INTO users (first_name, last_name, username, password) VALUES (:first_name, :last_name, :username, :password)';
      $stmt = DB::connect()->prepare($query);
      
      $stmt->bindParam(':first_name', $data['first_name']);
      $stmt->bindParam(':last_name', $data['last_name']);
      $stmt->bindParam(':username', $data['username']);
      $stmt->bindParam(':password', $data['password']);

      $stmt->execute();
      $stmt = null;

    } catch (PDOException $e) {
      echo 'Error' . $e->getMessage();
    }
  }

  public static function login($data)
  {
    try {
      $query = 'SELECT * FROM users WHERE username=:username';
      $stmt = DB::connect()->prepare($query);

      $stmt->execute([":username" => $data['username']]);
      $user = $stmt->fetch();

      $stmt = null;
      return $user;

    } catch (PDOException $e) {
      echo 'Error' . $e->getMessage();
    }
  }
}
