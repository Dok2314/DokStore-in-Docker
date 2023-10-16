<?php

namespace App\Http\Controllers\Admin;

use App\DTO\Admin\Roles\DTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Roles\UpdateRequest;
use App\Http\Requests\Admin\Role\StoreRequest;
use App\Models\Role;
use App\Services\Admin\Roles\CrudService;

class RoleController extends Controller
{
    protected CrudService $service;

    public function __construct(CrudService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $roles = Role::getFromCache();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.form', [
            'model' => new Role
        ]);
    }

    public function store(StoreRequest $request)
    {
        $role = $this->service->store(new DTO(...$request->except('_token')));
        return redirect()->route('roles.edit', $role->id)->with('success', 'Роль успешно сохранена');
    }

    public function edit(Role $role)
    {
        return view('admin.roles.form', [
            'model' => $role
        ]);
    }

    public function update(Role $role, UpdateRequest $request)
    {
        $model = $this->service->update($role, new DTO(...$request->except('_token', '_method')));
        return redirect()->route('roles.edit', $model->id)->with('success', 'Роль успешно сохранена');
    }

    public function destroy(Role $role)
    {
        $this->authorize('delete-record');
        $this->service->destroy($role);
        return redirect()->route('roles.index')->with('success', 'Роль успешно удалена');
    }
}
