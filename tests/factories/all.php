<?php

$factory('App\Role', [
    'role' => null
]);

$factory('App\Staff', [
    'first_name'   => $faker->firstName,
    'last_name'    => $faker->lastName,
    'email'        => $faker->email,
    'password'     => bcrypt('password'),
    'role_id'      => 3
]);

$factory('App\Tag', [
    'name' => $faker->word
]);

$factory('App\Article', [
    'staff_id' => 'factory:App\Staff',
    'title'    => $faker->sentence,
    'body'     => $faker->paragraph,
    'excerpt'  => $faker->sentences(3)
]);

//$factory('article_tag', function($faker) {
//    $articleIds = App\Article::lists('id');
//    $tagIds = App\Tag::lists('id');
//
//    return \Illuminate\Support\Facades\DB::table('article_tag')->insert([
//        'article_id' => $faker->randomElement($articleIds),
//        'tag_id'     => $faker->randomElement($tagIds)
//    ]);
//});