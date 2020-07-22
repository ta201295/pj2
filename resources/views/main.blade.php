<!DOCTYPE html>
<html lang="en">
	<head>
		@include('partials.head')
	</head>

	<body class="host_version">

		@include('partials.modal')
	
		@include('partials.loader')
		
		@include('partials.navbar')
	
		@yield('content')
		
		@include('partials.footer')

		<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

		@include('partials.javascript')
	
		@yield('scripts')
	</body>
</html>