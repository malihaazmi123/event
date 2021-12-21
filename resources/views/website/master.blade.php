<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Event &mdash;Management website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{url('frontend/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{url('frontend/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{url('frontend/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{url('frontend/css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{url('frontend/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		

		
     @include('website.fixed.sidebar')

	 
 @yield('contents')


 <footer id="fh5co-footer" role="contentinfo">
	<div class="container">

		<div class="row copyright">
			<div class="col-md-12 text-center">
				<p>
					<small class="block">&copy; 2021 Free HTML5. All Rights Reserved.</small> 
					<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
				</p>
				<p>
					<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
					</ul>
				</p>
			</div>
		</div>

	</div>
</footer>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{url('frontend/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{url('frontend/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{url('frontend/js/jquery.waypoints.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
	<!-- countTo -->
	<script src="{{url('frontend/js/jquery.countTo.js')}}"></script>

	<!-- Stellar -->
	<script src="{{url('frontend/js/jquery.stellar.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{url('frontend/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{url('frontend/js/magnific-popup-options.js')}}"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="{{url('frontend/js/simplyCountdown.js')}}"></script>
	<!-- Main -->
	<script src="{{url('frontend/js/main.js')}}"></script>

	<script>
    var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>

	</body>
</html>

