@extends('website.master')
<style>
    .myimg{
  width:500px;
  height:250px;
 
}
</style>
<div class="container" style="margin-top:300px;background-image:">
<div class="row">
    @foreach ($lists as $key=>$list)
        
    
    <div class="col-md-12 col-md-offset-0">
        <ul class="timeline animate-box">
            <li class="animate-box">
                <img class="myimg" src="{{url('/uploads/'.$list->image)}}">
                <div class="timeline-panel"style="margin-top:150px;">
                    <div class="timeline-heading">
                        <h3 class="timeline-title">{{$list->eventname}}</h3>
                        <span class="date"></span>
                    </div>
                    <div class="timeline-body">
                        <p>{{$list->eventdescripsion}}</p>
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



