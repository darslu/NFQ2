<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> @yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<style>
    .bg {
        /* The image used */
        background-image: url("christmas.jpg"); 
        /* Full height */
        height: 100%; 

        /*Center and scale the image nicely */
        background-position: contain;
        background-repeat: no-repeat;
        background-size: cover;   
    }
button {
  height: 50px;
  width: 100px;
  position: absolute;
  margin: -25px 0 0 -50px; //half height and half width
  left: 50%;
  top: 50%;
}



</style>


<body class="bg">
	@include('partials.header')
	<div class="container d-flex justify-content-center" style="height: 600px;">
		@yield('content')
	</div>

@yield('script')
</body>
</html>