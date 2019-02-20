<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
         DB::table('users')->insert([
            'name' => 'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456'),
            'phone'=>'111111111',
            'image'=>'null',
            'birth_date'=>'2019-02-06',
            'academic_qualifications'=>'null',
            'definition'=>'null',
            'gender'=>'null',
            'activation'=>'1',
            'parent_id'=>'0',
            'status_id'=>'1'
        ]);
    }
}
