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

        User::query()->delete();
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'Admin',
            'password' => bcrypt('123'),
        ]);
        User::factory()->create([
            'name' => 'Pegawai',
            'email' => 'pegawai@gmail.com',
            'role' => 'Pegawai',
            'password' => bcrypt('123'),
        ]);

    }
}
