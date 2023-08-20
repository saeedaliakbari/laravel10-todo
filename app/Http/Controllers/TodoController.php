<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        Alert::success('عملیات موفق', 'کار جدید افزوده شد');
        return redirect()->route('todo.index');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Todo $todo, Request $req)
    {
        $req->validate(
            [
                'title' => 'required',
                'description' => 'required'
            ]
        );
        $todo->update(
            [
                'title' => $req->title,
                'description' => $req->description
            ]
        );
        Alert::success('عملیات موفق', 'کار ویرایش شد');
        return redirect()->route('todo.index');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        Alert::success('عملیات موفق', 'کار حذف شد');
        return redirect()->route('todo.index');
    }

    public function completed(Todo $todo)
    {

        $todo->update(
            [
                'completed' => 1,
            ]
        );
        Alert::success('عملیات موفق', 'کار انجام شد');
        return redirect()->route('todo.index');
    }
}
