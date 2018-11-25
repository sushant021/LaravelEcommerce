<div class="container my-3">
	
	<div class="row">
		
		<div class="col-sm-6">

			<article style="margin-bottom: 5em;">

				<h2 class="mb-3">About KKFC</h2>

				<p class="mb-2">KKFC is the very first of its kind fast food restaurant that started in Nepal since 2017. A true Nepali brand with a vision to provide highest quality food at affordable rate. KKFC is also known as the first restaurant to provide ROBOT service in Nepal. KKFC is the most advanced fast food restaurant in Nepal and expanding….</p>
				<p>"A Place where Food meets Technology."</p>

				@include('inc.foodslider')

			</article>

			

			<article id="specialOffers" class="section-container">
				
				<span style="font-size: 24px;">SPECIAL OFFERS</span>

				<p class="my-3">Wednesdays, Fridays and Saturdays are always special here in KKFC. Check out our special deals that come with free delivery service and absolutely no extra charges !
				</p>
				
				<p>VALUE STARTS HERE....</p>

				<a href="special-offers" class="kkfc-btn"> FIND OUT MORE</a>


			</article>


		</div>

		<div class="col-sm-6">

			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=239188380186949";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
			jQuery(document).ready(function($) {
				  $(window).bind("load resize", function(){  
				  setTimeout(function() {
				  var container_width = $('#container').width();    
				    $('#container').html('<div class="fb-page" ' + 
				    'data-href="http://www.facebook.com/kkfcnepal"' +
				    ' data-width="' + container_width + '" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-height="730"><div class="fb-xfbml-parse-ignore"><blockquote cite="http://www.facebook.com/kkfcnepal"><a href="http://www.facebook.com/kkfcnepal">KKFC</a></blockquote></div></div>');
				    FB.XFBML.parse( );    
				  }, 100);  
			}); 
			});
			</script>

			<div id="container" style="width:100%;">  
				<div class="fb-page" data-href="http://www.facebook.com/kkfcnepal" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="http://www.facebook.com/kkfcnepal"><a href="http://www.facebook.com/kkfcnepal">KKFC Restaurant</a></blockquote></div></div>
			</div>
			
		</div>
	</div>
</div>