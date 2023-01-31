<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employeeProjects()
    {
        $projects = Project::with('projectManagers')->get();
        return view('employee-projects', compact('projects'));
    }
}
