<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>{{ $title ?? 'Find Phonenumber' }}</title>

	{{-- Font Awesome Icons --}}
	<link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
	{{-- overlayScrollbars --}}
	<link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
	{{-- Theme style --}}
	<link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
	{{-- Google Font: Nunito --}}
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('adminlte/mycss/custom.css') }}">
</head>
<body style="background-color: #e3e7eb;">
    
    @yield('content')

    {{-- REQUIRED SCRIPTS --}}
	{{-- jQuery --}}
	<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
	{{-- Bootstrap --}}
	<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	{{-- overlayScrollbars --}}
	<script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
	{{-- AdminLTE App --}}
	<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>

	{{-- OPTIONAL SCRIPTS --}}
	<script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>

	{{-- PAGE PLUGINS --}}
	{{-- jQuery Mapael --}}
	<script src="{{ asset('adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js') }}""></script>
	<script src="{{ asset('adminlte/plugins/raphael/raphael.min.js') }}"></script>
	<script src="{{ asset('adminlte/plugins/jquery-mapael/jquery.mapael.min.js') }}""></script>
	<script src="{{ asset('adminlte/plugins/jquery-mapael/maps/usa_states.min.js') }}""></script>

	@yield('script')
</body>
</html>