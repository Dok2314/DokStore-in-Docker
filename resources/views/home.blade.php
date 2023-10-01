@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Вы вошли в систему!</h1>
    </div>

    <div class="container-fluid">
        <button class="btn btn-primary" onclick="send();">Отправить</button>
    </div>
@endsection
<script>
    let conn = new WebSocket('ws://localhost:8083');
    conn.onopen = function (e) {
        console.log('Connection established!');
    };

    conn.onmessage = function (e) {
        console.log('Полученные данные: ' + e.data);
    };

    function send()
    {
        let data = 'Данные для отправки: ' + Math.random();
        conn.send(data);
        console.log('Отправлено: ' + data);
    }
</script>
