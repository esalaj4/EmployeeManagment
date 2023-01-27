<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $teamLeaderId=\App\Models\TeamLeader::all()->pluck('id')->toArray();
        $teamLeaderId[]=null;
        $faker = Faker::create();
        return [
            'teamName' => "team" . $faker->numberBetween(1,10),
            'team_leader_id'=>$teamLeaderId[array_rand($teamLeaderId)] 
        ];
    }
}
