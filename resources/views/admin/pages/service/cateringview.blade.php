@extends('welcome')


@section('content')
    <h1>service Details</h1>

    <p>
        <img style="border-radius: 4px;" width="200px;"  src="{{url('/uploads/'.$serviceview->image)}}" alt="service">
    </p>
<p>Service Name: {{$serviceview->name}}</p>
<p>Service Description: {{$serviceview->description}}</p>
<p>Service Code:{{$serviceview->status}}</p>
<p>service Cost: <h4><span style="color: rgb(179, 125, 19)">BDT {{$serviceview->price}}</span></h4></p>


@endsection