<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/jquery-ui/jquery-ui.css')}}">

    @yield('moreCss')
</head>
<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

    <script src="{{asset('js/jquery-3.6.0.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{asset('js/aos.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
	<script>
		window.addEventListener('load', () => {
			AOS.init({
			duration: 1000,
			easing: 'ease-in-out',
			once: true,
			mirror: false
			})
		});

		var preloader = $('#preloader');
		$(window).on('load', function () {
			preloader.fadeOut('slow', function () { $(this).remove(); });
		});
	</script>
	@yield('moreJs')
</body>
</html>