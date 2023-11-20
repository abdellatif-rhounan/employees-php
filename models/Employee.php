<?php

class Employee
{
  public static function all()
  {
    $query = 'SELECT * FROM employees';
    $stmt = DB::connect()->prepare($query);
    $stmt->execute();

    $data = $stmt->fetchAll();
    $stmt = null;

    return $data;
  }

  public static function searchEmployee($search)
  {
    try {
      $query = 'SELECT * FROM employees WHERE first_name LIKE ? OR last_name LIKE ?';
      $stmt = DB::connect()->prepare($query);

      $stmt->execute(['%'. $search .'%', '%'. $search .'%']);
      $data = $stmt->fetchAll();
      $stmt = null;

      return $data;

    } catch (PDOException $e) {
      echo 'Error' . $e->getMessage();
    }
  }

  public static function create($data)
  {
    try {
      $query = 'INSERT INTO employees (first_name, last_name, cni, email, phone, department, job, join_date, status, salary) VALUES (:first_name, :last_name, :cni, :email, :phone, :department, :job, :join_date, :status, :salary)';
      $stmt = DB::connect()->prepare($query);
      
      $stmt->bindParam(':first_name', $data['first_name']);
      $stmt->bindParam(':last_name', $data['last_name']);
      $stmt->bindParam(':cni', $data['cni']);
      $stmt->bindParam(':email', $data['email']);
      $stmt->bindParam(':phone', $data['phone']);
      $stmt->bindParam(':department', $data['department']);
      $stmt->bindParam(':job', $data['job']);
      $stmt->bindParam(':join_date', $data['join_date']);
      $stmt->bindParam(':status', $data['status']);
      $stmt->bindParam(':salary', $data['salary']);

      $stmt->execute();
      $stmt = null;

    } catch (PDOException $e) {
      echo 'Error' . $e->getMessage();
    }
  }

  public static function getEmployee($id) {
    try {
      $query = 'SELECT * FROM employees WHERE id=:id';
      $stmt = DB::connect()->prepare($query);

      $stmt->execute([":id" => $id]);
      $employee = $stmt->fetch();

      $stmt = null;
      return $employee;

    } catch (PDOException $e) {
      echo 'Error' . $e->getMessage();
    }
  }

  public static function update($data)
  {
    try {
      $query = 'UPDATE employees SET first_name = :first_name, last_name = :last_name, cni = :cni, email = :email, phone = :phone, department = :department, job = :job, join_date = :join_date, status = :status, salary = :salary WHERE id = :id';
      $stmt = DB::connect()->prepare($query);
      
      $stmt->bindParam(':id', $data['id']);
      $stmt->bindParam(':first_name', $data['first_name']);
      $stmt->bindParam(':last_name', $data['last_name']);
      $stmt->bindParam(':cni', $data['cni']);
      $stmt->bindParam(':email', $data['email']);
      $stmt->bindParam(':phone', $data['phone']);
      $stmt->bindParam(':department', $data['department']);
      $stmt->bindParam(':job', $data['job']);
      $stmt->bindParam(':join_date', $data['join_date']);
      $stmt->bindParam(':status', $data['status']);
      $stmt->bindParam(':salary', $data['salary']);

      $stmt->execute();
      $stmt = null;

    } catch (PDOException $e) {
      echo 'Error' . $e->getMessage();
    }
  }

  public static function destroy($id)
  {
    try {
      $query = 'DELETE FROM employees WHERE id=:id';
      $stmt = DB::connect()->prepare($query);
      $stmt->execute([":id" => $id]);
      $stmt = null;

    } catch (PDOException $e) {
      echo 'Error' . $e->getMessage();
    }
  }
}
