<!DOCTYPE html>
<html>
<head>
	<title>New Franchising Request Received</title>
</head>
<body>

		<h1>You've received a franchising request from your site. The request details are as follows</h1>
		
		<section>
			<p>Name : {{$franchiseeData['name']}}</p> 
			<p>Email: {{$franchiseeData['email']}}</p>
			<p>Budget: {{$franchiseeData['budget']}}</p>
			<p>Location:{{$franchiseeData['location']}}</p>
			<p>Contact:{{$franchiseeData['contact']}}</p>
			<p>Message:{{$franchiseeData['message']}}</p>
		</section>
		
		
</body>
</html>