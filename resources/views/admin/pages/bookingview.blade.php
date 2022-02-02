@extends('welcome')


@section('content')
<div id="divToPrint">
<div class="card">
<div class="card-body">
  
      <div class="container mb-5 mt-3">
        <div class="row d-flex align-items-baseline" >
          <div class="col-xl-9">
            <p style="color: #121922;font-size: 20px;">Invoice >> <strong>{{$bookings->id}}</strong></p>
          </div>
          <div class="col-xl-3 float-end">
            <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark" onClick="PrintDiv('divToPrint');" value="Print"><i class="fas fa-print text-primary"></i> Print</a>
          </div>
          <hr>
        </div>
  
        <div class="container">
          <div class="col-md-12">
            <div  class="text-center">
              <i class="fab fa-mdb fa-4x ms-0" style="color:#0f171b ;"></i> <p class="pt-0">MDBootstrap.com</p>
            </div>
  
          </div>
  
  
          <div class="row">
            <div class="col-xl-8">
              <ul class="list-unstyled">
                <li class="text-muted">To: <span style="color:#090622 ;">{{$bookings->user->name}}</span></li>
                <li class="text-muted"><i class="fa fa-fw fa-lg fa-envelope"></i>{{$bookings->user->email}}</li>
                <li class="text-muted"><i class="fas fa-phone"></i>{{$bookings->user->phonenumber}}</li>
              </ul>
            </div>
            <div class="col-xl-4">
              <p class="text-muted">Invoice</p>
              <ul class="list-unstyled">
                <li class="text-muted"><i class="fas fa-circle" style="color:#77bde2 ;"></i> <span class="fw-bold">ID:</span>#123-456</li>
                <li class="text-muted"><i class="fas fa-circle" style="color:#71afd6 ;"></i> <span class="fw-bold">Creation Date: </span>Jun 23,2021</li>
                <li class="text-muted"><i class="fas fa-circle" style="color:#76b1d8 ;"></i> <span class="me-1 fw-bold">Status:</span><span class="badge bg-warning text-black fw-bold"> Unpaid</span></li>
              </ul>
            </div>
          </div>
  
          <div class="row my-2 mx-1 justify-content-center">
            <table class="table table-striped table-borderless">
              <thead style="background-color:#254253 ;" class="text-white">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">No of guest</th>
                  <th scope="col">EventDate</th>
                  <th scope="col">ServiceName</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">UnitPrice</th>
                  <th scope="col">SubTotal</th>
                </tr>
              </thead>
              <tbody>
                @foreach($bookings->details as $key=>$details)
               
                <tr>
                   <td>{{$key+1}}</td>
                  <td>{{$details->persons}}</td>
                  <td>{{$details->date}}</td>
                  <td>{{$details->service->name}}</td>
                  <td>{{$details->quantity}}</td>
                  <td>{{$details->unit_price}}</td>
                  <td>{{$details->sub_total}}</td>
                </tr>
                @endforeach
              </tbody>
  
            </table>
          </div>
          <div class="row">
            <div class="col-xl-8">
              <p class="ms-3">Add additional notes and payment information</p>
  
            </div>
            <div class="col-xl-3">
              <ul class="list-unstyled">
              
                <li class="text-muted ms-3"><span class="text-black me-4">Total: {{$bookings->total_price}}</span></li>
              
                <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Tax(15%)</span></li>
                </ul>
                <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span style="font-size: 25px;">$1221</span></p>
            </div>
            
          </div>
  
        </div>
      </div>
    </div>
</div>
</div>
{{-- <input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">
<a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark" onClick="PrintDiv('divToPrint');" value="Print"><i class="fas fa-print text-primary"></i> Print</a> --}}
    
 
@endsection
<script language="javascript">
  function PrintDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
  }
</script>
