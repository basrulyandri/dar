<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
        	['label' => 'Index Dashboard','name_permission' => 'dashboard.index'], 
        	['label' => 'My DIvisions','name_permission' => 'my.divisions'],
        	['label' => 'My Division Detail','name_permission' => 'my.division.detail'],
        ]);

        DB::table('permission_role')->insert([
        	['role_id' => 2,'permission_id' => 1],    
        	['role_id' => 2,'permission_id' => 2],    
        	['role_id' => 2,'permission_id' => 3],         	
        ]);
    }
}
