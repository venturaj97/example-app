<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
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

        User::factory(8)->create([
            // 'name' => 'Test User',
            // 'email' => 'test@example.com',
            'data_aniversario' => Carbon::now()->subYears(10)->format('Y-m-d')
        ]);
    }
}
