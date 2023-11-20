<?php
session_start();
require './app/autoload.php';

$home = new HomeController();
$my_pages = ['index', 'edit', 'create', 'delete'];

require './views/include/header.php';

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true)
{
  if (isset($_GET['page']))
  {
    $page = $_GET['page'];
    
    if (in_array($page, $my_pages))
    {
      $home->index($page);
    } else if ($page === 'logout') 
    {
      $home->auth_route('logout');
    } else
    {
      include 'views/include/404.php';
    }
  } else
  {
    $home->index('index');
  }
} else if (isset($_GET['page']) && $_GET['page'] === 'register')
{
  $home->auth_route('register');
} else {
  $home->auth_route('login');
}

require './views/include/footer.php';
