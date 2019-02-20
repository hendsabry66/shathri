<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'name' => 'admin',
        ]);
        DB::table('statuses')->insert([
            'name' => 'الجد الاكبر ',
        ]);
        DB::table('statuses')->insert([
            'name' => 'الابن',
        ]);
        DB::table('statuses')->insert([
            'name' => 'الابنة ',
        ]);
    }
}
