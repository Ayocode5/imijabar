<?php

namespace Database\Factories;

use App\Models\Admin\Advertisement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvertisementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advertisement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "image" => "https://i.ytimg.com/vi/oIVNgH-MkEY/mqdefault.jpg",
            "redirect_url" => "https://google.com",
            "order" => rand(0,10),
            "show" => true,
        ];
    }
}
