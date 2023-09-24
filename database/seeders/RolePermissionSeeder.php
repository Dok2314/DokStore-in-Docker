<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::admin();
        $developer = Role::developer();

        $permissionsForAdmin = Permission::get();
        $permissionsForDeveloper = Permission::whereIn('slug', [Permission::CREATE, Permission::READ, Permission::UPDATE])->get();

        foreach ($permissionsForAdmin as $permission) {
            $admin->permissions()->attach($permission->id);
        }

        foreach ($permissionsForDeveloper as $permission) {
            $developer->permissions()->attach($permission->id);
        }
    }
}
