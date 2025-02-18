<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('janjan'),
        'about'=> $faker->text($maxNBChars=40),
        'image'=> $faker->image('public/images',100,100, null, false),
        'dob'=> $faker->date,
        'remember_token' => str_random(10),
        'created_at' => Carbon\Carbon::now()->subDays(rand(0, 365)),
    ];
});
