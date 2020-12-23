@extends('layouts.master')

@section('title')
<h1>Registration</h1>
@endsection 

@section('main')
<div class="jumbotron">
<form action="/customertable" method="post"  enctype="multipart/form-data" >
    <div class="form-group">
        <label for="exampleInputEmail1">NationalID</label>
        <input type="number" class="form-control" id="exampleInputEmail1" name="nationalid" placeholder="">
        <div>{{$errors->first('nationalid')}}</div>
     </div>

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

    <div class="form-group">
        <label for="exampleInputEmail1">mobile</label>
        <input type="number" class="form-control" id="exampleInputEmail1" name="mobile" placeholder="">
        <div>{{$errors->first('mobile')}}</div>
     </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Address</label>
      <input  type="text" class="form-control" name="address" placeholder="address">
      <div>{{$errors->first('address')}}</div>
    </div>

     <div class="form-group">
        <label for="exampleInputEmail1">image</label>
        <input type="file" class="form-control" id="exampleInputEmail1" name="image" >
        <div>{{$errors->first('image')}}</div>
     </div>

     <div class="form-group">
        <label for="exampleInputPassword1">Role</label>
        <input  type="text" class="form-control" name="role" placeholder="role">
        <div>{{$errors->first('role')}}</div>
      </div>
  
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    @csrf
<form>
</div>
@endsection

