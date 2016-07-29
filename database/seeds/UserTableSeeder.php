<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('pollo\User')->create([
        	'name' => 'Jesus Castañeda',
	        'phone' => '812150092',
	        'address' => 'Huehuetoca 213, Garcia',
	        'email' => 'jesus@test.com',
            'type' => 'admin',
	        'password' => bcrypt('secret'),
	        'remember_token' => str_random(10),
        ]);
        
        factory('pollo\User', 10)->create();
    }
}
