<?php

namespace App\Http\Controllers\Api;

use App\Models\Car;

class CarController
{
    public function cars()
    {
        return Car::all()->toJson();
    }
}
