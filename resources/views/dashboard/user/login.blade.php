<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<body>
	<h1>User Login</h1>
	<h4>You are registered successfully</h4>
	<p>Now you can login as a user</p>
	<form action="{{ route('user.check') }}" method="POST">
		@csrf
		Email:<input type="email" name="email"><br><br>
		Password:<input type="Password" name="password"><br><br>
		<button type="submit" value="submit">submit</button>
		
	</form>
</body>
</html>