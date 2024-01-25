<?php

namespace Database\Factories;

use App\Models\LikedPost;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikedPostFactory extends Factory
{
    protected $model = LikedPost::class;

    public function definition()
    {
        return [
            'user_id' => User::query()->inRandomOrder()->first()->id,
            'post_id' => Post::query()->inRandomOrder()->first()->id,
        ];
    }
}
