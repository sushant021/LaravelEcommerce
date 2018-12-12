<!DOCTYPE html>
<html>
<head>
	<title>New Franchising Request Received</title>
</head>
<body>

		<h1>You've received a Table Booking Order from your site. The details are as follows</h1>
		
		<section>
			<p>Name : {{$bookingData['name']}}</p> 
			<p>No. Of Guests: {{$bookingData['no_of_people']}}</p>
			<p>Arrival Date and Time: {{$bookingData['booking_date_time']}} </p>
			<p>Location:{{$bookingData['location']}}</p>
			<p>Contact:{{$bookingData['contact']}}</p>
			<p>Message:{{$bookingData['message']}}</p>
		</section>
		
		
</body>
</html>