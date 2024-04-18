<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="color:white" class="navbar-brand" href="/">CRUD Application</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="/Product/listing">Product</a></li>
      <li class="active "><a href="/Task/newtask">Task</a></li>
      <li><a href="/Contact/newcontact">Contact</a></li>
    </ul>
  </div>
</nav>
<!-- @if($message = Session::get('sucess'))
<div class="alert alert-sucess alert-block">
    <strong>{{$$message}}</strong>
</div>
@endif -->
            <h1 align="center">Task Page</h1>
            <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                    <form method="POST" action="/Task/store" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="name"> Name:</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Task</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
