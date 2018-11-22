<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        App\User::create([
            'name' => 'admin',
            'email' => 'admin@localhost',
            'password' => bcrypt('123456'), // secret
            'remember_token' => str_random(10),
        ]);

        factory(App\User::class, 100)->create();
    }
}
