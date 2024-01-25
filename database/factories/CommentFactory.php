<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'body' => $this->faker->sentence(),
            'user_id' => User::query()->inRandomOrder()->first()->id,
            'post_id' => Post::query()->inRandomOrder()->first()->id
        ];
    }
}
