<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id' => App\User::inRandomOrder()->first()->id,
        'post_id' => App\Post::inRandomOrder()->first()->id,
        'body'=> $faker->text($maxNBChars=50),
        'created_at' => Carbon\Carbon::now()->subDays(rand(0, 365)),
    ];
});
