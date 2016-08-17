<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<link rel="stylesheet" href=" {{ asset('css/main.css') }} ">
</head>
<body id="register">
	<h1>LOGIN</h1>

	{{ Form::open(array('url' => 'login')) }}

		{{ Form::label('username', 'Username') }}
		{{ Form::text('username') }}

		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}
		
		{{ Form::submit('Log In') }}

	{{ Form::close() }}

</body>
</html>