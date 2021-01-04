<!DOCTYPE html>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<head></head>
<body>
<div class="container">
    <h1 class="text-center my-5">TODOS PAGE</h1>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-default">
          <div class="card-header">
            Todos
          </div>

          <div class="card-body">
            <ul class="list-group">
              @foreach($todos as $todo)
                <li class="list-group-item">
                  {{ $todo->name }}

                  <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-end">View</a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>