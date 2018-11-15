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
        // Superadmin
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
            'activation_code' => str_random(60),
            'photo' => '/photos/1/admin.jpg'
        ]);

        // Division Manager
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
            'activation_code' => str_random(60),
            'photo' => '/photos/1/ale.jpg'
        ]); 

        // Members
        \DB::table('users')->insert([
            'username' => 'andi',
            'email' => 'yandribisnis@gmail.com',
            'password' => bcrypt('admin'),
            'role_id' => 2,
            'activated' => 1,
            'api_token' => str_random(60),
            'activated_at' => \Carbon\Carbon::now(),
            'first_name' => 'Andi',
            'last_name' => 'Lau',
            'activation_code' => str_random(60),
            'photo' => '/photos/1/andi.jpg'
        ]); 

        \DB::table('users')->insert([
            'username' => 'ade',
            'email' => 'basrul_yandri@yahoo.com',
            'password' => bcrypt('admin'),
            'role_id' => 2,
            'activated' => 1,
            'api_token' => str_random(60),
            'activated_at' => \Carbon\Carbon::now(),
            'first_name' => 'Ade',
            'last_name' => 'Suprayogi',
            'activation_code' => str_random(60),
            'photo' => '/photos/1/ade.jpg'
        ]); 

    }
}
