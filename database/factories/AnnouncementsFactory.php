<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcements>
 */
class AnnouncementsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),	
            'descreption'=>fake()->text(),
            'skills'=>fake()->text(),
            'companie_id'=>fake()->numberBetween(1,10),
            
        ];
    }
}
