<!DOCTYPE html>
<html>
<head>
	<title>User Register</title>
</head>
<body>
	<h1>User Register</h1>
	<form action="{{route('user.store')}}" method="POST">
		@csrf
		Name:<input type="text" name="name"><br><br>
		Email:<input type="email" name="email"><br><br>
		Password:<input type="password" name="password"><br><br>
		Confirm:<input type="password" name="cpassword"><br><br>
		<button type="submit" value="submit">submit</button>
	</form>
</body>
</html>