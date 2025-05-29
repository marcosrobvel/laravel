<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;
use App\Models\User;

class ActivitySeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        if ($users->isEmpty()) {
            $this->command->info('No users found, skipping activities seeding.');
            return;
        }

        foreach ($users as $user) {
            Activity::factory()->count(3)->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
