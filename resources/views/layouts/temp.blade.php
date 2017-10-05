<!DOCTYPE html>
<html lang='en'>
<head>
	<title>@yield('title')</title>
	@yield('css')
</head>
<body>
	<main>
		<nav role='banner'>
			<a href="">Serial Number Registration</a>
			<a href="">Product Register</a>
			<a href="">Search</a>
			<a href="">Old Serial Search</a>
		</nav>

		<h1 id='title'>@yield('title')</h1>

		@yield('content')

	</main>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	@yield('js')
</body>
</html>
