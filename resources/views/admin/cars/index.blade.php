@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Машины</h1>
    </div>

    <div class="container-fluid">
        <div class="card">
                <div class="card-header">
                        <ul class="pagination pagination-sm float-left">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
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
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
@endsection
