@extends('website.master')
<style>
    .myimg{
  width:500px;
  height:250px;
 
}
</style>
<div class="container" style="margin-top:150px;">
<div class="row">
    @foreach ($cates as $key=>$cate)
        
    
    <div class="col-md-12 col-md-offset-0">
        <ul class="timeline animate-box">
            <li class="animate-box">
                <img class="myimg" src="{{url('/uploads/'.$cate->Image)}}">
                    
                <div class="timeline-panel"style="margin-top:150px;">
                    <div class="timeline-heading">
                        <h3 class="timeline-title">{{$cate->foodname}}</h3>
                        <span class="date"></span>
                    </div>
                    <div class="timeline-body">
                        <p>Food Type: {{$cate->foodtype}}</p>
                        <p>Food Quantity: {{$cate->foodquantity}}</p>
                        <p>Food Price:<h4>BDT {{$cate->foodprice}}</h4></p>
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