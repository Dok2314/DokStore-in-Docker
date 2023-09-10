<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Car\StoreRequest;
use App\Http\Requests\Admin\Car\UpdateRequest;
use App\Http\Requests\Admin\Cars\CarRequest;
use App\Http\Requests\AdminCarRequest;
use App\Models\Car;
use App\Models\CarModel;
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

    public function store(StoreRequest $request)
    {
        dd($request->all());
    }

    public function update(UpdateRequest $request)
    {
        dd($request->all());
    }

    public function getCarModelsByMark($markId): \Illuminate\Http\JsonResponse
    {
        $models = CarModel::query()->where('mark_id', $markId)->get();
        return response()->json($models);
    }
}
