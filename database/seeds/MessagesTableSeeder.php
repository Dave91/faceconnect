<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all users
        $users = User::get();

        // Create 5 messages from this user other random users (cannot send messages to themselves)
        foreach($users as $user) {
            factory(App\Message::class, 5)->create([
                'user_id' => $user->id,
            ])->each(function($msg) use($user) {
                // Set the recipient to a random user who isn't the current users
                $msg->to_user_id = User::where('id', '!=', $user->id)->inRandomOrder()->first()->id;
                $msg->save();
            });
        }
    }
}
