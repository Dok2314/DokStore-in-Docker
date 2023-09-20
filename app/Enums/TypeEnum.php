<?php

namespace App\Enums;

enum TypeEnum: string
{
    case passenger = 'passenger';

    case moto = 'moto';

    case freight = 'freight';

    case bus = 'bus';

    case air = 'air';

    case water = 'water';
}
