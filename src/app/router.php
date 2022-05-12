<?php

use CoffeeCode\Router\Router;

// Router
$router = new Router(URL_BASE);

$router->namespace('App\Controllers');

/*
* WEB
* home
*/
$router->group(null);
$router->get("/", "Web:home");
$router->get("/{filter}", "Web:home");

/*
* BLOG
*/
$router->group("blog");
$router->get("/", "Web:blog");
$router->get("/{post_uri}", "Web:post");
$router->get("/categoria/{cat_uri}", "Web:category");

/*
* CONTATO
*/
$router->group('contato');
$router->get("/", "Web:contact");
$router->post("/", "Web:contact");
$router->put("/", "Web:contact");
$router->delete("/", "Web:contact");
$router->get("/{sector}", "Web:contact");
$router->get("/suporte", "Web:support");


/*
* ADMIN
*/
$router->group('admin');
$router->get("/", "Admin:home");

/*
* ERRORS
* home
*/
$router->group("ops");
$router->get("/{errcode}", "Web:error");

/*
* SEEDERS
*/
$router->group("seed");
$router->get("/posts", function ($data) {
  require_once __DIR__ . '/../database/seeders/postSeeder.php';
});
$router->get("/users", function ($data) {
  require_once __DIR__ . '/../database/seeders/userSeeder.php';
});

$router->dispatch();

if($router->error()) {
  $router->redirect("/ops/{$router->error()}");
}