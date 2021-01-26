<!DOCTYPE html>
<html>
@include('layout.head')
<body id="top">
	@include('layout.header')
	@include('administracion.menu')
	<div id="main">
		@include($template)
	</div>
	@include('layout.footer')
</body>
</html>