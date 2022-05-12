<?php

require __DIR__ . "/../../vendor/autoload.php";

use App\Models\Post;
use Faker\Factory;

$faker = Factory::create();

$dirImages = '/var/www/html/storage/images';

for ($i=0; $i < 30; $i++) {
  $post = new Post();
  $post->title = $faker->sentence();
  $post->description = $faker->paragraphs(6, true);
  $post->cover = $faker->image($dirImages,  640, 480, 'animals', false, true, 'cats', true, 'jpg');
  $post->save();    
}

if($post->fail()){
  echo "<h3 style='color:red'" . $post->fail()->getMessage() . "</h3>";
} else {
  echo "<h3>Posts gerados com sucesso!</h3>";
}


//sudo chmod -R 755 /var/www/html/storage/images

