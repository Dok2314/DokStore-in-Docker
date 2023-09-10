<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Car extends Model
{
    use HasFactory;

    // Conditions
    const USED = 'used';
    const NEW = 'new';

    // Types
    const PASSENGER = 'passenger';
    const MOTO = 'moto';
    const FREIGHT = 'freight';
    const BUS = 'bus';
    const AIR = 'air';
    const WATER = 'water';

    // Colors
    const BLACK = 'black';
    const RED = 'red';
    const GREEN = 'green';
    const WHITE = 'white';
    const BLUE = 'blue';

    protected $fillable = [
        'model_id',
        'condition',
        'type',
        'color',
//        'region_id',
        'year',
        'price',
    ];

    public function model(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CarModel::class);
    }

    public static function types(): array
    {
        return [
            self::PASSENGER => trans('main.models.car.types.passenger'),
            self::MOTO => trans('main.models.car.types.moto'),
            self::FREIGHT => trans('main.models.car.types.freight'),
            self::BUS => trans('main.models.car.types.bus'),
            self::AIR => trans('main.models.car.types.air'),
            self::WATER => trans('main.models.car.types.water'),
        ];
    }

    public static function colors(): array
    {
        return [
            self::BLACK => trans('main.models.car.colors.black'),
            self::RED => trans('main.models.car.colors.red'),
            self::GREEN => trans('main.models.car.colors.green'),
            self::WHITE => trans('main.models.car.colors.white'),
            self::BLUE => trans('main.models.car.colors.blue'),
        ];
    }

    public static function conditions(): array
    {
        return [
            self::USED => trans('main.models.car.conditions.used'),
            self::NEW => trans('main.models.car.conditions.new'),
        ];
    }

    public static function getFromCache()
    {
        return Cache::tags(['cars'])->remember('cars_page_' . request('page', 1), 60, function () {
            return self::with(['model.mark'])
                ->orderBy('id', 'desc')
                ->paginate(25);
        });
    }

    protected static function booted()
    {
        static::created(function ($car) {
            Cache::tags(['cars'])->flush();
        });

        static::updated(function ($car) {
            Cache::tags(['cars'])->flush();
        });

        static::deleted(function ($car) {
            Cache::tags(['cars'])->flush();
        });
    }
}
