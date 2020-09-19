<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo | Edit</title>
</head>
<body>
<h1>Edit Task</h1>
<form action="{{ route('todo.update', $item->id) }}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label for="">Title</label>
        <input type="text" name="title" value="{{ $item->title }}">
    </div>
    <br>
    <div>
        <label for="">Body</label>
        <textarea name="body" id="" cols="30" rows="10">{{ $item->body }}</textarea>

    </div>
    <div>
        <button type="submit">Save</button>
    </div>
</form>
</body>
</html>
