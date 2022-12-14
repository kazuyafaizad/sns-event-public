<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->company,
            'content' => $this->faker->paragraph(10),
            'image_reference' => $this->faker->imageUrl(),
            'visibility' => 'public',
            'start_time' => $this->faker->dateTimeBetween('now', '+30 years'),
            'end_time' => $this->faker->dateTimeBetween('now', '+30 years'),
            'venue' => $this->faker->address,
        ];
    }
}
