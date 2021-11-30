@extends('welcome')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Staff_name</th>
      <th scope="col">Job_Designation</th>
      <th scope="col">Email</th>
      <th scope="col">Permanent_Address</th>
      <th scope="col">Current_Address</th>
      <!-- <th scope="col">Description</th>
      <th scope="col">Handle</th> -->
      
    </tr>
</thead>
<tbody>
@foreach($staffs as $key=>$holder)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$holder->name}}</td>
      <td>{{$holder->jobdesignation}}</td>
      <td>{{$holder->email}}</td>
      <td>{{$holder->paddress}}</td>
      <td>{{$holder->caddress}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    @endsection