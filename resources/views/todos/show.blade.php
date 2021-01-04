<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>Todo Item</title>

    </head>
    <body>
   <div class="container">
    <h1 class="text-center my-5">
        
        {{ $todo->name }}
    </h1>
  <div class="row justify-content-center">
  <div class="col-md-5">
  <div class="card card-default">
    <div class="card-header">
    Details
    </div>
    <div class="card-body">

    {{$todo->description}}
    </div>
    </div>
    </div>

</body>
</html>
