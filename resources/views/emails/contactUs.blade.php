<!DOCTYPE html>
<html>
<head>
	<title>New Message From Site</title>
</head>
<body>

		<h1>You've received a new message from Contact Us page in your site. The details are as follows:</h1>
		
		<section>
			<p>Name : {{$contactData['name']}}</p> 
			<p>Email: {{$contactData['email']}}</p>
			<p>Budget: {{$contactData['subject']}}</p>
			<p>Message:{{$contactData['message']}}</p>
		</section>
		
		
</body>
</html>