<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [Role::ADMIN, Role::DEVELOPER];

        foreach ($roles as $role) {
            Role::query()->create([
                'name' => $role,
                'slug' => Str::slug($role)
            ]);
        }
    }
}
