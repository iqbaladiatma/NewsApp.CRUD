<?php
// 
namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    // definition kosong
    public function definition(): array
    {
        return [
            'judul-tulisan' => fake()->sentence(),
            'author' => User::factory(),
            // 1 user nulis 1,sambil bikin 1 user dan posts
            'slug' => Str::slug(fake()->sentence()),
            'body' => fake()->text(),
        ];
    }
}
