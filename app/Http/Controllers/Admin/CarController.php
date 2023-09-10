<?php

namespace App\Http\Controllers\Admin;

use App\DTO\Admin\Cars\DTO;
use App\Http\Requests\Admin\Car\StoreRequest;
use App\Http\Requests\Admin\Car\UpdateRequest;
use App\Models\Car;
use App\Models\CarModel;
use App\Services\Admin\Cars\CrudService;

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
        return view('admin.cars.form', [
            'model' => new Car
        ]);
    }

    public function edit(Car $car)
    {
        return view('admin.cars.form', [
            'model' => $car
        ]);
    }

    public function store(StoreRequest $request): \Illuminate\Http\RedirectResponse
    {
        return $this->service->store(new DTO(...$request->except('_token')));
    }

    public function update(Car $car, UpdateRequest $request): \Illuminate\Http\RedirectResponse
    {
        return $this->service->update($car, new DTO(...$request->except('_token', '_method')));
    }

    public function destroy(Car $car): \Illuminate\Http\RedirectResponse
    {
        return $this->service->destroy($car);
    }

    public function getCarModelsByMark($markId): \Illuminate\Http\JsonResponse
    {
        return $this->service->getByMark($markId);
    }
}
