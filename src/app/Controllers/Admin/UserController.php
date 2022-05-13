<?php

namespace App\Controllers\Admin;

use App\Controllers\AdminBaseController;

class UserController extends AdminBaseController {
  public function home($data) {
    echo "<h1>Admin</h1>";
  }
}