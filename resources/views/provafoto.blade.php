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

    @foreach($event as $evento )
    <tr>
        <td>{{$evento->titolo}}</td>
        <img src={{asset('storage/upload/').'/'.$evento->immagine}}>
        {{--va cambiato public co storage sennò porcoddio non funziona--}}
        {{--<img src={{asset('storage/upload/yx2Znoy3iRTVl9Alee4agGDU2Y1I04oma6IbAhm8.jpg')}}>--}}

    </tr>
    @endforeach
</div>
</div>
</body>
</html>
