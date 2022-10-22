<?php

use Illuminate\Database\Seeder;
use App\Role; 

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::truncate();

        Role::create(['name'=>'Admin']);
        Role::create(['name'=>'School']);
		Role::create(['name'=>'Department']);
		Role::create(['name'=>'Finance']);
		Role::create(['name'=>'Student']);
        //
    }
}