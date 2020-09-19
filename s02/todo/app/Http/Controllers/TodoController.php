<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('todo.index')->with('tasks', Task::all());
    }

    public function show($item)
    {
        return view('todo.show')->with('task', Task::find($item));
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->title = $request->input('title');
        $task->body = $request->input('body');
        $task->save();

        return redirect(route('todo.index'));
    }

    public function edit($item)
    {
        return view('todo.edit')->with('item', Task::find($item));
    }

    public function update(Request $request, $item)
    {
        $task = Task::find($item);
        $task->title = $request->input('title');
        $task->body = $request->input('body');
        $task->save();

        return redirect(route('todo.show', $task->id));
    }

    public function destroy($item)
    {
        $task = Task::find($item);
        $task->delete();
        return redirect(route('todo.index'));
    }
}
