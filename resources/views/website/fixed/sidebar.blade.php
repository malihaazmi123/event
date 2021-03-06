<nav class="fh5co-nav" role="navigation"  style="background: #343030" >
	<div class="container">
		<div class="row">
			<div class="col-xs-2">
				<div id="fh5co-logo"><a href="index.html">Event<strong>.</strong></a></div>
			</div>
	
			<div class="col-xs-10 text-right menu-1">
				<ul>
					<li class="active"><a href="{{route('frontend')}}">Home</a></li>
					<li class="has-dropdown">
							<li><a href="{{route('website.wedding.list')}}">Event</a></li>
						
					</li>

					<li class="has-dropdown">
						<a >Services</a>
						<ul class="dropdown" name="type">
								@foreach ($types as $type )
								<li><a href="{{route('website.catering.list',$type->id)}}" value="{{$type->id}}">{{$type->name}}</a></li>
								@endforeach
						</ul>
					</li>

					<li><a href="contact.html">Contact</a></li>
					<li><a class="nav-link" href="{{route('website.cart.get')}}">Booking ({{session()->has('cart') ? count(session()->get('cart')):0}})</a></li>
					
					<li><a class="nav-link" href="{{route('profile.view',(auth()->user()?$user->id:0))}}">My Profile</a></li>
					
					
					@if (auth()->user())
					<li class="nav-item">
					<a class="nav-link" href="{{route('website.user.logout')}}">logout</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="">{{auth()->user()->name}}</a>
					   </li>
					   @else
					   <li><a href="{{route('website.registration')}}">Registration</a></li> 
					<li>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
							Login
						</button>
					</li>
					@endif

					@if (session()->has('msg'))
					<p class="alert alert-success">{{session()->get('msg')}}</p>
			   @endif
			   @if (session()->has('error'))
			   <p class="alert alert-danger">{{session()->get('error')}}</p>
		  @endif
					
				</ul>
			</div>
		</div>
		
	</div>
</nav>




  
  <!--Login Modal -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			  <form action="{{route('websitw.user.login')}}" method="POST" style="color :rgb(10, 10, 10)">
				@csrf
				  <fieldset enabled>
					<div class="form-floating mb-3">
					  <label for="floatingInput">Email address</label>
					  <input name="email" type="email" class="form-control" id="floatingemail" placeholder="name@example.com">
					</div>
					<div class="form-floating">
					  <label for="floatingPassword">Password</label>
					  <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
					</div>
				  </fieldset>

				  <div class="modal-footer">
					<button type="submit" class="btn btn-primary">Login</button>
				  </div>
				</form>
		</div>
		
	  </div>
	</div>
  </div>


