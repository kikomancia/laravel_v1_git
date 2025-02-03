<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //\App\Models\User::factory(50)->create();
        \App\Models\Students::factory(100)->create();

        //\App\Models\studentsModel::factory(20)->create();

        // \App\Models\studentsModel::factory()->create([
        //     'fullname' => 'Test User',
        //     'email' => 'test@example.com',

        // ]);
    }
}
