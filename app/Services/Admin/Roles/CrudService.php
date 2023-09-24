<?php

namespace App\Services\Admin\Roles;

use App\DTO\Admin\Roles\DTO;
use App\Models\Role;
use App\Services\Interfaces\CrudServiceInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CrudService implements CrudServiceInterface
{
    public function store($dto): \Illuminate\Http\RedirectResponse
    {
        $role = Role::query()->create($this->getData($dto));
        $role->permissions()->sync($dto->getPermissions());

        return redirect()->route('roles.edit', $role->id)->with('success', 'Роль успешно сохранена');
    }

    public function update(Model $model, $dto): \Illuminate\Http\RedirectResponse
    {
        $model->update($this->getData($dto));
        $model->permissions()->sync($dto->getPermissions());

        return redirect()->route('roles.edit', $model->id)->with('success', 'Роль успешно сохранена');
    }

    public function destroy(Model $model): \Illuminate\Http\RedirectResponse
    {
        $model->delete();
        return redirect()->route('roles.index')->with('success', 'Роль успешно удалена');
    }

    protected function getData(DTO $dto): array
    {
        return [
            'name' => $dto->getName(),
            'slug' => Str::slug($dto->getName()),
        ];
    }
}
