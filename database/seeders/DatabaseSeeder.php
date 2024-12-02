<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Grade;
use App\Models\Department;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Department::factory(5)->create();
        Grade::factory(35)->create();
        student::factory(200)->create();
    }
}
