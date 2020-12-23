@extends('layouts.master')

@section('title')
Registered Customers
@endsection

@section('main')
<div class="jumbotron">
<div class="row">
    <div class="col-md-12 text-right"></div>

<table class="table mt-5">
    <thead class="thead-dark">
      <tr>
        <th scope="col">National ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">mobile </th>
        <th scope="col">address </th>
        <th scope="col">image </th>

        <th class="text-right">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
               <td>{{$user->nationalid}}</td>
               <td>{{$user->fullname}}</td>
               <td>{{$user->email}}</td>
               <td>{{$user->mobile}}</td>
               <td>{{$user->address}}</td>
               <td><img src="{{asset('uploads/photo/'. $user->image)}}" alt="image" width='100px' height='100px'  > </td>
               <td class="text-right">
                   <a href="/edituser/{{$user->id}}" class="btn btn-primary badge-pill" style="width:80px;">Edit</a>
                   <a href="/deleteuser/{{$user->id}}" class="btn btn-danger badge-pill" style="width:80px;">Delete</button>
               </td>
            </tr>
        @endforeach


       {{-- {{THIS ONLY TO SHOW DATA WITHOUT DB - 1st step}} --}}
                   {{-- <tr class='table-danger'>
                   <td>{{$infoarr[0]}}</td>
                   <td>{{$infoarr[1]}}</td>
                   <td>{{$infoarr[2]}}</td>

                   </tr>; --}}
    </tbody>
</table>

{{-- <div class="col-md-3"></div> --}}
</div>
</div>
@endsection