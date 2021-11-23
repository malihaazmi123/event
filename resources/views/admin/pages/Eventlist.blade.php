@extends('welcome')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">serial</th>
      <th scope="col">Event_name</th>
      <th scope="col">Event_users</th>
      <th scope="col">Event_date</th>
      <th scope="col">Event_status</th>
      <!-- <th scope="col">Description</th>
      <th scope="col">Handle</th> -->
      
    </tr>
  </thead>
  <tbody>
    @foreach($events as $key=>$event)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$event->name}}</td>
      <td>{{$event->User}}</td>
      <td>{{$event->status}}</td>
      <td>{{$event->Date}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection