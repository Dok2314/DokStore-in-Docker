<?php

namespace App\Enums;

use App\Enums\Interfaces\CarEnumInterface;

enum TypeEnum: string implements CarEnumInterface
{
    case passenger = 'passenger';

    case moto = 'moto';

    case freight = 'freight';

    case bus = 'bus';

    case air = 'air';

    case water = 'water';

    public static function getType(TypeEnum $enum): array
    {
        return [
            $enum->name => trans('main.models.car.types.' . $enum->value)
        ];
    }

    public static function getTypes(): array
    {
        return array_merge(...array_map([self::class, 'getType'], self::cases()));
    }

}
