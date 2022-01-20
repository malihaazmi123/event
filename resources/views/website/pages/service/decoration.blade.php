@extends('website.master')
<style>
    .myimg{
  width:500px;
  height:250px;
 
}
</style>
<div class="container" style="margin-top:150px;">
<div class="row">
    @foreach ($decors as $key=>$decor)
        
    
    <div class="col-md-12 col-md-offset-0">
        <ul class="timeline animate-box">
            <li class="animate-box">
                <img class="myimg" src="{{url('/uploads/'.$decor->image)}}">
                    
                <div class="timeline-panel"style="margin-top:150px;">
                    <div class="timeline-heading">
                        <h3 class="timeline-title">{{$decor->decorationname}}</h3>
                        <span class="date"></span>
                    </div>
                    <div class="timeline-body">
                        <p>Decoration Type: {{$decor->decorationname}}</p>
                        <p>Decoration place: {{$decor->decorationplace}}</p>
                        <p>Decoration cost:<h4>BDT {{$decor->decorationcost}}</h4></p>
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