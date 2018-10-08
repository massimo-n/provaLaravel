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

    <form action = "/aggiungiServizio" method = "post" enctype="multipart/form-data">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <table>
            <tr>
                <td>Servizio</td>
                <td><input type='text' name='servizio' /></td>
            </tr>

            <tr>
                <td colspan = '2'>
                    <input type = 'submit' value = "Add Service"/>
                </td>
            </tr>
        </table>
    </form>



</div>
</div>
</body>
</html>