<?php

use App\Models\Post;
use CoffeeCode\Paginator\Paginator;

// require __DIR__. '/../../../vendor/autoload.php';

$post = new Post();
$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_URL);

$paginator = new Paginator(URL_BASE . '/blog/?page=');
$paginator->pager($post->find()->count(), 3, $page, 2);

$posts = $post->find()->limit($paginator->limit())->offset($paginator->offset())->fetch(true);

echo "<link rel='stylesheet' href='../../resources/css/global.css'>";
echo "<link rel='stylesheet' href='../../resources/css/blog.css'>";



echo "<div class='blog-container'>";
echo "<p>Página {$paginator->page()} de {$paginator->pages()}</p>";

if($posts) {
  foreach($posts as $p) {
    echo "<article class='post-card'><img class='post-cover' src='" . URL_BASE . "/storage/images/cover/{$p->cover}'><h1 class='post-title'>{$p->title}</h1><div class='post-description'>{$p->description}</div></article>";
  }
}

echo "</div>";

echo $paginator->render();