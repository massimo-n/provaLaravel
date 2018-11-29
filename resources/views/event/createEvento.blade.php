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

        <form action = "/aggiungiEvento" method = "post" enctype="multipart/form-data">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            {{--@foreach($services as $service)--}}
                {{--<p>{{$service->servizio_evento}}</p>--}}
            {{--@endforeach--}}
            <table>
                <tr>
                    <td>titolo</td>
                    <td><input type='text' name='title' /></td>
                </tr>
                <tr>
                    <td>immagine</td>
                    {{--<td><input type='text' name='image' /></td>--}}
                    <td><input type="file" name="igiancarlo" accept="image/*"></td>
                </tr>
                <tr>
                    <td>descrizione</td>
                    <td><input type='text' name='desc' /></td>
                </tr>
                <tr>
                    <td>prezzo</td>
                    <td><input type='number' name='price' /></td>
                </tr>
                <tr>
                    <td>indirizzo</td>
                    <td><input type='text' name='ind' /></td>
                </tr>
                <tr>
                    <td>data</td>
                    <td><input type='text' name='data' /></td>
                </tr>
                <tr>
                    <td>daacreazione</td>
                    <td><input type='text' name='creazione' /></td>
                </tr>
                <tr>
                    <td colspan = '2'>
                        <input type = 'submit' value = "Add student"/>
                    </td>
                </tr>
            </table>
        </form>



    </div>
</div>
</body>
</html>