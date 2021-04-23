<!DOCTYPE html>
<html>
<head>
	<title>
		Mảng
	</title>
</head>
<body>
<h1>list</h1>
	<ul>
	@foreach ($mang as $m) 
		<li> {{$m}} </li>
	@endforeach 
</ul>
</html>