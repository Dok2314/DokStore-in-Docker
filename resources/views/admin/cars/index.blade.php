@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Машины</h1>
    </div>

    <div class="container-fluid">
        <div class="card">
                <div class="card-header">
                        <ul class="pagination pagination-sm float-left">
                            {{ $cars->links('vendor.pagination.bootstrap-4') }}
                        </ul>

                    <ul class="pagination pagination-sm float-right">
                        <a href="{{ route('cars.create') }}" class="btn btn-success">
                            Создать
                        </a>
                    </ul>
                </div>

                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th>Task</th>
                            <th>Модель</th>
                            <th>Состояние</th>
                            <th>Тип</th>
                            <th>Цвет</th>
                            <th>Год</th>
                            <th>Цена</th>
                            <th style="width: 10px">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <td>{{ $car->id }}</td>
                                <td>{{ $car->model->mark->name }}</td>
                                <td>
                                    {{ $car->model->name }}
                                </td>
                                <td>
                                    {{ \App\Models\Car::conditions()[$car->condition] }}
                                </td>
                                <td>
                                    {{ \App\Models\Car::types()[$car->type] }}
                                </td>
                                <td>
                                    {{ \App\Models\Car::colors()[$car->color] }}
                                </td>
                                <td>
                                    {{ $car->year }}
                                </td>
                                <td>
                                    {{ $car->price }} $
                                </td>
                                <td>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-6">
                                                <form action="{{ route('cars.destroy', $car) }}" method="post" onsubmit="return confirmDelete();">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </div>
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
