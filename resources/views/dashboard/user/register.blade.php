<!DOCTYPE html>
<html>
<head>
	<title>User Register</title>

	<style type="text/css">
		
		.invalid-feedback{
			color: red;
		}
	</style>
</head>
<body>
	<h1>User Register</h1>
	<form action="{{route('user.store')}}" method="POST">
		@csrf
		Name:<input type="text" name="name">
		@error('name')
        <span class="invalid-feedback" role="alert">
        	<strong>{{ $message }}</strong>
        </span>
        @enderror
        
        <br><br>
		
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
		
		Confirm:<input type="password" name="cpassword">
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