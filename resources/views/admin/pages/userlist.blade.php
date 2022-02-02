@extends('welcome')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">User_name</th>
        <th scope="col">Phone_Number</th>
        <th scope="col">Gender</th>
       <!-- <th scope="col">Date</th>-->
        <th scope="col">Email</th>
        {{-- <th scope="col">Image</th> --}}
        {{-- <th scope="col">Handle</th> --> --}}
        
      </tr>
  </thead>

  <tbody> 
    @foreach($userviews as $key=>$userview)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$userview->name}}</td>
      <td>{{$userview->phonenumber}}</td>
      <td>{{$userview->gender}}</td>
      <td>{{$userview->email}}</td>  {{--table/databasename --}}
      {{-- <td>
        <img width="100px" src="{{url('/uploads/'.$userview->image)}}" alt="">
      </td> --}}
    </tr>
    @endforeach
  </tbody>

</table>

@endsection