<?php

class UserController
{
  public function register()
  {
    $options = ['const' => 12];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);

    $data = [
      'first_name'  => $_POST['first-name'],
      'last_name'   => $_POST['last-name'],
      'username'    => $_POST['username'],
      'password'    => $password,
    ];

    try {
      User::createUser($data);
      Session::set('success', 'User created successfuly');
      Redirect::to('login');

    } catch (PDOException $e) {
      echo 'Error' . $e->getMessage();
    }
  }

  public function auth()
  {
    $data = [
      'username' => $_POST['username'],
      'password' => $_POST['password']
    ];

    try {
      $result = User::login($data);

      if ($result['username'] === $data['username'] && password_verify($data['password'], $result['password'])) {
        $_SESSION['logged'] = true;
        $_SESSION['username'] = $result['username'];
        Redirect::to('index');

      } else {
        Session::set('error', 'Incorrect Data');
        Redirect::to('login');
      }

    } catch (PDOException $e) {
      echo 'Error' . $e->getMessage();
    }
  }

  public static function logout()
  {
    session_destroy();
  }
}
