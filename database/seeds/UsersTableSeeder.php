<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('role_user')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $adminRole=Role::where('name','Admin')->first();
        $SchoolRole=Role::where('name','School')->first();
        $DepRole=Role::where('name','Department')->first();
		$FinanceRole=Role::where('name','Finance')->first();
		$StudentRole=Role::where('name','Student')->first();


        $admin=User::create([
            'name' =>'Admininstrator',
            'email' =>'schooladmin@admin.com',
            'password' =>Hash::make('adminpassword')
        ]);

        $school=User::create([
           'name' =>'School',
           'email' =>'Schoolhead@gmail.com',
           'password' =>Hash::make('spassword')
        ]);
        $finance=User::create([
            'name' =>'Finance1',
            'email' =>'Financehead@gmail.com',
            'password' =>Hash::make('fpassword')
         ]);
		 $student= User::create([
            'name' =>'Student1',
            'email' =>'Studenthead@gmail.com',
            'password' =>Hash::make('stpassword')
         ]);
		 $department=User::create([
            'name' =>'Department1',
            'email' =>'Dephead@gmail.com',
            'password' =>Hash::make('dpassword')
         ]);

        $admin->roles()->attach($adminRole);
		$school->roles()->attach($SchoolRole);
		$finance->roles()->attach($FinanceRole);
		$department->roles()->attach($DepRole);
		$student->roles()->attach($StudentRole);
       
        //
    }
}