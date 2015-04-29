<?php

$factory('App\Staff', [
    'first_name'   => $faker->firstName,
    'last_name'    => $faker->lastName,
    'email'        => $faker->email,
    'password'     => bcrypt('password'),
    'access_level' => 'author'
]);

$factory('App\Article', [
    'staff_id' => 'factory:App\Staff',
    'title'    => $faker->sentence,
    'body'     => $faker->paragraph
]);