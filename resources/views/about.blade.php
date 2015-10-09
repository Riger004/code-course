<html>
<head>
	<title>About page</title>
</head>
<body>
	<p>{{ $name }}</p>
	<p>{{ $id }}</p>
	<p>{{ $phone }}</p>
	@if ($homeTown)
		{{ $homeTown }}
	@endif
</body>
</html>