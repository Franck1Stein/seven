<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index() {

      $todos = Todo::all();

      return view('todos.index', compact('todos'));

    }

    public function store(TodoCreateRequest $request) {

      Todo::create( $request->all() );
      return redirect()->back()->with('message', 'Todo created Successfully!');

    }

    public function create() {

      return view('todos.create');

    }

    // dynamic route binding will take over
    // public function edit($id) { ... }

    public function edit(Todo $todo) {

      // $todo = Todo::find($id);

      return view('todos.edit', compact('todo'));

    }

    // the param $todo is got from the route model biding
    public function update(Request $r, Todo $todo) {

      $todo->update( ['title' => $r->title] );
      return redirect(route('todo.index'))->with('message', 'Updated!!');

    }


}
