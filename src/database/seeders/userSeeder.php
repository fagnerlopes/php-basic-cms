<?php

require __DIR__ . "/../../vendor/autoload.php";

use App\Models\User;
use Faker\Factory;

$faker = Factory::create();

$dirImages = '/var/www/html/storage/images/avatar';

for ($i=0; $i < 30; $i++) {
  $user = new User();
  $user->first_name = $faker->firstName();
  $user->last_name = $faker->lastName();
  $user->email = $faker->email();
  $user->password = password_hash($faker->numerify('Dev123456'), PASSWORD_DEFAULT);
  $user->avatar = $faker->image($dirImages,  150, 150, 'people', false, true, 'user', true, 'jpg');
  $result = $user->save();   
  
}

if($user->fail()){
  echo "<h3 style='color:red'" . $user->fail()->getMessage() . "</h3>";
} else {
  echo "<h3>Usuários gerados com sucesso!</h3>";
}

//sudo chmod -R 755 /var/www/html/storage/images

