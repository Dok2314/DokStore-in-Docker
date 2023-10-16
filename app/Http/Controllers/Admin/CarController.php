<?php

namespace App\Http\Controllers\Admin;

use App\DTO\Admin\Cars\DTO;
use App\Http\Requests\Admin\Car\StoreRequest;
use App\Http\Requests\Admin\Car\UpdateRequest;
use App\Models\Car;
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

    public function store(StoreRequest $request)
    {
        $car = $this->service->store(new DTO(...$request->except('_token')));
        return redirect()->route('cars.edit', $car->id)->with('success', 'Машина успешно сохранена');
    }

    public function update(Car $car, UpdateRequest $request): \Illuminate\Http\RedirectResponse
    {
        $model = $this->service->update($car, new DTO(...$request->except('_token', '_method')));
        return redirect()->route('cars.edit', $model->id)->with('success', 'Машина успешно сохранена');
    }

    public function destroy(Car $car)
    {
        $this->service->destroy($car);
        return redirect()->route('cars.index')->with('success', 'Машина успешно удалена');
    }

    public function getCarModelsByMark($markId)
    {
        $this->authorize('delete-record');
        return $this->service->getByMark($markId);
    }
}
