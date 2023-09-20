<?php

namespace App\Enums;

use App\Enums\Interfaces\CarEnumInterface;

enum ConditionEnum: string implements CarEnumInterface
{
    case used = 'used';

    case new = 'new';

    public static function getCondition(ConditionEnum $enum): array
    {
        return [
            $enum->name => trans('main.models.car.conditions.' . $enum->value)
        ];
    }

    public static function getConditions(): array
    {
        return array_merge(...array_map([self::class, 'getCondition'], self::cases()));
    }
}
