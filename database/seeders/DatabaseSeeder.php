<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ejecutar los seeders de User y Activity
        $this->call([
            UserSeeder::class,
            ActivitySeeder::class,
        ]);
    }
}
