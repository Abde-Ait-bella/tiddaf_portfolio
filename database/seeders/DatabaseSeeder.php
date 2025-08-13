<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'username' => 'Abdellbassit_Elmansouri',
            'email' => 'Abdelbassit@gmail.com',
            'password' => bcrypt('TiddafBidibast'), // Ensure to hash the password
            'role' => 'admin', // Assuming you have a role field
        ]);
    }
}
