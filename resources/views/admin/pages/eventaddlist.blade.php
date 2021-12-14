@extends('welcome')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Event_name</th>
      <th scope="col">Event_Description</th>
      <th scope="col">Event_Image</th>
      <!-- <th scope="col">Description</th>
      <th scope="col">Handle</th> -->
      
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
{{--table/databasename --}}
    </tr>
    @endforeach
  </tbody>
</table>
@endsection