<?php

namespace App\Models;

use App\Traits\HasPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Role extends Model
{
    use HasFactory, HasPermissions;

    const ADMIN = 'admin';
    const DEVELOPER = 'developer';

    protected $fillable = [
        'name',
        'slug',
    ];

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

    public static function getFromCache()
    {
        return Cache::tags(['roles'])->remember('roles_page_' . request('page', 1), 60, function () {
            return self::with(['permissions'])
                ->orderBy('id', 'desc')
                ->paginate(25);
        });
    }

    protected static function booted()
    {
        static::created(function ($car) {
            Cache::tags(['roles'])->flush();
        });

        static::updated(function ($car) {
            Cache::tags(['roles'])->flush();
        });

        static::deleted(function ($car) {
            Cache::tags(['roles'])->flush();
        });
    }
}
