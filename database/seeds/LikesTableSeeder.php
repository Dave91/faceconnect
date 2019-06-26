<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all users
        $users = App\User::get();

        // Each user likes 5 posts
        foreach($users as $user) {
            factory(App\Like::class, 5)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
