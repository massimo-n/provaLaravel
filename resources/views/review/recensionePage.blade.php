


<form action="/aggiungiRecensione" method="post" enctype="multipart/form-data">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <input type="hidden"   name="eventId" value="{{$id}}">
    <textarea rows="15" cols="15" name="review">
        inserisci qui la tua recensione
    </textarea>

    <input type = 'submit' value = "Add recensione"/>
</form>
