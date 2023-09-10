@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">{{ $model->id ? "Редактирование машины" : "Создание машины" }}</h1>
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
            <form method="post" action="{{ route('cars.update', $model->id) }}">
            @csrf
            @method('PUT')
        @else
            <form method="post" action="{{ route('cars.store') }}">
                @csrf
        @endif
            <div class="card-body">
                <label for="mark">Марка</label>
                <select class="form-control" id="mark" name="mark">
                    <option value="">------Выберите марку------</option>
                    @foreach(\App\Models\Mark::getFromCache() as $mark)
                        <option
                            value="{{ $mark->id }}"
                            @if($model->id)
                                {{ $model->model->mark->id == $mark->id ? 'selected' : '' }}
                            @endif
                        >
                            {{ $mark->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="card-body">
                <label for="model">Модель</label>
                <select id="model" class="form-control" name="model">
                    @if($model->model)
                        <option value="{{ $model->model->id }}" {{ $model->model->mark->id == $mark->id ? 'selected' : '' }}>
                            {{ $model->model->name }}
                        </option>
                    @else
                        <option>------Выберите марку------</option>
                    @endif
                </select>
            </div>

            <div class="card-body">
                <label for="condition">Состояние</label>
                <select class="form-control" id="condition" name="condition">
                    @foreach(\App\Models\Car::conditions() as $condName => $condTranslated)
                        <option value="{{ $condName }}" {{ $model->condition == $condName ? 'selected' : '' }}>
                            {{ $condTranslated }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="card-body">
                <label for="type">Тип</label>
                <select class="form-control" id="type" name="type">
                    @foreach(\App\Models\Car::types() as $typeName => $typeTranslated)
                        <option value="{{ $typeName }}" {{ $model->type == $typeName ? 'selected' : '' }}>
                            {{ $typeTranslated }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="card-body">
                <label for="color">Цвет</label>
                <select class="form-control" id="color" name="color">
                    @foreach(\App\Models\Car::colors() as $colorName => $colorTranslated)
                        <option value="{{ $colorName }}" {{ $model->color == $colorName ? 'selected' : '' }}>
                            {{ $colorTranslated }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="card-body">
                <label for="year">Год</label>
                <input type="number" name="year" min="1995" max="2023" step="1" value="{{ $model->year ?: 0 }}" id="year" class="form-control">
            </div>

            <div class="card-body">
                <label for="price">Цена ($)</label>
                <input type="number" name="price" id="price" value="{{ $model->price ?: 0 }}" class="form-control">
            </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
        </form>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#mark').on('change', function() {
            let markId = $(this).val();

            $.ajax({
                url: '/admin/models/' + markId,
                method: 'GET',
                success: function(data) {
                    let models = data;
                    let modelSelect = $('#model');

                    modelSelect.empty();
                    $.each(models, function(index, model) {
                        modelSelect.append('<option class="form-control" value="' + model.id + '">' + model.name + '</option>');
                    });
                }
            });
        });
    });
</script>
