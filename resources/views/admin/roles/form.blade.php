@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">{{ $model->id ? "Редактирование роли" : "Создание роли" }}</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Успех!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Внимание!</strong> Произошла ошибка при сохранении данных.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="container-fluid">
        @if($model->id)
            <form method="post" action="{{ route('roles.update', $model->id) }}">
            @csrf
            @method('PUT')
        @else
            <form method="post" action="{{ route('roles.store') }}">
                @csrf
        @endif
                <div class="card-body">
                    <label for="name">Название</label>
                    <input type="text" name="name" id="name" value="{{ $model->name ?: '' }}" class="form-control">
                </div>

                <div class="card-body">
                    <label for="permissions">Права</label>
                    <select class="form-control" id="permissions" name="permissions[]" multiple>
                        @foreach(\App\Models\Permission::all() as $permission)
                            <option value="{{ $permission->id }}" {{ $model->permissions->contains('id', $permission->id) ? 'selected' : '' }}>
                                {{ $permission->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
        </form>
    </div>
@endsection
