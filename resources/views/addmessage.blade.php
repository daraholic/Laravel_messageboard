<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>add</h1>
    <form method="POST" action="/post">
        @csrf
        name:<input type="text" name="name">
        message:<textarea name="message" id="" cols="30" rows="10"></textarea>
        <button>OK</button>
    </form>
</body>
</html>