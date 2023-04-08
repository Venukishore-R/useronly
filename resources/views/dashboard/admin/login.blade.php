<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<style type="text/css">
		
		.invalid-feedback{
			color: red;
		}
	</style>
</head>
<body>
	<h1>Admin Login</h1>
	<form action="{{ route('admin.check') }}" method="POST">
		@csrf

		Email:<input type="email" name="email">
		@error('email')
        <span class="invalid-feedback" role="alert">
        	<strong>{{ $message }}</strong>
        </span>
        @enderror

<br><br>

		Password:<input type="password" name="password">
		@error('password')
        <span class="invalid-feedback" role="alert">
        	<strong>{{ $message }}</strong>
        </span>
        @enderror

<br><br>

		<button type="submit" value="submit">submit</button>
	</form>
</body>
</html>