<?php

namespace Database\Factories;

use App\Models\Admin\Community;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommunityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Community::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = ["motor", "mobil", "mobility"];

        return [
            "club_name" => "club-".$this->faker->name(),
            "leader" => $this->faker->name(),
            "image" => "/uploads/communities/community-d001dd23-cb16-4ab7-9d13-3bb4cca75f31.jpg",
            "establishment_date" => now(),
            "social_media" => '{"email":"iyan@gmail.com","youtube":"youtube.com","twitter":"twitter.com","instagram":"instagram.com","facebook":"facebook.com"}',
            "category" => $category[array_rand($category, 1)]
        ];
    }
}
