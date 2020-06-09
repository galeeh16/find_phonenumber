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
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">
		
		@include('layouts.header')

		{{-- Main Sidebar Container --}}
		<aside class="main-sidebar sidebar-dark-purple elevation-4" style="background-color: #212029;">
			{{-- Brand Logo --}}
			<a href="{{ url('/') }}" class="brand-link">
				<img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
				style="opacity: .8">
				<span class="brand-text font-weight-light">Find Phonenumber</span>
			</a>

			{{-- Sidebar --}}
			<div class="sidebar">
			{{-- Sidebar user panel (optional) --}}
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="{{ asset('adminlte/dist/img/avatar2.png') }}" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">{{ auth()->user()->name }}</a>
					</div>
				</div>

				{{-- Sidebar Menu --}}
				@include('layouts.sidebar')
				{{-- Sidebar-menu --}}
			</div>
		</aside>
	<div class="content-wrapper">


		{{-- Main content --}}
		<section class="content">
			<div class="container-fluid">
				@yield('content')
			</div>
		</section>
		{{-- End main content --}}
	</div>
	{{-- End content-wrapper --}}

	{{-- Control Sidebar --}}
	<aside class="control-sidebar control-sidebar-dark">
		{{-- Control sidebar content goes here --}}
	</aside>
	{{-- End control-sidebar --}}

	{{-- Main Footer --}}
	<footer class="main-footer">
		<strong>Copyright &copy; 2014-2019 <a href="#">Find Phonenumber</a>.</strong>
		All rights reserved.
	</footer>
	</div>
	{{-- End wrapper --}}

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
	{{-- ChartJS --}}
	{{-- <script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script> --}}

	{{-- PAGE SCRIPTS --}}
	{{-- <script src="{{ asset('adminlte/dist/js/pages/dashboard2.js') }}"></script> --}}
</body>
</html>
