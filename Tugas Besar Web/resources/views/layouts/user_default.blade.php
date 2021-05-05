<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('asset/img/fav.png')}}">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>CATHUB</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="asset/css/detail.css">
    <!-- Styles -->
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	{{-- style --}}
	@stack('before-style')
	@include('includes.styles')
	@stack('after-style')
</head>
<body>
	{{-- header --}}
	@include('includes.home_navbar')

	<div class="content">
		{{-- content --}}
		@yield('content')
	</div>

	<!-- start footer Area -->
	@include('includes.home_footer')
	<!-- End footer Area -->

	{{-- script --}}
	@stack('before-script')
	@include('includes.scripts')
	@stack('after-script')

</body>
</html>
