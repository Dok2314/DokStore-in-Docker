<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function carModels(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CarModel::class, 'mark_id');
    }

    public static function getFromCache()
    {
        return Cache::remember('cached-marks', 60, function () {
            return self::query()->orderBy('name')->get();
        });
    }
}
