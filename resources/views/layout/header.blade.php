<!-- Banner -->
			<!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
			@if($template=='layout.template-home')
				<section id="banner" data-video="">
					<div class="inner">
						<header>
							<h1>{{$banner->bn_titulo}}</h1>
							<p>{{$banner->bn_descripcion}}</p><br />
							<img id="logo_banner" src="{{$banner->bn_imagen}}">
						</header>
						<br>
						<a href="#main" class="more">Learn More</a>
					</div>
				</section>
				@endif
				<div class="menu">
					<a href="#menu" class="btn_menu"><span class="icon fa-bars"></span>Menu</a>
				</div>
