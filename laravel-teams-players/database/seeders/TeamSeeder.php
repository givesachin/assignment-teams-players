<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            ['name' => 'Mumbai Indians', 'state' => 'Maharashtra', 'country' => 'India', 'font_color' => '#000000', 'bg_color' => '#FFFFFF'],
            ['name' => 'Chennai Super Kings', 'state' => 'Tamil Nadu', 'country' => 'India', 'font_color' => '#000000', 'bg_color' => '#FFFFFF'],
            ['name' => 'Kolkata Knight Riders', 'state' => 'West Bengal', 'country' => 'India', 'font_color' => '#000000', 'bg_color' => '#FFFFFF'],
            ['name' => 'Royal Challengers Bangalore', 'state' => 'Karnataka', 'country' => 'India', 'font_color' => '#000000', 'bg_color' => '#FFFFFF'],
            ['name' => 'Delhi Capitals', 'state' => 'Delhi', 'country' => 'India', 'font_color' => '#000000', 'bg_color' => '#FFFFFF'],
        ]);
    }
}
