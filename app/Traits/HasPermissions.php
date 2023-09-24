<?php

namespace App\Traits;

use App\Models\Permission;

trait HasPermissions
{
    public function hasPermissionTo(...$permissions): bool
    {
        return $this->permissions()->whereIn('slug', $permissions)->count() ||
            $this->roles()->whereHas('permissions', function ($query) use ($permissions) {
                $query->whereIn('slug', $permissions);
            })->count();
    }

    public function givePermissionTo(...$permissions): void
    {
        $this->permissions()->attach($this->getPermissionIdsBySlug($permissions));
    }

    public function getPermissionIdsBySlug($permissions): array
    {
        return Permission::query()->whereIn('slug', $permissions)->get()->pluck('id')->toArray();
    }

    public function setPermissions(...$permissions): void
    {
        $this->permissions()->sync($this->getPermissionIdsBySlug($permissions));
    }

    public function detachPermission(...$permissions): void
    {
        $this->permissions()->detach($this->getPermissionIdsBySlug($permissions));
    }
}
