<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectManager>
 */
class ProjectManagerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create();
        return [
            'name' => $faker->name,
            'surname' => $faker->name,
            'username' => str_replace(' ', '', strtolower($faker->name)),
            'password' =>"password"

        ];
    }
}
