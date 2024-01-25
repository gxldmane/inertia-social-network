<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\PostImage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostImageFactory extends Factory
{
    protected $model = PostImage::class;

    public function definition()
    {
        return [
            'path' => $this->faker->imageUrl(640, 480),
            'post_id' => Post::query()->inRandomOrder()->first()->id,
            'user_id' => User::query()->inRandomOrder()->first()->id
        ];
    }
}
