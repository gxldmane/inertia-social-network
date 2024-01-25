<?php

namespace Database\Factories;

use App\Models\SubscriberFollowing;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriberFollowingFactory extends Factory
{
    protected $model = SubscriberFollowing::class;

    public function definition()
    {
        return [
            'subscriber_id' => User::query()->inRandomOrder()->first()->id,
            'following_id' => User::query()->inRandomOrder()->first()->id
        ];
    }
}
