@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactus</title>
</head>
<body>
    <form action="{{route('contactus')}}" class="form-group" method="post">
    {{csrf_field()}}
    <label for="">Email</label>
    <input type="text" name="email" id="" value="{{old('email')}}"  class="form-control" >
    @error('email')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label for="">Message</label>
    <input type="text" name="message" id="" value="{{old('message')}}"  class="form-control">
    @error('message')
   
    <span>{{$message}}</span>
    @enderror
    <br>
    <input type="submit">
    </form>

</body>
</html>
@endsection

