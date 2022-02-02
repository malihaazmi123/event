@extends('welcome')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Event_name</th>
      <th scope="col">Event_Description</th>
      <th scope="col">Event_Image</th>
      <th scope="col">Handle</th> 
      
    </tr>
  </thead>
  <tbody> 
    @foreach($lists as $key=>$list)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$list->eventname}}</td>
      <td>{{$list->eventdescripsion}}</td>
      <td>
        <img width="100px" src="{{url('/uploads/'.$list->image)}}" alt="">
      </td>
      <td> 
        <div style="display: flex;">
       <div style="padding-right: 10px;"><a class="btn btn-light" style="color: rgb(228, 11, 11)" href="{{route('event.add.eventdelete',$list->id)}}">Delete</a></div>
        <div style="padding-right: 10px;"><a class="btn btn-light" style="color: rgb(32, 77, 51)" href="{{route('event.add.eventedit',$list->id)}}">Edit</a></div>
        </div>
      </td>
{{--table/databasename --}}
    </tr>
    @endforeach
  </tbody>
</table>
@endsection