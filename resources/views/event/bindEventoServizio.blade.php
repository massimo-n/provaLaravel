<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prova.css') }}">
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

</head>
<body>

<div class="flex-center position-ref full-height">

    <table>
        <tr>
            @foreach($events as $event)
                <th>{{$event->titolo}}</th>
            @endforeach
        </tr>

        <form method="POST" action="" >
            @csrf
            {{--<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">--}}

        @foreach($services as $service)

            <tr>
                <td>{{$service->servizio_evento}}</td>

                <td>
                    <input type="checkbox" value='{{$service->id}}' name='servizio'/>
                </td>
            </tr>
        @endforeach
    </table>

    <input type="button" id="btn" class="giovanni" value="submit"/>
    </form>

</div>
</div>
</body>
</html>