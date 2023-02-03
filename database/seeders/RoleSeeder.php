<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Find the id of the employee role
        $employeeRoleId = DB::table('roles')->where('name', 'employee')->value('id');

        // Find the id of the team_leader role
        $teamLeaderRoleId = DB::table('roles')->where('name', 'team_leader')->value('id');

        // Assign the employee role to 30 users
        $employeeUsers = DB::table('users')->limit(30)->get();
        foreach ($employeeUsers as $user) {
            DB::table('users')->where('id', $user->id)->update(['role_id' => $employeeRoleId]);
        }

        // Assign the team_leader role to 5 users
        $teamLeaderUsers = DB::table('users')->limit(5)->get();
        foreach ($teamLeaderUsers as $user) {
            DB::table('users')->where('id', $user->id)->update(['role_id' => $teamLeaderRoleId]);
        }
       
        //barem jedan team_leader za svaki tim
        $teams = Team::all();
        $users = User::all();
        foreach ($teams as $team) {
            // Randomly select a user from the list of all users who have the role_id of teamLeader
            $teamLeader = $users->whereHas('roles', function ($query) {
                $query->where('name', 'teamLeader');
            })->random();
        
            if (!$teamLeader) {
                continue;
            }
        
            // Assign the selected user as team leader for the current team
            $team->team_leader_id = $teamLeader->id;
            $team->save();
        
            // Attach the selected user as a member of the current team
            $team->teamLeader()->attach($teamLeader);
        }
        
    }
}
