<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'manager']);

        User::factory()->create([
            'name' => 'Test User',
            'phone' => '111111111',
        ])->assignRole('admin');
    }
}
