<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create the first usable user account
        App\User::create([
            'name' => 'Your Name',
            'email' => 'your@email.com',
            'dob' => '1991-11-01',
            'password' => bcrypt('password'),
        ]);

        // Create 9 other users
        factory(App\User::class, 9)->create();
    }
}
