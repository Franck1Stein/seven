@extends('todos.layout')


@section('content')

  <h1 class="text-2xl">What To-Do next</h1>

  <x-alert />

  <form action="/todos/create" method="post" class="py-5">
    @csrf
    <input type="text" name="title" class="px-2 py-2 border rounded"/>

    <input type="submit" value="Create" class="p-2 border rounded"/>

  </form>

  <a href="/todos">Back</a>

@endSection
