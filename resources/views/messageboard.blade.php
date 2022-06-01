<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* .block {
            width: 500px;
            padding: 1.5rem;
            box-shadow: 2px 2px 15px #aaa;
            margin: 1.5rem auto;
        } */
    </style>
</head>
<body>
    <button><a href="/add">add</a></button>
    @foreach ($lists as $list) 
    <div class="block">
        <h1>{{$list->name}}</h1>
        <h2>{{$list->message}}</h2>
        <p>{{$list->time}}</p>
        <form action="/editmessage/{{$list->id}}" method="POST">
            {{-- @method('PATCH') --}}
            @csrf
            <button>edit</button>
        </form>
        <form action="/{{$list->id}}" method="POST">
            @method('DELETE')
            @csrf
            <button>delete</button>
        </form>
    </div>
    @endforeach
    

</body>
</html>