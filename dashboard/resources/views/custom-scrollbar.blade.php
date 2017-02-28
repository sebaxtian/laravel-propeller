@extends('layouts.master')

@section('include-styles')
<!-- Custom Scrollbar css -->
<link rel="stylesheet" type="text/css" href="{{ asset('pmd/components/custom-scrollbar/css/jquery.mCustomScrollbar.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('pmd/components/custom-scrollbar/css/pmd-scrollbar.css') }}" />
@endsection

@section('content')
<!--Custom Scroll -->
<div class="pmd-content pmd-content-custom" id="content"> 	
	<div class="container-fluid">
	
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Custom Scrollbar</span>
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="{{ route('home') }}">Dashboard</a></li>
		  <li class="active">Custom Scrollbar</li>
		</ol><!--breadcrum end-->
		
		<!--component header -->
		<div class="componant-title-bg"> 
			<p class="lead">Custom Scrollbar is used to get rid of browser default scroll bar by utilizing jQuery UI, the feature-rich jQuery Custom Scrollbar plugin. It allows you to customize scrollbars exactly 
			as you need them. It works on all major browsers (incl. IE 10, 9, 8, &amp; 7) and on iOS and Android. It features vertical/horizontal scrolling, mouse-wheel support, scroll easing, adjustable scrollbar 
			height/width and more.</p>
			<p class="lead">For more options and documentation, visit : <a href="http://manos.malihu.gr/jquery-custom-content-scroller/" target="_blank">jQuery custom content scroller</a></p>
		</div> <!--component header end -->
		
		<!-- custom scrollbars -->
		<section class="row component-section">
			
			<!-- custom scrollbar title and description -->
			<div class="col-md-3">
				<div id="default">
					<h2>Custom Scrollbar</h2>
				</div>
				<p>Initialize custom Scrollbar by adding <code>.pmd-scrollbar .mCustomScrollbar</code> to the content wrapping divison. For using multiple custom scrollbar, use different IDs - <code>#content-(id number)</code>.
        	</div> <!-- custom scrollbar title and description end-->
			
			<!-- custom scrollbar code and example -->
			<div class="col-md-9"> 
				
				<!--Default Scrollbar -->
				<div class="component-box">
					
					<!--default scrollbar example -->
					<div class="row"> 
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<div id="content-1" class="pmd-scrollbar mCustomScrollbar">
										<h3>Default scrollbar</h3>
										<hr/>
										<p>Highly customizable custom scrollbar jQuery plugin. Features include vertical and/or horizontal scrollbar(s), adjustable scrolling momentum, mouse-wheel (via jQuery mousewheel plugin), keyboard and touch support, ready-to-use themes and customization via CSS, RTL direction support, option parameters for full control of scrollbar functionality, methods for triggering actions like scroll-to, update, destroy etc., user-defined callbacks and more.</p>
										<p>Get started by downloading the archive which contains the plugin files (and a large amount of HTML demos and examples). Extract and upload jquery.mCustomScrollbar.concat.min.js, jquery.mCustomScrollbar.css and mCSB_buttons.png to your web server (alternatively you can load plugin files from a CDN). </p>
										<p>The element(s) you want to add scrollbar(s) should have the typical CSS properties of an overflowed block which are a height (or max-height) value, an overflow value of auto (or hidden) and content long enough to require scrolling. For horizontal scrollbar, the element should have a width (or max-width) value set. </p>
										<hr />
										<p>Add the class <code>mCustomScrollbar</code> to any element you want to add custom scrollbar(s) with default options. Optionally, set its axis via the HTML data attribute <code>data-mcs-axis</code> (e.g. "x" for horizontal and "y" for vertical) and its theme via <code>data-mcs-theme</code>.</p>
									</div>
								</div>
							</div>
							<p class="component-desc">For Default Scroll use<code>#content-1</code></p>
						</div>
					</div> <!--default scrollbar example end -->
					
				</div> <!--Default Scrollbar end -->
				
				<!-- Hover Scrollbar -->
				<div class="component-box">
					
					<!--hover scrollbar example -->
					<div class="row"> 
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body">
									<div id="content-2" class="pmd-scrollbar mCustomScrollbar" data-mcs-theme="minimal-dark">
										<h3>Hover Please</h3>
										<hr />
										<p>Highly customizable custom scrollbar jQuery plugin. Features include vertical and/or horizontal scrollbar(s), adjustable scrolling momentum, mouse-wheel (via jQuery mousewheel plugin), keyboard and touch support, ready-to-use themes and customization via CSS, RTL direction support, option parameters for full control of scrollbar functionality, methods for triggering actions like scroll-to, update, destroy etc., user-defined callbacks and more.</p>
										<p>Get started by downloading the archive which contains the plugin files (and a large amount of HTML demos and examples). Extract and upload jquery.mCustomScrollbar.concat.min.js, jquery.mCustomScrollbar.css and mCSB_buttons.png to your web server (alternatively you can load plugin files from a CDN). </p>
										<p>The element(s) you want to add scrollbar(s) should have the typical CSS properties of an overflowed block which are a height (or max-height) value, an overflow value of auto (or hidden) and content long enough to require scrolling. For horizontal scrollbar, the element should have a width (or max-width) value set. </p>
										<hr />
										<p>Add the class <code>mCustomScrollbar</code> to any element you want to add custom scrollbar(s) with default options. Optionally, set its axis via the HTML data attribute <code>data-mcs-axis</code> (e.g. "x" for horizontal and "y" for vertical) and its theme via <code>data-mcs-theme</code>.</p>
										<hr />
										<p>End of content.</p>
									</div>
								</div>
							</div>
							<p class="component-desc">For Hover Scroll use<code>#content-2</code></p>
						</div>
					</div> <!--hover scrollbar example end -->
					
				</div> <!-- Hover Scrollbar end -->
				
				<!-- Outside Scrollbar -->
				<div class="component-box">
				
					<!-- outside scrollbar example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<div id="content-3" class="pmd-scrollbar">
										<h3>Scrollbar position outside card with buttons</h3>
										<hr />
										<p>Highly customizable custom scrollbar jQuery plugin. Features include vertical and/or horizontal scrollbar(s), adjustable scrolling momentum, mouse-wheel (via jQuery mousewheel plugin), keyboard and touch support, ready-to-use themes and customization via CSS, RTL direction support, option parameters for full control of scrollbar functionality, methods for triggering actions like scroll-to, update, destroy etc., user-defined callbacks and more.</p>
										<p>Get started by downloading the archive which contains the plugin files (and a large amount of HTML demos and examples). Extract and upload jquery.mCustomScrollbar.concat.min.js, jquery.mCustomScrollbar.css and mCSB_buttons.png to your web server (alternatively you can load plugin files from a CDN). </p>
										<p>The element(s) you want to add scrollbar(s) should have the typical CSS properties of an overflowed block which are a height (or max-height) value, an overflow value of auto (or hidden) and content long enough to require scrolling. For horizontal scrollbar, the element should have a width (or max-width) value set. </p>
										<hr />
										<p>Add the class <code>mCustomScrollbar</code> to any element you want to add custom scrollbar(s) with default options. Optionally, set its axis via the HTML data attribute <code>data-mcs-axis</code> (e.g. "x" for horizontal and "y" for vertical) and its theme via <code>data-mcs-theme</code>.</p>
										<hr />
										<p>End of content.</p>
									</div>
								</div>
							</div>
							<p class="component-desc">For Outside Scroll use<code>#content-3</code></p>
						</div>
					</div> <!-- outside scrollbar example end -->
					
				</div> <!-- Outside Scrollbar end -->
				
				<!-- Rounded Scrollbar -->
				<div class="component-box">
				
					<!-- rounded scrollbar example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-card-inverse pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<div id="content-4" class="pmd-scrollbar">
										<h3>theme: "rounded-dots" with less momentum</h3>
										<hr />
										<p>Highly customizable custom scrollbar jQuery plugin. Features include vertical and/or horizontal scrollbar(s), adjustable scrolling momentum, mouse-wheel (via jQuery mousewheel plugin), keyboard and touch support, ready-to-use themes and customization via CSS, RTL direction support, option parameters for full control of scrollbar functionality, methods for triggering actions like scroll-to, update, destroy etc., user-defined callbacks and more.</p>
										<p>Get started by downloading the archive which contains the plugin files (and a large amount of HTML demos and examples). Extract and upload jquery.mCustomScrollbar.concat.min.js, jquery.mCustomScrollbar.css and mCSB_buttons.png to your web server (alternatively you can load plugin files from a CDN). </p>
										<p>The element(s) you want to add scrollbar(s) should have the typical CSS properties of an overflowed block which are a height (or max-height) value, an overflow value of auto (or hidden) and content long enough to require scrolling. For horizontal scrollbar, the element should have a width (or max-width) value set. </p>
										<hr />
										<p>Add the class <code>mCustomScrollbar</code> to any element you want to add custom scrollbar(s) with default options. Optionally, set its axis via the HTML data attribute <code>data-mcs-axis</code> (e.g. "x" for horizontal and "y" for vertical) and its theme via <code>data-mcs-theme</code>.</p>
										<hr />
										<p>End of content.</p>
									</div>
								</div>
							</div>
							<p class="component-desc">For Rounded dots with inverse color : use<code>#content-4</code></p>
						</div>
					</div> <!-- rounded scrollbar example end -->
					
				</div> <!-- Rounded Scrollbar end -->
				
				<!-- 3D Scrollbar -->
				<div class="component-box">
				
					<!-- 3d scrollbar example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-card-inverse pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<div id="content-7" class="pmd-scrollbar">
										<h3>theme: "3d-thick"</h3>
										<hr />
										<p>Highly customizable custom scrollbar jQuery plugin. Features include vertical and/or horizontal scrollbar(s), adjustable scrolling momentum, mouse-wheel (via jQuery mousewheel plugin), keyboard and touch support, ready-to-use themes and customization via CSS, RTL direction support, option parameters for full control of scrollbar functionality, methods for triggering actions like scroll-to, update, destroy etc., user-defined callbacks and more.</p>
										<p>Get started by downloading the archive which contains the plugin files (and a large amount of HTML demos and examples). Extract and upload jquery.mCustomScrollbar.concat.min.js, jquery.mCustomScrollbar.css and mCSB_buttons.png to your web server (alternatively you can load plugin files from a CDN). </p>
										<p>The element(s) you want to add scrollbar(s) should have the typical CSS properties of an overflowed block which are a height (or max-height) value, an overflow value of auto (or hidden) and content long enough to require scrolling. For horizontal scrollbar, the element should have a width (or max-width) value set. </p>
										<hr />
										<p>Add the class <code>mCustomScrollbar</code> to any element you want to add custom scrollbar(s) with default options. Optionally, set its axis via the HTML data attribute <code>data-mcs-axis</code> (e.g. "x" for horizontal and "y" for vertical) and its theme via <code>data-mcs-theme</code>.</p>
										<hr />
										<p>End of content.</p>
									</div>
								</div>
							</div>
							<p class="component-desc">For 3d thik scroller : use<code>#content-7</code></p>
						</div>
					</div> <!-- 3d scrollbar example end -->
				</div> <!-- 3D Scrollbar end -->
				
				<!-- Snap Scrollbar -->
				<div class="component-box">
					
					<!-- Snap Scrollbar example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-card-inverse pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<div id="content-9" class="pmd-scrollbar vertical-images">
										<ul>
											<li>
												<h3>Snap scrolling to images <br />
													theme: "rounded" with buttons</h3>
												<hr>
											</li>
											<li><img src="{{ asset('pmd/components/custom-scrollbar/images/img3.jpg') }}" /></li>
											<li><img src="{{ asset('pmd/components/custom-scrollbar/images/img5.jpg') }}" /></li>
											<li><img src="{{ asset('pmd/components/custom-scrollbar/images/img4.jpg') }}" /></li>
											<li><img src="{{ asset('pmd/components/custom-scrollbar/images/img6.jpg') }}" /></li>
											<li><img src="{{ asset('pmd/components/custom-scrollbar/images/img7.jpg') }}" /></li>
											<li><img src="{{ asset('pmd/components/custom-scrollbar/images/img1.jpg') }}" /></li>
											<li><img src="{{ asset('pmd/components/custom-scrollbar/images/img2.jpg') }}" /></li>
											<li><img src="{{ asset('pmd/components/custom-scrollbar/images/img3.jpg') }}" /></li>
											<li><img src="{{ asset('pmd/components/custom-scrollbar/images/img4.jpg') }}" /></li>
											<li><img src="{{ asset('pmd/components/custom-scrollbar/images/img5.jpg') }}" /></li>
											<li><img src="{{ asset('pmd/components/custom-scrollbar/images/img6.jpg') }}" /></li>
											<li><img src="{{ asset('pmd/components/custom-scrollbar/images/img7.jpg') }}" /></li>
										</ul>
									</div>
								</div>
							</div>
							<p class="component-desc">For Snap scrolling to images : use<code>#content-9</code></p>
						</div>
					</div> <!-- Snap Scrollbar example end -->
					
				</div> <!-- Snap Scrollbar end -->
				
			</div> <!-- custom scrollbar code and example end-->
		</section> <!-- custom scrollbars end -->
		
	</div>
</div>
<!--Custom Scroll end --> 
@endsection

@section('include-scripts')
<script src="{{ asset('pmd/assets/js/jquery-1.12.2.min.js') }}"></script>
<script src="{{ asset('pmd/assets/js/bootstrap.min.js') }}"></script>
<!-- custom scrollbar plugin -->
<script type="text/javascript" language="javascript" src="{{ asset('pmd/components/custom-scrollbar/js/jquery.mCustomScrollbar.js') }}"></script>

<script>
	(function($){
		$(window).load(function(){
			$("#content").mCustomScrollbar({
				theme:"minimal"
			});
		});
	})(jQuery);
	
	(function($){
		$(window).load(function(){
			$("#content-3").mCustomScrollbar({
				scrollButtons:{enable:true},
				theme:"dark-thick",
				scrollbarPosition:"outside"
			});
		});
	})(jQuery);
	
	(function($){
		$(window).load(function(){
			$("#content-4").mCustomScrollbar({
				theme:"rounded-dots",
				scrollInertia:400
			});
		});
	})(jQuery);
	
	(function($){
		$(window).load(function(){
			$("#content-7").mCustomScrollbar({
				scrollButtons:{enable:true},
				theme:"3d-thick"
			});
		});
	})(jQuery);
	
	(function($){
		$(window).load(function(){
			$("#content-9").mCustomScrollbar({
				scrollButtons:{enable:true,scrollType:"stepped"},
				keyboard:{scrollType:"stepped"},
				mouseWheel:{scrollAmount:188},
				theme:"rounded-light",
				autoExpandScrollbar:true,
				snapAmount:188,
				snapOffset:65
			});
		});
	})(jQuery);
</script>
@endsection
