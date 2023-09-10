<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Services\CrudService;
use Illuminate\Support\Facades\Cache;

class CarController extends BaseController
{
    protected CrudService $service;

    public function __construct(CrudService $service)
    {
        $this->service = $service;
    }


    public function index()
    {
        $cars = Car::getFromCache();
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {

    }

    public function edit(Car $car)
    {
        return view('admin.cars.form', [
            'model' => $car
        ]);
    }

    public function store()
    {
        
    }

    public function update()
    {
        
    }
}
