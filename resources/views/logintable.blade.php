@extends('layouts.master')


@section('main')

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
         
               <td>{{$user->fullname}}</td>
               <td>{{$user->email}}</td>
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
@endsection