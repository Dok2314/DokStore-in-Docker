<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [Permission::CREATE, Permission::READ, Permission::UPDATE, Permission::DELETE];

        foreach ($permissions as $permission) {
            Permission::query()->create([
                'name' => $permission,
                'slug' => Str::slug($permission)
            ]);
        }
    }
}
