<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>createUtente</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prova.css') }}">

</head>

<body>

    <div class="flex-center position-ref full-height">

        <form action = "/creaUtente" method = "post" enctype="multipart/form-data">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            @foreach($users as $user)
                <p>{{$user->nome}}</p>
            @endforeach
            <table>
                <tr>
                    <td>nome</td>
                    <td><input type='text' name='nome' /></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type='text' name='email' /></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type='text' name='password' /></td>
                </tr>
                <tr>
                    <td colspan = '2'>
                        <input type = 'submit' value = 'crea utente'/>
                    </td>
                </tr>
            </table>
        </form>
    </div>

form
</body>
</html>
