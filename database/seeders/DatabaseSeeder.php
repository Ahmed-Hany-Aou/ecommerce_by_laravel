<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

<<<<<<< Updated upstream
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
=======
     //   User::factory()->create([
       //     'name' => 'Test User',
         //   'email' => 'test@example.com',
    //   ]);

                \App\Models\Admin::factory(2)->create();
                \App\Models\User::factory(2)->create();


>>>>>>> Stashed changes
    }
}
