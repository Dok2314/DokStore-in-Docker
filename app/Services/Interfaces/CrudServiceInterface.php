<?php

namespace App\Services\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface CrudServiceInterface
{
    public function store($dto);

    public function update(Model $model, $dto);

    public function destroy(Model $model);
}
