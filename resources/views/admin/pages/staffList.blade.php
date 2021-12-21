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
      <th scope="col">Staff_Image</th>
      <!-- <th scope="col">Description</th>
      <th scope="col">Handle</th> -->
      
    </tr>
</thead>
<tbody>
@foreach($staffs as $key=>$staff)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$staff->name}}</td>
      <td>{{$staff->jobdesignation}}</td>
      <td>{{$staff->email}}</td>
      <td>{{$staff->paddress}}</td>
      <td>{{$staff->caddress}}</td>
      <td>
        <img width="100px" src="{{url('/uploads/'.$staff->Image)}}" alt="">
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    @endsection