<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Du lịch An Bình</title>
	<base href="{{asset('')}}">
	<!--css -->
	<link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styles/css/style.css">
	

	<!--script -->
	<script type="text/javascript" sr="styles/js/jquery-3.2.1.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	    $("#slideshow > div:gt(0)").hide();

		setInterval(function() {
		  $('#slideshow > div:first')
		    .fadeOut(5000)
		    .next()
		    .fadeIn(5000)
		    .end()
		    .appendTo('#slideshow');
		}, 5000);
	</script>
	</head>
<body>
	
	@include('layout.menu')
	@include('layout.header')
	<div class="container">
		@yield('content')
	</div>
	@include('layout.footer')
</body>
</html>