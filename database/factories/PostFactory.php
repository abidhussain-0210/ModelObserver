<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Influencer;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->name;
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->text($maxNbChars = 500),
            'counter' => 0,
            'influencer_id' => Influencer::inRandomOrder()->first()->id

        ];
    }
}
