<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
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

        // Create 10 posts for each user
        foreach($users as $user) {
            factory(App\Post::class, 10)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
