@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Редактирование машины</h1>
    </div>

    <div class="container-fluid">
        @if($model->id)
            <form method="post" action="{{ route('cars.update', $model->id) }}">
            @method('PUT')
        @else
            <form method="post" action="{{ route('cars.store') }}">
        @endif
            @csrf
            <div class="card-body">
                <label for="">Марка</label>
                <select class="form-control">
                    @foreach(\App\Models\Car::conditions() as $condition)
                        <option>{{ $condition }}</option>
                    @endforeach
                </select>
            </div>

            <div class="card-body">
                <label for="">Модель</label>
                <select class="form-control">
                    @foreach(\App\Models\Car::conditions() as $condition)
                        <option>{{ $condition }}</option>
                    @endforeach
                </select>
            </div>

            <div class="card-body">
                <label for="">Состояние</label>
                <select class="form-control">
                    @foreach(\App\Models\Car::conditions() as $condition)
                        <option>{{ $condition }}</option>
                    @endforeach
                </select>
            </div>

            <div class="card-body">
                <label for="">Тип</label>
                <select class="form-control">
                    @foreach(\App\Models\Car::types() as $type)
                        <option>{{ $type }}</option>
                    @endforeach
                </select>
            </div>

            <div class="card-body">
                <label for="">Цвет</label>
                <select class="form-control">
                    @foreach(\App\Models\Car::colors() as $color)
                        <option>{{ $color }}</option>
                    @endforeach
                </select>
            </div>

            <div class="card-body">
                <label for="">Год</label>
                <input type="number" min="1995" max="2023" step="1" value="2023" class="form-control">
            </div>

            <div class="card-body">
                <label for="">Цена ($)</label>
                <input type="number" name="price" class="form-control">
            </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
        </form>
    </div>
@endsection
