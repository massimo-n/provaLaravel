<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta  charset="UTF-8">

    <title>upload</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <form action="{{route('upload.file')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="file" name="fileUp">
            <input type="submit" class="btn btn-info">
        </form>
    </div>
</div>
<div class="row">
    <h2>show file</h2>
    <img src="{{asset('storage/upload/4d23d5b7b42f5c7d3e2c5f4bc56251e6.jpg')}}">
</div>
</body>
</html>
