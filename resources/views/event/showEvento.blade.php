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
    @foreach($events as $event)
    <form action = "/modificaEvento" method = "post" enctype="multipart/form-data">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <table>

            <tr>
                <td>titolo</td>
                <td><input type='text' name='title' value="{{$event->titolo}}"/></td>
                <input type="hidden"   name="custId" value="{{$event->id}}">
            </tr>
            <tr>
                <td>immagine</td>
                <td><input type="file" name="photo" accept="image/*" ></td>
            </tr>


            {{--l'immagine va modificata a parte e dobbiamo vedè come fare se non passiamo niente che da errore--}}
            <tr>
                <td>descrizione</td>
                <td><input type='text' name='desc' value="{{$event->descrizione}}" /></td>
            </tr>
            <tr>
                <td>prezzo</td>
                <td><input type='number' name='price' value="{{$event->prezzo}}"/></td>
            </tr>
            <tr>
                <td>indirizzo</td>
                <td><input type='text' name='ind' value="{{$event->indirizzo}}"/></td>
            </tr>
            <tr>
                <td>data</td>
                <td><input type='text' name='data' value="{{$event->dataEvento}}"/></td>
            </tr>
            <tr>
                <td>daacreazione</td>
                <td><input type='text' name='creazione' value="{{$event->dataCreazione}}"/></td>
            </tr>
            @endforeach
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

