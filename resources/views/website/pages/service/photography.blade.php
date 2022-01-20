@extends('website.master')
<style>
    .myimg{
  width:500px;
  height:250px;
 
}
</style>
<div class="container" style="margin-top:150px;">
<div class="row">
    @foreach ($photos as $key=>$photo)
        
    
    <div class="col-md-12 col-md-offset-0">
        <ul class="timeline animate-box">
            <li class="animate-box">
                <img class="myimg" src="{{url('/uploads/'.$photo->albumimage)}}">
                    
                <div class="timeline-panel"style="margin-top:150px;">
                    <div class="timeline-heading">
                        <h3 class="timeline-title">{{$photo->albumname}}</h3>
                        <span class="date"></span>
                    </div>
                    <div class="timeline-body">
                        <p>Photographer Name: {{$photo->photographername}}</p>
                        <p> {{$photo->imagedescreption}}</p>
                        <p>Photography cost:<h4>BDT{{$photo->photographycost}}</h4></p>
                        <a href="{{route('website.booking.add',$photo->id)}}" class="btn btn-primary">Add to Booking</a>
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