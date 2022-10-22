<!doctype html>

<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login</title>

	<!-- CSS -->
	
	<link rel="stylesheet" href="{{asset('loginns/css/reset.css')}}">
	<link rel="stylesheet" href="{{asset('loginns/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('loginns/css/styles.css')}}">
	
</head>

	<!-- Main HTML -->
	
<body>
	
	<!-- Begin Page Content -->
	
	<div id="container">
		
    <form method="POST" action="{{route('login')}}">
        @csrf
		
		<label for="username">Student|Staff Email:</label>
		
        <input id="password" type="name" class="form-control @error('password') is-invalid @enderror" name="email" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
		
		<label for="username">Password:</label>
		
		<p><a href="#">Forgot your password?</a>
		
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
		
		<div id="lower">
		
		<input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
		
		<input type="submit" value="Login">
		
		</div>
		
		</form>
		<a href="/register">Register</a>
		
	</div>
	
	
	<!-- End Page Content -->
	
</body>

</html>
	
	
	
	
	
		
	