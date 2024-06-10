<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\RolesTableSeeder;
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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Appeler le seeder des rôles
        $this->call(RolesTableSeeder::class);

        // Créer des utilisateurs
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

         // Trouver le rôle 'admin'
         $adminRole = Role::where('name', 'admin')->first();

         // Assigner le rôle 'admin' à l'utilisateur
         $user->roles()->attach($adminRole->id);
    }
}
