<?php

namespace Database\Seeders;
use Faker\Factory;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\ProjectManager::factory()->count(7)->create();
        /*\App\Models\TeamLeader::factory()->count(5)->create();
        \App\Models\Team::factory()->count(5)->create();
        \App\Models\Project::factory()->count(10)->create();
        \App\Models\Employee::factory()->count(20)->create();
        \App\Models\Admin::factory()->count(1)->create(); */
        //\App\Models\User::factory()->count(5)->create();
       // $this->call(EmployeeProjectSeeder::class); 
    }
}
