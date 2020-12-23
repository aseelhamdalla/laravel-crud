@extends('layouts.master')

@section('title')
Edit Student
@endsection


@section('main')

<form action="/update/{{$users->id}}" method="post">
  @csrf
{{-- {{method_field('PUT')}} --}}
{{-- @method("PUT") --}}

<input type="hidden" name="id" value="{{$users->id}}">


<div class="form-group">
  <label for="exampleInputEmail1">nationalid</label>
  <input type="text" class="form-control" id="exampleInputEmail1" name="nationalid" placeholder="Enter name" value="{{$users->nationalid}}">
   <div> {{ $errors->first('nationalid')}}</div>
</div>

    <div class="form-group">
        <label for="exampleInputEmail1"> Full Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="fullname" placeholder="Enter name" value="{{$users->fullname}}">
         <div> {{ $errors->first('fullname')}}</div>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"  value="{{$users->email}}">
        <div>{{$errors->first('email')}} </div>
    </div>


    <div class="form-group">
      <label for="exampleInputPassword1">mobile</label>
      <input type="mobile" class="form-control" name="mobile" placeholder="mobile"  value="{{$users->mobile}}">
      <div>{{$errors->first('mobile')}}</div>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">address</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="address" placeholder="Enter mobile number"  value="{{$users->address}}">
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
    <button type="submit" name="submit" class="btn btn-primary">Update</button>
   

  </form>

@endsection

