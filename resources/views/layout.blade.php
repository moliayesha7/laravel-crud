<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bootstrap Assets</title>
	<link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('public/assets/css/responsive.css')}}">
</head>
<body>
	
	
	@yield('main-content')


	<!-- JS FILES  -->
	<script src="{{asset('public/assets/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('public/assets/js/popper.min.js')}}"></script>
	<script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/assets/js/custom.js')}}"></script>
</body>
</html>
