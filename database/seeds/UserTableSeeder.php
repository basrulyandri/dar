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
        \DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'digicrea08@gmail.com',
            'password' => bcrypt('admin'),
            'role_id' => 1,
            'activated' => 1,
            'api_token' => str_random(60),
            'activated_at' => \Carbon\Carbon::now(),
            'first_name' => 'Superadmin',
            'last_name' => '',
            'activation_code' => str_random(60)
        ]);

        \DB::table('users')->insert([
            'username' => 'basrul',
            'email' => 'rolloic@gmail.com',
            'password' => bcrypt('admin'),
            'role_id' => 2,
            'activated' => 1,
            'api_token' => str_random(60),
            'activated_at' => \Carbon\Carbon::now(),
            'first_name' => 'Basrul',
            'last_name' => 'Yandri',
            'activation_code' => str_random(60)
        ]);        
    }
}
