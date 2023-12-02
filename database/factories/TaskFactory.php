<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*
        Pour créer une  factory:
        php artisan make:factory TaskFactory --model=Task

        Ensuite dans seeders on ajoute \App\Models\Task::factory(20)->create();

        Puis pour executer les seeds soit on fait: php artisan db:seed

        Ou alors si on veut reprendre de 0 et refresh les migrations/données on fait: php artisan migrate:refresh --seed
        */

        return [
            'title' => fake()->sentence,
            'description' => fake()->paragraph(),
            'long_description' =>  fake()->paragraph(7, true),
            'completed' =>  fake()->boolean
        ];
    }
}
