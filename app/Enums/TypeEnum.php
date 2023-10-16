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

    public function translate(): string
    {
        return trans('main.models.car.types.' . $this->value);
    }

    public static function getTypes(): array
    {
        return collect(self::cases())->mapWithKeys(fn(self $v) => [
            $v->name => $v->translate()
        ])->all();
    }
}
