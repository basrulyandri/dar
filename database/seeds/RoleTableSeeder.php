<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Superadmin','Divisin Manager'];
        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'name' => $role,
            ]);    
        }
    }
}
