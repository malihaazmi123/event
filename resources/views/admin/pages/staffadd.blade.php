@extends('welcome')
@section('content')
<h1>Create Staff table</h1>
@if (session()->has('msg'))
     <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<form action="{{route('staff.post.add')}}" method="POST" class="row g-3" style="color :white">
@csrf

    <div class="col-md-6" style="color :white">
      <label for="TextInput" class="form-label"> Name </label>
  <input name="Staff_name" type="text" id="TextInput" class="form-control" placeholder="name" style="color :black" required>
    </div>
    <div class="col-md-6">
      <label for="TextInput" class="form-label">Job Designation</label>
  <input name="Job_Designation" type="text" id="TextInput" class="form-control" placeholder="Job designation" style="color :black" required>
    </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input name="Email" type="email" class="form-control" id="inputEmail4" placeholder="Email" style="color :black">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address (Permanent)</label>
    <input name="Permanent_Address" type="text" class="form-control" id="inputAddress" placeholder="Permanent Address" style="color :black">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address(Current) </label>
    <input name="Current_Address" type="text" class="form-control" id="inputAddress2" placeholder="Current Address" style="color :black">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection