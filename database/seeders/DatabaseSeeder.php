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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Company::factory()->create([
            'name' => 'apple'
        ]);
        \App\Models\Company::factory()->create([
            'name' => 'ibm'
        ]);
        \App\Models\Company::factory()->create([
            'name' => 'google',
        ]);
        \App\Models\Company::factory()->create([
            'name' => 'meta',
        ]);
        \App\Models\Company::factory()->create([
            'name' => 'apple-europe',
        ]);
    }
}
