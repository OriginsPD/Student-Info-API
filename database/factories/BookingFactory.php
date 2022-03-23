<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Addon;
use App\Models\Member;
use App\Models\booking;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'member_id' => Member::factory(),
            'addon_id' => Addon::factory(),
            'pickup_location' => $this->faker->text,
            'pickup_date' => $this->faker->date(),
            'pickup_time' => $this->faker->word,
            'dropoff_location' => $this->faker->text,
            'dropoff_date' => $this->faker->date(),
            'dropoff_time' => $this->faker->word,
        ];
    }
}
