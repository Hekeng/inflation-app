<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Proba</title>
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<script type="module" src="{{ asset('js/main.js') }}"></script>
    @stack('page_styles')
</head>

<body

	data-auth-status="guest"
	data-auth-overlay="closed"
	data-auth-overlay-tab="authorization"
	data-sidebar-status="closed"
	data-switch-tab-buttons = ""
	data-sidebar-dashboard-status="closed"

	data-sidebar-nav-buttons-status="open"
>

@include('partials.header')


<div class="content-wrapper">

	@include('partials.sidebar')

	<main class="main_window">

		<div class="content">
            @yield('main_content')


            @include('partials.auth')


			<div class="auth-spacer"></div>
            @include('partials.sidebarControlButton')

		</div>
	</main>

</div>
