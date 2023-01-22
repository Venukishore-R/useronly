<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
</head>
<body>
	<h1>Admin Login</h1>
	<form action="/" method="POST">
		@csrf
		Email:<input type="email" name="email">
		Password:<input type="password" name="password">
		<button type="submit" value="submit">submit</button>
	</form>
</body>
</html>