<?php

namespace App\Services\Admin\Cars;

use App\Models\Car;
use App\Services\Interfaces\CrudServiceInterface;
use Illuminate\Database\Eloquent\Model;

class CrudService implements CrudServiceInterface
{
    public function store($dto): Model
    {
        return Car::query()->create([
            'model_id' => $dto->getModel(),
            'condition' => $dto->getCondition(),
            'type' => $dto->getType(),
            'color' => $dto->getColor(),
            'year' => $dto->getYear(),
            'price' => $dto->getPrice(),
        ]);
    }

    public function update(Model $model, $dto)
    {
        $model->update([
            'model_id' => $dto->getModel(),
            'condition' => $dto->getCondition(),
            'type' => $dto->getType(),
            'color' => $dto->getColor(),
            'year' => $dto->getYear(),
            'price' => $dto->getPrice(),
        ]);

        $model->model->mark_id = $dto->getMark();
        $model->model->save();
    }

    public function destroy($id)
    {

    }
}
