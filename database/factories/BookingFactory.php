<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomElement(User::all()),
            'inquiry_header' => $this->faker->realTextBetween(50, 100),
            'inquiry_text' => $this->faker->realTextBetween(150,250),
            'start_date' => $this->faker->dateTimeBetween('-1 month'),
            'end_date' => $this->faker->dateTimeBetween('-1 day'),
            'accepted' => $this->faker->boolean(),
            'hidden' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
