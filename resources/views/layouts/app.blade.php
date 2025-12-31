<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>@yield('title', 'Cyber-IT - IT Solutions Services')</title>
	<meta name="description" content="@yield('description', '')">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('cyber-it/assets/images/fav-icon/icon.png') }}">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/bootstrap.min.css') }}" type="text/css" media="all" />
	<!-- Jquery UI Tab css -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/jquery-ui.min.css') }}" type="text/css" media="all" >
	<!-- Uikit  CSS -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/uikit.min.css') }}" type="text/css" media="all" />
	<!-- Mobile-Menu -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/mobile-menu.css') }}" type="text/css" media="all" />
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/owl.carousel.min.css') }}" type="text/css" media="all" />
	<!-- nivo-slider CSS -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/nivo-slider.css') }}" type="text/css" media="all" />
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/animate.css') }}" type="text/css" media="all" />
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/animated-text.css') }}" type="text/css" media="all" />
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/all.min.css') }}" type="text/css" media="all" />
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/flaticon.css') }}" type="text/css" media="all" />
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/theme-default.css') }}" type="text/css" media="all" />
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/meanmenu.min.css') }}" type="text/css" media="all" />
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="{{ asset('cyber-it/style.css') }}" type="text/css" media="all" />
	<!-- transitions CSS -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/owl.transitions.css') }}" type="text/css" media="all" />
	<!-- venobox CSS -->
	<link rel="stylesheet" href="{{ asset('cyber-it/venobox/venobox.css') }}" type="text/css" media="all" />
	<!-- widget CSS -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/widget.css') }}" type="text/css" media="all" />
	<!-- Swiper Slider -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/swiper.min.css') }}" type="text/css" media="all">
	<!--Animated Headline-->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/jquery.animatedheadline.css') }}" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{ asset('cyber-it/assets/css/responsive.css') }}" type="text/css" media="all" />
	<!--Simple Line Icon-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">

	<!-- modernizr js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>

	@stack('styles')
</head>
<body>

	<!-- Loder Start -->
	<div class="loader-wrapper">
	  <div class="loader"></div>
	  <div class="loder-section left-section"></div>
	  <div class="loder-section right-section"></div>
	</div>
	<!-- Loder End -->

	@include('partials.header')

	@yield('content')

	@include('partials.footer')

	<!-----TO-TOP BUTTON ----->
	<!--===================================================-->
	<button id="to-top">
		<i class="fa fa-angle-up"></i>
	</button>

	<!-- jquery js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/vendor/jquery-3.2.1.min.js') }}"></script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/bootstrap.min.js') }}"></script>
	<!-- Mobile-Menu -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/mobile-menu.js') }}"></script>
	<!-- carousel js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/owl.carousel.min.js') }}"></script>
	<!-- counterup js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/jquery.counterup.min.js') }}"></script>
	<!-- circle progress js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/circle-progress.min.js') }}"></script>
	<!-- waypoints js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/waypoints.min.js') }}"></script>
	<!-- appear js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/jquery.appear.js') }}"></script>
	<!-- wow js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/wow.min.js') }}"></script>
	<!-- imagesloaded js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/imagesloaded.pkgd.min.js') }}"></script>
	<!-- venobox js -->
	<script type="text/javascript" src="{{ asset('cyber-it/venobox/venobox.js') }}"></script>
	<!-- ajax mail js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/ajax-mail.js') }}"></script>
	<!--  animated-text js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/animated-text.js') }}"></script>
	<!-- venobox min js -->
	<script type="text/javascript" src="{{ asset('cyber-it/venobox/venobox.min.js') }}"></script>
	<!-- isotope js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/isotope.pkgd.min.js') }}"></script>
	<!-- jquery nivo slider pack js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/jquery.nivo.slider.pack.js') }}"></script>
	<!-- jquery meanmenu js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/jquery.meanmenu.js') }}"></script>
	<!-- jquery scrollup js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/jquery.scrollUp.js') }}"></script>
	<!-- uikit js -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/uikit.min.js') }}"></script>
	<!-- Jquery UI Tab JS -->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/jquery-ui.min.js') }}"></script>
	<!--Swiper Slider-->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/swiper.min.js') }}"></script>
	<!--Animated Headline-->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/jquery.animatedheadline.min.js') }}"></script>
	<!--theme js-->
	<script type="text/javascript" src="{{ asset('cyber-it/assets/js/theme.js') }}"></script>

	@stack('scripts')
</body>
</html>


