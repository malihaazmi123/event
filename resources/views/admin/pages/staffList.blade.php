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
      <th scope="col">Handle</th>
      
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
      <td> 
        <div style="display: flex;">
       <div style="padding-right: 10px;"><a class="btn btn-light" style="color: rgb(228, 11, 11)" href="{{route('admin.staff.delete',$staff->id)}}">Delete</a></div>
        <div style="padding-right: 10px;"><a class="btn btn-light" style="color: rgb(32, 77, 51)" href="{{route('admin.staff.edit',$staff->id)}}">Edit</a></div>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    @endsection