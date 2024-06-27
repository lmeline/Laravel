<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type=rand(1,4);
        return [
            'name' => fake('FR_fr')->Firstname(),
            'prenom'=>fake('FR_fr')->LastName(),
            'type'=>($type==1?'Professeur':'Eleve'),
            'email' => fake('FR_fr')->unique()->safeEmail(),
            'date_naissance'=>fake()->date(),
            'email_verified_at' => now(),
            'telephone'=>fake('FR_fr')->phoneNumber(),
            'ville'=>fake('FR_fr')->city(),
            'adresse'=>fake('FR_fr')->streetAddress(),
            'code_postal'=>fake('FR_fr')->postcode(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
