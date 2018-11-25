@extends('layouts.frontEnd.base')

@if(session('orderType') == '')

	@section('start-order-module')

  		@include('inc.start-order-module')

	@endsection



	@section('content')
		
		<div class="container section-container">

			<div class="row">


				<div class="col-sm-12 col-lg-6 col-md-6 col-xl-6">
					
					<article>
						
						<h4>Who We Are ?</h4>  

						<p>Nestled in the heart of the Kathmandu city is one of the most popular chicken restaurant. Famously started in 2017, the fast-food restaurant is growing and is expanding quickly.</p>

						<h4>What it's like to work at KKFC ?</h4>

						<p>Working at KKFC is quite challenging and rewarding at the same time. We have a team of motivated and hardworking employees who strive towards delivering quality service to the customers. KKFC has always been encouraging employees to explore different career routes such as going from a team member, shift supervisor to assistant store manager, even to roles.  We also reward deserving employees. We always motivate people to strive within their role.</p>

						<h4>Vacancies</h4>

						<p>If you have what it takes and enjoy working with a dynamic team that is ready to serve hundreds of chicken lovers every day, then you are invited to our family !!</p>

						<p>Send your up-to-date resume along with a cover letter to this email:<strong>info@kkfcnepal.com</strong></p>

						<p>If you want to contact us directly, please proceed to <a href="/contact-us" style="color: red;">Contact Us </a>page</p>



					</article>
						
										
				</div>

				<div class="col-sm-12 col-lg-6 col-md-6 col-xl-6">
					
					<img src="storage/site-images/kkfc_team.png" alt="KKFC team" class="img-fluid"/>

				</div>
				
			</div>
			

		</div>
		
	@endsection

@else

	
	@section('content')
		
		<div class="container">

			<div class="row">


				<div class="col-sm-12 col-lg-6 col-md-6 col-xl-6">
					
					<article>
						
						<h4>Who We Are ?</h4>  

						<p>Nestled in the heart of the Kathmandu city is one of the most popular chicken restaurant. Famously started in 2017, the fast-food restaurant is growing and is expanding quickly.</p>

						<h4>What it's like to work at KKFC ?</h4>

						<p>Working at KKFC is quite challenging and rewarding at the same time. We have a team of motivated and hardworking employees who strive towards delivering quality service to the customers. KKFC has always been encouraging employees to explore different career routes such as going from a team member, shift supervisor to assistant store manager, even to roles.  We also reward deserving employees. We always motivate people to strive within their role.</p>

						<h4>Vacancies</h4>

						<p>If you have what it takes and enjoy working with a dynamic team that is ready to serve hundreds of chicken lovers every day, then you are invited to our family !!</p>

						<p>Send your up-to-date resume along with a cover letter to this email:<strong>info@kkfcnepal.com</strong></p>

						<p>If you want to contact us directly, please proceed to <a href="/contact-us" style="color: red;">Contact Us </a>page</p>



					</article>
						
										
				</div>

				<div class="col-sm-12 col-lg-6 col-md-6 col-xl-6">
					
					<img src="storage/site-images/kkfc_team.png" alt="KKFC team" class="img-fluid"/>

				</div>
				
			</div>
			

		</div>
		
	@endsection	

@endif
