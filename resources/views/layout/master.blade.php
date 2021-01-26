<!DOCTYPE html>
<html>
@include('layout.head')
<body id="top">
	@include('layout.header')
	@include('layout.menu')
	<div id="main">
		@include($template)
	</div>
	@include('layout.footer')
</body>
</html>