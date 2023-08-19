<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->paginate(4);
        return view('todos.index', compact('todos'));
    }

    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    public function  create()
    {
        return view('todos.create');
    }

    public function store(Request $req)
    {
        $req->validate(
            [
                'title' => 'required',
                'description' => 'required'
            ]
        );
        Todo::create(
            [
                'title' => $req->title,
                'description' => $req->description
            ]
        );
        
        return redirect()->route('todo.index');
    }
}
