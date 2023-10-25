<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    
     
    public function run(): void
    {
        DB::table('subjects')->insert([
            [
                'course_code' => 'CSE101',
                'course_description' => 'Introduction to Computer Science',
                'units' => 3,
            ],
            
        ]);
    }
}
