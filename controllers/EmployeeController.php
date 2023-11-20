<?php

class EmployeeController
{
  public function index()
  {
    $data= Employee::all();

    return $data;
  }

  public function find($search)
  {
    $data = Employee::searchEmployee($search);

    return $data;
  }

  public function edit($id)
  {
    $employee = Employee::getEmployee($id);

    return $employee;
  }

  public function store() 
  {
    $data = [
      'first_name'  => $_POST['first-name'],
      'last_name'   => $_POST['last-name'],
      'cni'         => $_POST['cni'],
      'email'       => $_POST['email'],
      'phone'       => $_POST['phone'],
      'department'  => $_POST['department'],
      'job'         => $_POST['job'],
      'join_date'   => $_POST['join-date'],
      'status'      => $_POST['status'],
      'salary'      => $_POST['salary']
    ];

    try {
      Employee::create($data);
      Session::set('success', 'The Employee has been created successfuly');
      Redirect::to('index');

    } catch (PDOException $e) {
      echo 'Error' . $e->getMessage();
    }
  }
  
  public function update() 
  {
    $data = [
      'id'          => $_POST['id'],
      'first_name'  => $_POST['first-name'],
      'last_name'   => $_POST['last-name'],
      'cni'         => $_POST['cni'],
      'email'       => $_POST['email'],
      'phone'       => $_POST['phone'],
      'department'  => $_POST['department'],
      'job'         => $_POST['job'],
      'join_date'   => $_POST['join-date'],
      'status'      => $_POST['status'],
      'salary'      => $_POST['salary']
    ];

    try {
      Employee::update($data);
      Session::set('success', 'The Employee has been updated successfuly');
      Redirect::to('index');

    } catch (PDOException $e) {
      echo 'Error' . $e->getMessage();
    }
  }

  Public function destroy($id)
  {
    try {
      Employee::destroy($id);
      Session::set('success', 'The Employee has been deleted successfuly');
      Redirect::to('index');

    } catch (PDOException $e) {
      echo 'Error' . $e->getMessage();
    }
  }
}
