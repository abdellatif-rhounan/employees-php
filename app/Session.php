<?php

class Session
{
  public static function set($type, $msg)
  {
    setcookie($type, $msg, time() + 5, '/');
  }
}
