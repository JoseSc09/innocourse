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
        // User::factory(10)->create();

        $this->call([
            RolSeeder::class,
            CategorySeeder::class,
            UserSeeder::class,
            CourseSeeder::class,
            FaqSeeder::class,
            ReviewSeeder::class,
            SubscriptionSeeder::class,
            AboutSeeder::class,
        ]);
    }
}
