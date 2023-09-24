@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Роли</h1>
    </div>

    <div class="container-fluid">
        <div class="card">
                <div class="card-header">
                        <ul class="pagination pagination-sm float-left">
                            {{ $roles->links('vendor.pagination.bootstrap-4') }}
                        </ul>

                    <ul class="pagination pagination-sm float-right">
                        <a href="{{ route('roles.create') }}" class="btn btn-success">
                            Создать
                        </a>
                    </ul>
                </div>

                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th>Название</th>
                            <th>Slug</th>
                            <th>
                                Список прав
                            </th>
                            <th style="width: 10px">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>
                                    {{ $role->id }}
                                </td>
                                <td>
                                    {{ $role->name }}
                                </td>
                                <td>
                                    {{ $role->slug }}
                                </td>
                                <td>
                                    @foreach($role->permissions as $permission)
                                        {{ trans('main.models.permission.names.' . $permission->slug)  }}
                                    @endforeach
                                </td>
                                <td>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </div>
                                            @can('delete-record')
                                                <div class="col-md-6">
                                                    <form action="{{ route('roles.destroy', $role->id) }}" method="post" onsubmit="return confirmDelete();">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            @endcan
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
@endsection

<script>
    function confirmDelete() {
        return confirm("Вы действительно хотите удалить запись?");
    }
</script>
