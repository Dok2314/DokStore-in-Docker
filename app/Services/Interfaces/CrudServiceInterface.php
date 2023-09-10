<?php

namespace App\Services\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface CrudServiceInterface
{
    public function store($dto): \Illuminate\Http\RedirectResponse;

    public function update(Model $model, $dto): \Illuminate\Http\RedirectResponse;

    public function destroy(Model $model): \Illuminate\Http\RedirectResponse;
}
