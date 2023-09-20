<?php

namespace App\Models;

use App\Enums\ConditionEnum;
use App\Enums\TypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Car extends Model
{
    use HasFactory;

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

    protected $casts = [
        'condition' => ConditionEnum::class,
        'type' => TypeEnum::class,
    ];

    public function model(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CarModel::class);
    }

    public static function types(): array
    {
        return TypeEnum::getTypes();
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
        return ConditionEnum::getConditions();
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
