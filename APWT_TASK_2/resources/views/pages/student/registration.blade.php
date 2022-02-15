@extends('layout.app')
@section('content')
<form action="{{route('registration')}}" class="form-group" method="post">
{{csrf_field()}}
    <label for="">Student Name</label>
    <input type="text" class="form-control" name="name" value="{{old('name')}}">
    @error('name')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label for="">Address</label>
    <input type="text" class="form-control" name="id" value="{{old('address')}}">
    @error('address')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label for="">Email</label>
    <input type="text" class="form-control" name="email" value="{{old('email')}}">
    @error('email')
    <span>{{$message}}</span>
    @enderror
    <br>
    <label for="">PhoneNumber</label>
    <input type="text" class="form-control" name="phonenu" value="{{old('phoneno')}}">
    @error('phonenu')
    <span>{{$message}}</span>
    @enderror
    <br>
    <input type="submit">
</form>
@endsection