<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CommentsTableSeeder extends Seeder
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

        // Create 10 comments on a random post from each user
        foreach($users as $user) {
            factory(App\Comment::class, 10)->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
