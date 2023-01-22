<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
</head>
<body>
	<h1>Admin Login</h1>
	<form action="{{ route('admin.check') }}" method="POST">
		@csrf
		Email:<input type="email" name="email"><br><br>
		Password:<input type="password" name="password"><br><br>
		<button type="submit" value="submit">submit</button>
	</form>
</body>
</html>