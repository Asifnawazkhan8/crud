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
      <li class="active "><a href="/Product/listing">Product</a></li>
      <li><a href="/Task/newtask">Task</a></li>
      <li><a href="/Contact/newcontact">Contact</a></li>
    </ul>
  </div>
</nav>
            <h1 align="center">CRUD Application</h1>

        <div class="container">
          <h3 style="margin-top:2%">Products</h3>
              <table class="table table-hover">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Names</th>
                <th>Description</th>
                <th>Images</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
              <tr>
                <td>{{ $loop -> index+1}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td><img src="{{ asset('Product/' . $product->image) }}" class="rounded-circle" width="30px" height="30px"></td>
                <td>
                  <a href="products/{{$product -> id}}/edit" class="btn btn-success btn-sm">Edit</a>
                  <a href="products/{{$product -> id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
              @endforeach
          </div>
        
    </body>
</html>
