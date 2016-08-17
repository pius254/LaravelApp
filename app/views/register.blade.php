<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<link rel="stylesheet" href=" {{ asset('css/main.css') }} ">
</head>
<body id="register">
	<h1>REGISTRATION FORM</h1>

	{{ Form::open(array('url' => 'register')) }}	
		{{ Form::label('email', 'Email Address') }}
		{{ Form::email('email') }}

		{{ Form::label('username', 'Username') }}
		{{ Form::text('username') }}

		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}
		
		{{ Form::submit('Sign Up') }}

	{{ Form::close() }}
	
</body>
</html>