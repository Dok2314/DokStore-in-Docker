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
        return $this->service->store(new DTO(...$request->except('_token')));
    }

    public function edit(Role $role)
    {
        return view('admin.roles.form', [
            'model' => $role
        ]);
    }

    public function update(Role $role, UpdateRequest $request)
    {
        return $this->service->update($role, new DTO(...$request->except('_token', '_method')));
    }

    public function destroy(Role $role)
    {
        return $this->service->destroy($role);
    }
}
