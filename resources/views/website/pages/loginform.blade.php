@extends('website.master')
@section('contents')
<div class="container" style="margin-top:150px;">
 <form>
	<legend class="text-center" style="padding-bottom: 12px;">Log In</legend>
	<div class="mb-3">
	  <label for="InputUserId" class="form-label">User Id</label>
	  <input type="Text" class="form-control" id="InputUserId" aria-describedby="UserId">
	  <div id="UserId" class="form-text">We'll never share your User Id with anyone else.</div>
	</div>
	<div class="mb-3">
	  <label for="exampleInputPassword1" class="form-label">Password</label>
	  <input type="password" class="form-control" id="exampleInputPassword1">
	</div>
	<div class="mb-3 form-check">
	  <input type="checkbox" class="form-check-input" id="exampleCheck1">
	  <label class="form-check-label" for="exampleCheck1">Check me out</label>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  @endsection