<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('players')->insert([
            ['name' => 'Virat Kohli', 'email' => 'virat.kohli@example.com', 'dob' => '1988-11-05', 'font_color' => '#000000', 'bg_color' => '#FFFFFF'],
            ['name' => 'Rohit Sharma', 'email' => 'rohit.sharma@example.com', 'dob' => '1987-04-30', 'font_color' => '#000000', 'bg_color' => '#FFFFFF'],
            ['name' => 'KL Rahul', 'email' => 'kl.rahul@example.com', 'dob' => '1992-04-18', 'font_color' => '#000000', 'bg_color' => '#FFFFFF'],
            ['name' => 'Hardik Pandya', 'email' => 'hardik.pandya@example.com', 'dob' => '1993-10-11', 'font_color' => '#000000', 'bg_color' => '#FFFFFF'],
            ['name' => 'Ravindra Jadeja', 'email' => 'ravindra.jadeja@example.com', 'dob' => '1988-12-06', 'font_color' => '#000000', 'bg_color' => '#FFFFFF'],
            ['name' => 'Shubman Gill', 'email' => 'shubman.gill@example.com', 'dob' => '1999-09-08', 'font_color' => '#000000', 'bg_color' => '#FFFFFF'],
            ['name' => 'Jasprit Bumrah', 'email' => 'jasprit.bumrah@example.com', 'dob' => '1993-12-06', 'font_color' => '#000000', 'bg_color' => '#FFFFFF'],
            ['name' => 'Suryakumar Yadav', 'email' => 'suryakumar.yadav@example.com', 'dob' => '1990-09-14', 'font_color' => '#000000', 'bg_color' => '#FFFFFF'],
            ['name' => 'Rishabh Pant', 'email' => 'rishabh.pant@example.com', 'dob' => '1997-10-04', 'font_color' => '#000000', 'bg_color' => '#FFFFFF'],
            ['name' => 'Mohammed Shami', 'email' => 'mohammed.shami@example.com', 'dob' => '1990-09-03', 'font_color' => '#000000', 'bg_color' => '#FFFFFF']
        ]);
    }
}
