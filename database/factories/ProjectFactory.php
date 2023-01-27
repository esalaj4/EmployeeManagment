<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $projectManagerId=\App\Models\ProjectManager::all()->pluck('id')->toArray();
        $projectManagerId[]=null;
        $faker = Faker::create();
        return [
            'projectName' => "project" . $faker->numberBetween(1,10),
            'description' => $faker->text(),
            'pm_id'=>$projectManagerId[array_rand($projectManagerId)] 
        ];
    }
}
