<!DOCTYPE html>
<html>
<head>
	<title>KKFC Restaurant</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

		

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<link href="{{ asset('assets/css/mainstyle.css') }}" rel="stylesheet">

	<script src="{{asset('assets/js/esewa-payment.js')}}"></script>

	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>
<body>

	<!--navigation bars for mobile and desktop  -->

	<header>
		<nav  class="text-center menu">
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/menu">KKFC Menu</a></li>
				<li><a href="/franchising">Franchising</a></li>
				<li><a href="/"><img src="/storage/site-images/logo_final.png" alt="KKFC Logo" width="250px"/></a></li>
				<li><a href="/book-a-table">Book A Table</a></li>
				
				<li><a href="/special-offers">Special Offers</a></li>
				<li><a href="/careers">Careers</a></li>
				<li><a href="/cart"><i class="fas fa-shopping-cart"></i><span class="cart-count mx-1">{{Cart::count()}}</span></a></li>

			</ul>
		</nav>

		<nav class="mobile-menu">
			
			<a href="/"><img src="/storage/site-images/logo_final.png" alt="KKFC Logo" width="250px"/></a>

			<span  class="menu-toggler" style=""><i class="fas fa-bars" data-toggle="collapse" data-target="#topMenu" ></i></span>

			<div id="topMenu" class="collapse">

				<ul>
					<li><a  href="/">Home</a></li>
					<li><a  href="/menu">Menu</a></li>
					<li><a  href="/franchising">Franchising</a></li>
					<li><a  href="/book-a-table">Book A Table</a></li>
					<li><a  href="/special-offers">Special Offers</a></li>
					<li><a  href="/careers">Careers</a></li>
					

				</ul>

			</div>

			<a class="cart" href="/cart"><i class="fas fa-shopping-cart"></i></a>

		</nav>

	</header>

	<!--start order module-->
		
	@yield('start-order-module')

	<!-- main content -->

	<main>

		@yield('content')

	</main>
	
	<!--footer section -->

	<div class="container">
		<!-- just a empty div for structuring -->
	</div>


	<footer class="py-5">

		<div class="container">
			
			<div class="row">

				<div class="col-sm-3">

					<h6>ORDER NOW</h6>
					<ul>
						<li><a href="pickup-details">PICKUP</a></li>
						<li><a href="delivery-details">DELIVERY</a></li>
						<li><a href="contact-us">CALL +977-9801113727</a></li>
					</ul>
					
				</div>

				<div class="col-sm-3">


					<h6>ABOUT US</h6>
					<ul>
						<li><a href="contact-us">CONTACT US</a></li>
						<li><a href="privacy-policy">PRIVACY POLICY</a></li>
					</ul>
					
					
				</div>

				<div class="col-sm-3">


					<h6>USEFUL LINKS</h6>
					<ul>
						<li><a href="book-a-table">BOOK A TABLE</a></li>
						<li><a href="careers">CAREERS</a></li>
						<li><a href="menu">MENU</a></li>
						<li><a href="franchising">FRANCHISING</a></li>
					</ul>
					
					
				</div>

				<div class="col-sm-3">

					<h6>FOLLOW US</h6>
					<ul style="font-size: 3em;">
						<li style="display: inline-block;"><a href="https://www.facebook.com/kkfcnepal/?ref=br_rs"><i class="fab fa-facebook-square"></i></a></li>
						<li style="display: inline-block;"><a href="https://www.instagram.com/kkfcnepal/?hl=en"><i class="fab fa-instagram"></i></a></li>
						
					</ul>
					
					
				</div>

			</div>

		</div>
		
	</footer>


</body>
</html>