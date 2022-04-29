<?php

namespace Database\Factories;

use App\Models\Admin\CommitteeGreeting;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommitteeGreetingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CommitteeGreeting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "image" => "greeting-1.png",
            "order" => rand(0,10),
            "show" => true,
        ];
    }
}
