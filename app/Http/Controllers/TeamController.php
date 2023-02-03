<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'team_name' => 'required',
            'team_leader_id' => [
                'required',
                function ($attribute, $value, $fail) {
                    $user = User::find($value);
                    if (!$user || $user->role->name !== 'team leader') {
                        $fail("The selected user must have the role of team leader.");
                    }
                },
            ],
        ]);
    
        // Create the team with validated data...
    }
    
}
