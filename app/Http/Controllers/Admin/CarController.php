<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Services\CrudService;

class CarController extends BaseController
{
    protected CrudService $service;

    public function __construct(CrudService $service)
    {
        $this->service = $service;
    }


    public function index()
    {
        $cars = Car::query()->orderBy('id', 'desc')->paginate(25);
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {

    }
}
