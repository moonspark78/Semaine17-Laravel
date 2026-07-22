<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    public function definition(): array
    {
        return [
            "nom" => fake()->randomElement([
                "Direction",
                "Comptabilite",
                "Informatique",
                "Commercial",
                "Production",
                "Marketing",
                "Juridique",
                "Communication"
            ]),
            "responsable" => fake()->name(),
            "telephone" => fake()->phoneNumber(),
        ];
    }
}