<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DifficultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('difficulties')->insert([
            ['name' => 'easy', 'description' => '运气更好，敌人等级较低。'],
            ['name' => 'normal', 'description' => '运气一般，敌人等级一般。'],
            ['name' => 'hard', 'description' => '运气稍差，敌人比较狡诈。'],
            ['name' => 'veryhard', 'description' => '运气非常差，敌人等级较高，也更为狡诈。'],
        ]);
    }
}
