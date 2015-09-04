<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>My Default Admin Template</title>
{{ HTML::style('css/admin.css') }}
</head>

<body>

<header>
	<div class="container">
		<h1>Admin Title</h1>
	</div>
</header>

<main class="container">
	@yield('content')
</main>

<footer>
	<div class="container">
		&copy; {{ date('Y') }} Slowknight
	</div>
</footer>

</body>

</html>