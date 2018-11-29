<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>
<body>

<div class="flex-center position-ref full-height">

    {{--<form action = "" method = "post" enctype="multipart/form-data">--}}
    {{--<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">--}}
    <table>
        <tr>
            <th>descrizione</th>

        </tr>

        @foreach($categories as $category)

            <tr>
                <td>{{$category->descrizioneCategoriaEvento}}</td>
                <td>
                    <div class="prova">
                        <a href="{{URL('/modCategoria/'.$category->id)}}">modifica</a>
                        <a href="{{URL('/deleteEvento/'.$category->id)}}">elimina</a>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
    {{--</form>--}}



</div>
</div>
</body>
</html>