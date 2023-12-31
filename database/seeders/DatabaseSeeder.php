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
        $this->call([
            UsersSeeder::class,
            MarksSeeder::class,
            CarModelsSeeder::class,
            CarsSeeder::class,
            RolesSeeder::class,
            PermissionsSeeder::class,
            RolePermissionSeeder::class,
            UserRoleSeeder::class,
        ]);
    }
}
