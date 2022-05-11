<?php

namespace App\Controllers;

class Admin
{
  public function home($data) {
    echo "<h1>Admin</h1>";
    var_dump($data);
  }
}