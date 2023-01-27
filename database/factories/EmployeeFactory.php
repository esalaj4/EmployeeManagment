<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $teamId=\App\Models\Team::all()->pluck('id')->toArray();
        $teamId[]=null;
        $faker = Faker::create();
        return [
            'name' => $faker->name,
            'surname' => $faker->name,
            'free_days' => 25,
            'username' => str_replace(' ', '', strtolower($faker->name)),
            'password' =>"password",
            'team_id'=>$teamId[array_rand($teamId)] 

        ];
    }
}
