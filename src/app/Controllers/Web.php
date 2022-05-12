<?php

namespace App\Controllers;

use App\Models\User;

class Web 
{
  public function home($data) {
    echo "<h1>Home</h1>";
    // $user = new User();
    // $list = $user->find()->fetch(true);

    // var_dump($list);
  }

  public function blog($data) {
    echo "<h1>Blog</h1>";
    require __DIR__ . "/../../resources/views/website/blog.php";
  }

  public function post($data) {
    echo "<h1>Artigo</h1>";
  }

  public function category($data) {
    echo "<h1>Categoria</h1>";
  }

  public function contact($data) {
    echo "<h1>Contato</h1>";
    $url = URL_BASE . "/contato";
    require __DIR__ . "/../../resources/views/website/contact.php";

  }

  public function error($data) {
    echo "<h1>Erro {$data['errcode']}</h1>";
    var_dump($data);
  }
}