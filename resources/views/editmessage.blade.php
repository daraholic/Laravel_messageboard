<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($data as $dat)
    <form action="/{{$dat->id}}" method="POST">
        @method('PATCH')
        @csrf
    <input type="text" name="name" value="{{$dat->name}}">
    <input type="text" name="message" value="{{$dat->message}}">
    @endforeach
    <button>OK</button>
</form>
</body>
</html>