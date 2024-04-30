<!DOCTYPE html>

<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="{{ asset('/front/images/coding.png') }}" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="{{ asset('/front/plugins/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/plugins/font-awesome/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/plugins/font-awesome/brands.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/plugins/font-awesome/solid.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- owl.carousel -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /> -->
	<link rel="stylesheet" href="{{ asset('/front/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="{{ asset('/front/css/style.css') }}">
	<link href="{{ asset('/front/css/colorswitcher.css') }}" rel="stylesheet">
  
</head>

<body>

<!-- navigation -->
@include('common.header') 
<!-- /navigation -->

<!-- main section -->
<main>
    @yield('content')
</main>  
 
<!-- /main section -->

<!-- footer -->
@include('common.footer') 
<!-- /footer -->

<!-- # JS Plugins -->
<script src="{{ asset('/front/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/front/plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<!--owl-carousel-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:15,
		nav:false,
		autoplay:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			}
		}
	})
</script>
<!-- counter js -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('.counter').counterUp({
      delay: 10,
      time: 2000
    });
  });
</script>

<!-- Main Script -->
<script src="{{ asset('front/js/script.js') }}"></script>
<!-- <script src="http://127.0.0.1:8000/front/js/app.js"></script> -->
<script src="{{asset('front/js/app.js')}}"></script>
<script>
	// switcher button color theme
	document.querySelector('.switcher-btn').onclick = () => {
		document.querySelector('.color-switcher').classList.toggle('active');

		let themeButtons = document.querySelectorAll('.theme-buttons');

		themeButtons.forEach(color =>{
			color.addEventListener('click', () =>{
				let dataColor = color.getAttribute('data-color');
				document.querySelector(':root').style.setProperty('--main-color', dataColor);
				document.querySelector(':root').style.setProperty('--bg-color', dataColor);
				document.querySelector(':root').style.setProperty('--sky-light', dataColor);
				document.querySelector(':root').style.setProperty('--sky-dark', dataColor);
				document.querySelector(':root').style.setProperty('--dark-light', dataColor);
				document.querySelector(':root').style.setProperty('--linear-btn', dataColor);
			});
		});
	}
</script>


</body>
</html>