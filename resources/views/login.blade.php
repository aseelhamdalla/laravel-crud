@extends('layouts.master')

@section('main')
<div class="jumbotron">

<form action="/logintable" method="post"  enctype="multipart/form-data" >
    <div class="form-group">
        <label for="exampleInputEmail1">Full Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="fullname" placeholder="Enter name">
    @error('fullname')
    <div>
      <p style="color: red;font-size:1.5rem">{{$message}}</p>
    </div>
    @enderror
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <div>{{$errors->first('email')}} </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    @csrf

  </form>

</div>
@endsection

