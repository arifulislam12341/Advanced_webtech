@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studentlogin</title>
</head>
<body>
<form action="{{route('userLogin')}}" class="form-group" method="post">
{{csrf_field()}}
    
    
    <label for="">Email</label>
    <input type="text" class="form-control" name="email" value="{{old('email')}}">
    @error('email')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label for="">Password</label>
    <input type="password" class="form-control" name="password" value="{{old('password')}}">
    @error('password')
    <span>{{$message}}</span>
    @enderror
    <br>
    <input type="submit">
</form>
</body>
</html>

@endsection