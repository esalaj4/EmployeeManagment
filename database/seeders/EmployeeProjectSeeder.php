<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ID = \App\Models\Project::all()->pluck('id')->toArray();
        foreach (\App\Models\Employee::all()->pluck('id') as $id) {
            DB::table('employee_projects')->insert(
                [
                    'employee_id' => $ID[array_rand($ID)],
                    'project_id' => $id,
                ]
            );
        }
    }
}
