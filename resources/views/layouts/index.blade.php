<!DOCTYPE html>
<html lang="fr">
    <head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Interior</title>
        {{-- BOOSTRAP --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href={{ asset("css/linearicons.css") }}>
			<link rel="stylesheet" href={{ asset("css/font-awesome.min.css") }}>
			<link rel="stylesheet" href={{ asset("css/bootstrap.css") }}>
			<link rel="stylesheet" href={{ asset("css/magnific-popup.css") }}>
			<link rel="stylesheet" href={{ asset("css/nice-select.css") }}>
			<link rel="stylesheet" href={{ asset("css/animate.min.css") }}>
			<link rel="stylesheet" href={{ asset("css/owl.carousel.css") }}>
			<link rel="stylesheet" href={{ asset("css/main.css") }}>
		</head>
<body>
@yield('content')
@include('partials.navigation')
<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src={{ asset("js/vendor/bootstrap.min.js") }}></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src={{ asset("js/easing.min.js") }}></script>
			<script src={{ asset("js/hoverIntent.js") }}></script>
			<script src={{ asset("js/superfish.min.js") }}></script>
			<script src={{ asset("js/jquery.ajaxchimp.min.js") }}></script>
			<script src={{ asset("js/jquery.magnific-popup.min.js") }}></script>
			<script src={{ asset("js/owl.carousel.min.js") }}></script>
			<script src={{ asset("js/jquery.nice-select.min.js") }}></script>
			<script src={{ asset("js/mail-script.js") }}></script>
			<script src={{ asset("js/main.js") }}></script>
            @include('partials.footer')
</body>
</html>
