<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class RolesTableSeeder extends Seeder {

    public function run()
    {
        TestDummy::create('App\Role', ['name' => 'author']);
        TestDummy::create('App\Role', ['name' => 'editor']);
        TestDummy::create('App\Role', ['name' => 'admin']);
    }

}