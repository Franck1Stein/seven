{{-- Create new Todo --}}
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <meta name="vewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Todos</title>

  </head>

  <body>
      <div class="text-center pt-10">

        <h1 class="text-2xl">What next you need To-Do</h1>

        <x-alert />

        <form action="/todos/create" method="post" class="py-5">
          @csrf
          <input type="text" name="title" class="px-2 py-2 border rounded"/>

          <input type="submit" value="Create" class="p-2 border rounded"/>

        </form>

      </div>

  </body>

</html>
