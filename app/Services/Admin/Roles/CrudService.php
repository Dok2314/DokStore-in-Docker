<?php

namespace App\Services\Admin\Roles;

use App\DTO\Admin\Roles\DTO;
use App\Models\Role;
use App\Services\Interfaces\CrudServiceInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CrudService implements CrudServiceInterface
{
    public function store($dto)
    {
        $role = Role::query()->create($this->getData($dto));
        $role->permissions()->sync($dto->getPermissions());

        return $role;
    }

    public function update(Model $model, $dto): Model
    {
        $model->update($this->getData($dto));
        $model->permissions()->sync($dto->getPermissions());

        return $model;
    }

    public function destroy(Model $model): void
    {
        $model->delete();
    }

    protected function getData(DTO $dto): array
    {
        return [
            'name' => $dto->getName(),
            'slug' => Str::slug($dto->getName()),
        ];
    }
}
