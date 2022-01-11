@extends('welcome')


@section('content')
    <h1>Catering Details</h1>

    <p>
        <img style="border-radius: 4px;" width="200px;"  src="{{url('/uploads/'.$catering->Image)}}" alt="product">
    </p>
<p>Food Name: {{$catering->foodname}}</p>
<p>Food Type: {{$catering->foodtype}}</p>
<p>Food Quantity:{{$catering->foodquantity}}</p>
<p>Food Price: <h4><span style="color: rgb(179, 125, 19)">BDT {{$catering->foodprice}}</span></h4></p>


@endsection