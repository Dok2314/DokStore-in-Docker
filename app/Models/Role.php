<?php

namespace App\Models;

use App\Traits\HasPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, HasPermissions;

    const ADMIN = 'admin';
    const DEVELOPER = 'developer';

    public function permissions(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }

    public static function admin()
    {
        return self::where('slug', self::ADMIN)->first();
    }

    public static function developer()
    {
        return self::where('slug', self::DEVELOPER)->first();
    }
}
