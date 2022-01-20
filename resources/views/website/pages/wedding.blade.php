@extends('website.master')
<div class="container" style="margin-top:300px;background-image: url('{{url('frontend/images/229796.jpg')}}')">
<div class="row">
    @foreach ($lists as $key=>$list)
        
    
    <div class="col-md-12 col-md-offset-0">
        <ul class="timeline animate-box">
            <li class="animate-box">
                <div class="timeline-badge" style= "background-image: url('{{url('/uploads/'.$list->image)}}')" >
                    </div>
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



