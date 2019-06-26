<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
   	 return [
        'user_id' => App\User::inRandomOrder()->first()->id,
        'body'=> $faker->text($maxNBChars=100),
        'created_at' => Carbon\Carbon::now()->subDays(rand(0, 365)),
    ];
});
