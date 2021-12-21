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
      // User::truncate();
      // Post::truncate();
      // Category::truncate();

        App\Models\User::factory(10)->create();
    }
}
