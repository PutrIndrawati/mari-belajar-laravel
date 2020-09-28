<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>@yield('title')</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap');
		.navbar{
			background-color: #d9bf77;
		}
		.hzz {
			font-family: 'Cinzel';
			margin-right: 10px;
			margin-top: 5px;
		}
		.display-1{
			margin-top: 5%;
		}
	</style>
</head>
<body>
	@include('master._navigasi')
	@yield('content')
</body>
</html>