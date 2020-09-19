<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo | All</title>
</head>
<body>
    <h1>All Tasks</h1>
    <a href="{{ route('todo.create') }}">Create</a>
    <ul>
        @foreach($tasks as $task)
        <li>
            <a href="{{ route('todo.show', $task->id) }}">{{ $task->title }}</a>
            <a href="{{ route('todo.edit', $task->id) }}">Edit</a>
            <form action="{{ route('todo.destroy', $task->id) }}" method="post" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>
</html>
