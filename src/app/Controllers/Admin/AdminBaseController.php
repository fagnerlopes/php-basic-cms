<?php

namespace App\Controllers;

use League\Plates\Engine;

class AdminBaseController {

  private $view;

  public function __construct()
  {
    $this->view = new Engine(__DIR__ . "/../../../resources/views/admin");
  }
}