@extends('welcome')

@section('content')

<table class="table">
  
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Type_ID</th>
      <th scope="col">Service_Name</th>
      <th scope="col">Service_Description</th>
      <th scope="col">ServicePrice</th>
      <th scope="col">ServiceCode</th>
      <th scope="col">Image</th>
      <!-- <th-- scope="col">Description</th-->
      <th scope="col">Handle</th>
      
    </tr>
  </thead>
  <tbody> 
    @foreach($services as $key=>$service)
    <tr>
      
      <td>{{$key+1}}</td>
      <td>{{$service->type_id}}</td>
      <td>{{$service->name}}</td>
      <td>{{$service->description}}</td>
      <td>{{$service->price}}</td>
      <td>{{$service->status}}</td>
      <td>
        <img width="100px" src="{{url('/uploads/'.$service->image)}}" alt="">
      </td>
      <td>
        <a class="btn btn-light" style="color: rgb(179, 125, 19)" href="{{route('admin.view.catering',$service->id)}}">view</a>
        <a class="btn btn-light" style="color: rgb(228, 11, 11)" href="{{route('admin.delete.catering',$service->id)}}">Delete</a>
        <a class="btn btn-light" style="color: rgb(32, 77, 51)" href="{{route('admin.edit.catering',$service->id)}}">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection