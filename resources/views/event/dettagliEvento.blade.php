<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('style_old.css') }}">

</head>
<body>

<div class="flex-center position-ref full-height">

    {{--<form action = "" method = "post" enctype="multipart/form-data">--}}
    {{--<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">--}}
    <table>
        <tr>
            <th>titolo</th>
            <th>descrizione</th>
            <th>prezzo</th>
            <th>indirizzo</th>
            <th>dataEvento</th>
            <th>dataCreazione</th>
        </tr>

        @foreach($events as $event)

            <tr>
                <td>{{$event->titolo}}</td>
                <td>{{$event->descrizione}}</td>
                <td>{{$event->prezzo}}</td>
                <td>{{$event->indirizzo}}</td>
                <td>{{$event->dataEvento}}</td>
                <td>{{$event->dataCreazione}}</td>
                {{--<td>--}}
                    {{--<div class="prova">--}}
                        {{--<a href="{{URL('/modEvento/'.$event->id)}}">modifica</a>--}}
                        {{--<a href="{{URL('/deleteEvento/'.$event->id)}}">elimina</a>--}}
                        {{--<a href="{{URL('/recensione/'.$event->id)}}">recensisci</a>--}}
                    {{--</div>--}}
                {{--</td>--}}
            </tr>
        @endforeach

    </table>
    {{--</form>--}}



</div>
</div>
</body>
</html>
