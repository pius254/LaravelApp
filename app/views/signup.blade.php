 <!doctype html>
 <html lang="en">
   <head>
	 	<meta charset="UTF-8">
	 	<title>Sign-up: A Laravel Form</title>
	 	<link rel="stylesheet" href=" {{ asset('css/main.css') }} ">
 	</head>
 	<body id="signup">
 		<h1>TECH LETTER SIGN UP</h1>
 		{{ Form::open(array('url' => 'thanks')) }}
			{{ Form::label('email', 'Email Address') }}
			{{ Form::text('email') }}

			{{ Form::label('os', 'Operating system') }}
			{{ Form::select('os', array(
				'linux' => 'Linux',
				'mac' => 'Mac OS X',
				'windows' => 'Windows'
			)) }}

		{{ Form::label('comment', 'Comments') }}
		{{ Form::textarea('comment', '', array('placeholder' => 'What are Your Interests?')) }}

		{{ Form::checkbox('agree', 'yes', false) }}
		{{ Form::label('agree', 'I agree to your terms of service.') }}

		{{ Form::submit('Sign Up') }}

 		{{ Form::close() }}
 		
 	</body>
 </html>