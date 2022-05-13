<?php

namespace App\Controllers;

use App\Models\User;
use League\Plates\Engine;

class Web 
{
  private $view;

  public function __construct()
  {
    $this->view = new Engine(__DIR__ . "/../../resources/views/website");
  }

  public function home(array $data): void
  {
    $users = (new User())->find()->fetch(true);
    echo $this->view->render("home", [
      "title" => "Home | " . SITE,
      "users" => $users
    ]);
  }

  public function contact(array $data): void
  {
    echo "<h1>Contato</h1>";
  }

  public function error(array $data): void
  {
    echo "<h1>Erro {$data['errcode']}</h1>";
  }
}