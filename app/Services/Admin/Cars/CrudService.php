<?php

namespace App\Services\Admin\Cars;

use App\Jobs\CarCreatedJob;
use App\Models\Car;
use App\Models\CarModel;
use App\Services\Interfaces\CrudServiceInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CrudService implements CrudServiceInterface
{
    public function store($dto)
    {
        $car = Car::query()->create($this->getData($dto));
        dispatch(new CarCreatedJob(Auth::user(), $car));

        return $car;
    }

    public function update(Model $model, $dto)
    {
        $model->update($this->getData($dto));
        $this->addMark($model, $dto);

        return $model;
    }

    public function destroy(Model $model): void
    {
        $model->delete();
    }

    public function getByMark(int $markId)
    {
        $models = CarModel::query()->where('mark_id', $markId)->get();
        return response()->json($models);
    }

    protected function getData($dto): array
    {
        return [
            'model_id' => $dto->getModel(),
            'condition' => $dto->getCondition(),
            'type' => $dto->getType(),
            'color' => $dto->getColor(),
            'year' => $dto->getYear(),
            'price' => $dto->getPrice(),
        ];
    }

    protected function addMark(Model $model, $dto): void
    {
        $model->model->mark_id = $dto->getMark();
        $model->model->save();
    }
}
