<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class RolesTableSeeder extends Seeder {

    public function run()
    {
        TestDummy::create('App\Role', ['role' => 'author']);
        TestDummy::create('App\Role', ['role' => 'editor']);
        TestDummy::create('App\Role', ['role' => 'admin']);
    }

}