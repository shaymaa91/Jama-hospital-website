<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        
      //\App\Models\sender_info::factory(22)->create();

        $this->call([


        UsersSeeder::class,

        ]);
    }
}
