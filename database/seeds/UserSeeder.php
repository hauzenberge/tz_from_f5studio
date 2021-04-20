<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        	'first_name' => 'Admin', 
        	'last_name' => 'Adminskiy', 
        	'phone' => '+380682092340', 
        	'role_id' => 1, 
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('password'),
        ]);
        
        App\User::create([
        	'first_name' => 'Client', 
        	'last_name' => 'Adminskiy', 
        	'phone' => '+380682092340', 
        	'role_id' => 2, 
        	'email' => 'client@admin.com',
        	'password' => bcrypt('password'),
        ]);
    }
}
