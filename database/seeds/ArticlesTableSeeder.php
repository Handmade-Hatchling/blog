<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class ArticlesTableSeeder extends Seeder {

    public function run()
    {
         TestDummy::times(50)->create('App\Article');
    }

}