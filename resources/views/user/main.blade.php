<!DOCTYPE html>
<html lang="en">
	<head>
		@include('user.partials.head')
	</head>

	<body class="host_version">

		@include('user.partials.modal')
	
		@include('user.partials.loader')

		@include('user.partials.navbar')
	
		@yield('content')
		
		@include('user.partials.footer')

		<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

		@include('user.partials.javascript')
	
	</body>
</html>