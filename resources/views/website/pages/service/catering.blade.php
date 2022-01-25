@extends('website.master')
<style>
    .myimg{
  width:500px;
  height:250px;
 
}
</style>
<div class="container" style="margin-top:150px;">
<div class="row">
    @foreach ($service as $key=>$service)
        
    
    <div class="col-md-12 col-md-offset-0">
        <ul class="timeline animate-box">
            <li class="animate-box">
                <img class="myimg" src="{{url('/uploads/'.$service->image)}}">
                    
                <div class="timeline-panel"style="margin-top:150px;">
                    <div class="timeline-heading">
                        <h3 class="timeline-title">{{$service->name}}</h3>
                        <span class="date"></span>
                    </div>
                    <div class="timeline-body">
                        <p>Food Type:{{$service->description}}</p>
                        <p>Food Quantity: {{$service->status}}</p>
                        <p>Food Price:<h4>BDT {{$service->price}}</h4></p>
                        <a href="{{route('website.booking.add',$service->id)}}" class="btn btn-primary">Add to Booking</a>
                    </div>
                </div>
            </li>
            
        </ul>
    </div>
    @endforeach
</div>
</div>
</div>
</div>