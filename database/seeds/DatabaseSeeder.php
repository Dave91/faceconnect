<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create users
        $this->call(UsersTableSeeder::class);

        // Create posts from each user
        $this->call(PostsTableSeeder::class);

        // Messages
        $this->call(MessagesTableSeeder::class);

        // Comments
        $this->call(CommentsTableSeeder::class);

        // Likes
        $this->call(LikesTableSeeder::class);
    }
}
