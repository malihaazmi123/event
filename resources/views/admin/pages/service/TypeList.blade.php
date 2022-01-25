@extends('welcome')

@section('content')

<table class="table">
  
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Type_Name</th>
      <th scope="col">Type_Status</th>
      <!-- <th-- scope="col">Description</th-->
      <th scope="col">Handle</th>
      
    </tr>
  </thead>
  <tbody> 
    @foreach ($types  as $key=>$type)
    <tr>
      
      <td>{{$key+1}}</td>
      <td>{{$type->name}}</td>
      <td>{{$type->status}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection