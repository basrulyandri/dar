<?php

use Illuminate\Database\Seeder;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
        	['name' => 'Marketing','description' => 'Divisi Marketing','manager_id' => 2,'is_active' => 1], 
        	
        ]);

        DB::table('division_user')->insert([
        	['division_id' => 1,'user_id' => 2],
        ]);
    }
}
