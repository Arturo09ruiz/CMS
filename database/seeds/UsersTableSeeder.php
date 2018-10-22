<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 29)->create();

        App\User::create([
        	'name' => 'Arturo Ruiz',
        	'email'=> 'gregory09ruiz@gmail.com',
        	'password' => bcrypt('a2345678r')
        ]);
    }
}
