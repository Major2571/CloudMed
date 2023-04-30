<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VacinasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idPaciente' => $this->faker->unique()->randomNumber(2),
            'nome' => $this->faker->unique()->word,
            'tipoDose' => $this->faker->randomElement(['1ª Dose', '2ª Dose', 'Dose Única']),
            'data' => $this->faker->date('Y-m-d', Carbon::now()->subDays(rand(1, 365))),
            'fabricante' => $this->faker->unique()->company,
            'cidade' => $this->faker->unique()->company,
            'estado' => $this->faker->unique()->stateAbbr,
        ];
    }
}
