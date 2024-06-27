<?php

namespace Database\Factories;

use App\Models\Cour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inscription>
 */
class InscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $coursId = Cour::pluck('id')->toArray();
        $coursId = $coursId[array_rand($coursId)];
        return [
            'eleve_id'=>rand(1,30),
            'cours_id'=>$coursId,
        ];
    }
}
