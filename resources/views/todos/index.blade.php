@extends('todos.layout')

@section('content')

  <div class="flex justify-center">

      <h1>All your Todos</h1>

      <a href="/todos/create" >
          Create New
      </a>

  </div>

  <ul style="list-style-type: none;">

    <x-alert />

      @foreach ($todos as $todo)

            <li class="flex justify-center">

                <p> {{ $todo -> title }} </p>

                <a href="{{'/todos/'.$todo->id.'/edit'}}" >Edit</a>

            </li>

      @endforeach

  </ul>

@endSection
