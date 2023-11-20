<?php

class HomeController
{
  public function index($page)
  {
    include 'views/'. $page .'.php';
  }
  
  public function auth_route($page)
  {
    include 'views/auth/'. $page .'.php';
  }
}
