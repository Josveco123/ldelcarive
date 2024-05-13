<?php

namespace Database\Seeders;

use App\Models\Distribuidor;
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

        User::factory()->create([
            // ROles y persisos
            //Usuarios

            $this->call(RoleSeeder::class),
            $this->call(UserSeed::class),
            $this->call(BlogSeeder::class),
            $this->call(DistribuidorSeeder::class),
            $this->call(ProductoSeeder::class),
           // 'name' => 'Test User',
           // 'email' => 'test@example.com',
        ]);
    }
}
