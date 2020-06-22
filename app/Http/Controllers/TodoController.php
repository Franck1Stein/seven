<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Support\Facades\Validator;


class TodoController extends Controller
{
    public function index() {
      return view('todos.index');
    }

    public function store(TodoCreateRequest $request) {

      // $request->validate([
      //   'title' => 'required|max:255',
      // ]);

      /**$rules = [
        'title' => 'required|max:255',
      ];

      $messages = [
        'title.max' => 'Todo title should not be greater than 255 chars.',
      ];

      $validator = Validator::make($request->all(), $rules, $messages);

      if($validator->fails()) {

        return redirect('post/create')
                                      ->back()
                                      ->withErrors($validator)
                                      ->withInput();
      }*/

      Todo::create( $request->all() );
      return redirect()->back()->with('message', 'Todo created Successfully!');

    }

    public function create() {
      return view('todos.create');
    }

    public function edit() {
      return view('todos.edit');
    }
}
