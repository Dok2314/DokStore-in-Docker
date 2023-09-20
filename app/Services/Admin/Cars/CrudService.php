<?php

namespace App\Services\Admin\Cars;

use App\Jobs\CarCreatedJob;
use App\Mail\CarMail;
use App\Models\Car;
use App\Models\CarModel;
use App\Services\Interfaces\CrudServiceInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CrudService implements CrudServiceInterface
{
    public function store($dto): \Illuminate\Http\RedirectResponse
    {
        $car = Car::query()->create([
            'model_id' => $dto->getModel(),
            'condition' => $dto->getCondition(),
            'type' => $dto->getType(),
            'color' => $dto->getColor(),
            'year' => $dto->getYear(),
            'price' => $dto->getPrice(),
        ]);

        dispatch(new CarCreatedJob(Auth::user(), $car));

        return redirect()->route('cars.edit', $car->id)->with('success', 'Машина успешно сохранена');
    }

    public function update(Model $model, $dto): \Illuminate\Http\RedirectResponse
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

        return redirect()->route('cars.edit', $model->id)->with('success', 'Машина успешно сохранена');
    }

    public function destroy(Model $model): \Illuminate\Http\RedirectResponse
    {
        $model->delete();
        return redirect()->route('cars.index')->with('success', 'Машина успешно удалена');
    }

    public function getByMark(int $markId): \Illuminate\Http\JsonResponse
    {
        $models = CarModel::query()->where('mark_id', $markId)->get();
        return response()->json($models);
    }
}
