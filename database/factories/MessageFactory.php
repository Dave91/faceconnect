<?php

use Faker\Generator as Faker;

$factory->define(App\Message::class, function (Faker $faker) {
    return [
        'user_id' => App\Post::inRandomOrder()->first()->id,
        'to_user_id' => App\User::inRandomOrder()->first()->id,
        'body' => $faker->text($maxNBChars=10),
        'created_at' => Carbon\Carbon::now()->subDays(rand(0, 365)),
    ];
});
