@extends('layout.app')
<html>
    <head>

    </head>
    <body>
    @section('content')
  <h1>Product</h1>
      <ul>
     @foreach($names as $key)
    <li>{{$key}}</li>
      @endforeach
      </ul>

    @endsection
    </body>
</html>