<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @foreach ($data as $dat) --}}
    <form action="/{{$data->id}}" method="POST">
        @method('PUT')
        @csrf
    <input type="text" name="name" value="{{$data->name}}">
    <input type="text" name="message" value="{{$data->message}}">
    {{-- @endforeach --}}
    <button>OK</button>
</form>
</body>
</html>