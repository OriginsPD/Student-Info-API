<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\vehicle;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'weekly_fee' => $this->faker->numberBetween(-10000, 10000),
            'daily_fee' => $this->faker->numberBetween(-10000, 10000),
            'transmission' => $this->faker->text,
            'capacity' => $this->faker->numberBetween(-10000, 10000),
            'baggage_space' => $this->faker->numberBetween(-10000, 10000),
            'feature' => $this->faker->text,
            'status' => $this->faker->word,
        ];
    }
}
