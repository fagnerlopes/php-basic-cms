<?php

namespace App\Controllers\Admin;

use App\Controllers\AdminBaseController;

class HomeController extends AdminBaseController {
  public function home($data) {
    echo "<h1>Admin</h1>";
  }
}