<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        // make user de forma manual

        App\User::create([
            'name' => 'Italo Marola',
            'email' => 'ima@ima.com',
            'password' =>bcrypt("nova12345")
        ]);

        // make post 

        factory(App\Post::class, 24)->create();
    }
}
