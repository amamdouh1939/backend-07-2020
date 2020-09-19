<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo | Show</title>
</head>
<body>
<a href="{{ route('todo.index') }}">All Todo</a>
    <h1>{{ $task->title }}</h1>
    <p>
        {{ $task->body }}
    </p>
</body>
</html>
