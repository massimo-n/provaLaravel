<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prova.css') }}">

</head>
<body>

<div class="flex-center position-ref full-height">


        <table>
            <tr>
                <th>nome servizio</th>
            </tr>

            @foreach($services as $service)

                <tr>
                    <td>{{$service->servizio_evento}}</td>

                    <td>
                        <div class="prova">
                            <a href="{{URL('/modServizi/'.$service->id)}}">modifica</a>
                            <a href="{{URL('/deleteServizi/'.$service->id)}}">elimina</a>
                        </div>
                    </td>
                </tr>
        @endforeach


</div>
</div>
</body>
</html>