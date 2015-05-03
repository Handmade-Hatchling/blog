<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class ArticlesTagsTableSeeder extends Seeder {

    public function run()
    {
        TestDummy::times(50)->create('article_tag');
    }

}