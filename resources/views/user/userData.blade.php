

<form action = "/modificaUtente" method = "post" enctype="multipart/form-data">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>

        <tr>
            <td>nome</td>
            <td><input type='text' name='nome' value="{{$users->nome}}"/></td>
        </tr>
        <tr>
            <td>cognome</td>
            <td><input type='text' name='cognome' value="{{$users->cognome}}" /></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type='text' name='email' value="{{$users->email}}"/></td>
        </tr>
        <tr>
            <td>paese</td>
            <td><input type='text' name='paese' value="{{$users->paese}}"/></td>
        </tr>

        <tr>
            <td>provincia</td>
            <td><input type='text' name='provincia' value="{{$users->provincia}}"/></td>
        </tr>
        <tr>
            <td>Citta</td>
            <td><input type='text' name='citta' value="{{$users->citta}}"/></td>
        </tr>

        <tr>
            <td>indirizzo</td>
            <td><input type='text' name='ind' value="{{$users->indirizzo}}"/></td>
        </tr>
        <tr>
            <td>indirizzo secondario</td>
            <td><input type='text' name='ind1' value="{{$users->indirizzo1}}"/></td>
        </tr>
        <tr>
            <td>cap</td>
            <td><input type='text' name='cap' value="{{$users->cap}}"/></td>
        </tr>



        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Modifica dati"/>
            </td>
        </tr>
    </table>
</form>


<a href="{{URL('/deleteUser')}}">eliminautente</a>
