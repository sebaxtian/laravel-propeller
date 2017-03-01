@extends('layouts.master')

@section('include-styles')
<!-- Select2 css-->
<link rel="stylesheet" type="text/css" href="{{ asset('pmd/components/select2/css/select2.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('pmd/components/select2/css/select2-bootstrap.css') }}" />
<!-- Propeller select2 css-->
<link rel="stylesheet" type="text/css" href="{{ asset('pmd/components/select2/css/pmd-select2.css') }}" />
@endsection

@section('content')
<!--Form-->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	

	<div class="container-fluid">
	
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Select2</span>
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="{{ route('home') }}">Dashboard</a></li>
		  <li class="active">Select2</li>
		</ol><!--breadcrum end-->
		
		<!--component header -->
		<div class="componant-title-bg"> 
			<p class="lead">The Select2 widget provides a styleable select element replacement. It acts as a proxy back to the original select element, controlling its state for form submission or serialization.
			It duplicates and extends the functionality of a native HTML select element to overcome the limitations of the native control.</p>
			<p class="lead">We have used Select2 plugin as a reference which we have then customized based on our Propeller theme.</p>
			<p class="lead">For more options and documentation, visit : <a href="http://select2.github.io/" target="_blank">Select2</a></p>
		</div><!--end component header-->
		
		<!-- Selectbox -->
		<section class="row component-section">
		
			<!-- selectbox title and description -->
			<div class="col-md-3">
				<div id="selectbox">
					<h2>Propeller Select2</h2>
				</div>
				<p>To create an enhanced simple select, add <code>.pmd-select2</code> to the select tag.</p>
			</div> <!-- selectbox title and description end-->
			
			<!-- selectbox code and example -->
			<div class="col-md-9">
				<div class="component-box">
				
					<!-- selectbox example -->
					<div class="row toggle-button-custom">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<!--Simple select -->
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label>Simple Select</label>
										<select class="select-simple form-control pmd-select2">
											<!--<option></option> -->
											<option>Dallas Cowboys</option>
											<option>New York Giants</option>
											<option>Philadelphia Eagles</option>
											<option>Washington Redskins</option>
											<option>Chicago Bears</option>
											<option>Detroit Lions</option>
											<option>Green Bay Packers</option>
											<option>Minnesota Vikings</option>
											<option>Arizona Cardinals</option>
											<option>St. Louis Rams</option>
											<option>San Francisco 49ers</option>
											<option>Seattle Seahawks</option>
											<option>Baltimore Ravens</option>
											<option>Cincinnati Bengals</option>
											<option>Cleveland Browns</option>
											<option>Pittsburgh Steelers</option>
											<option>Houston Texans</option>
											<option>Indianapolis Colts</option>
											<option>Jacksonville Jaguars</option>
											<option>Tennessee Titans</option>
											<option>Denver Broncos</option>
											<option>Kansas City Chiefs</option>
											<option>Oakland Raiders</option>
											<option>San Diego Chargers</option>
										</select>
									</div>
									
								</div>
							</div>
							<p class="component-desc">Propeller Simple select</p>
						</div>
					</div> <!-- selectbox example end-->
				</div>
                
                <div class="component-box">
				
					<!-- selectbox example -->
					<div class="row toggle-button-custom">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									
									<!--Simple Select with Search-->
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label>Simple Select with Search</label>
										<select class="select-with-search pmd-select2 form-control">
											<!--<option></option> -->
											<option>Dallas Cowboys</option>
											<option>New York Giants</option>
											<option>Philadelphia Eagles</option>
											<option>Washington Redskins</option>
											<option>Chicago Bears</option>
											<option>Detroit Lions</option>
											<option>Green Bay Packers</option>
											<option>Minnesota Vikings</option>
											<option>Arizona Cardinals</option>
											<option>St. Louis Rams</option>
											<option>San Francisco 49ers</option>
											<option>Seattle Seahawks</option>
											<option>Baltimore Ravens</option>
											<option>Cincinnati Bengals</option>
											<option>Cleveland Browns</option>
											<option>Pittsburgh Steelers</option>
											<option>Houston Texans</option>
											<option>Indianapolis Colts</option>
											<option>Jacksonville Jaguars</option>
											<option>Tennessee Titans</option>
											<option>Denver Broncos</option>
											<option>Kansas City Chiefs</option>
											<option>Oakland Raiders</option>
											<option>San Diego Chargers</option>
										</select>
									</div>
								</div>
							</div>
							<p class="component-desc">Simple select2 with search</p>
						</div>
					</div> <!-- selectbox example end-->
				</div>
			</div> <!-- selectbox code and example end-->
		</section>	

		<section class="row component-section">

			<!-- selectbox title and description -->
			<div class="col-md-3">
				<div id="selectbox">
					<h2>Select2 with Multiple Tags</h2>
				</div>
				<p>For selectbox with multiple tags add <code>.pmd-select2-tags</code> to the <code>select</code> tag.</p>
			</div> <!-- selectbox title and description end-->
		
			<div class="col-md-9">	
				<div class="component-box">
				
				<div class="row toggle-button-custom">
					<div class="col-md-12">
						<div class="pmd-card pmd-z-depth pmd-card-custom-form">
							<div class="pmd-card-body"> 
								<!--Select Multiple Tags -->
								<div class="form-group pmd-textfield pmd-textfield-floating-label">
									<label>Select Multiple Tags</label>
									<select class="form-control select-tags pmd-select2-tags" multiple>
										<option>Dallas Cowboys</option>
										<option>New York Giants</option>
										<option>Philadelphia Eagles</option>
										<option>Washington Redskins</option>
										<option>Chicago Bears</option>
										<option>Detroit Lions</option>
										<option>Green Bay Packers</option>
										<option>Minnesota Vikings</option>
										<option>Arizona Cardinals</option>
										<option>St. Louis Rams</option>
										<option>San Francisco 49ers</option>
										<option>Seattle Seahawks</option>
										<option>Baltimore Ravens</option>
										<option>Cincinnati Bengals</option>
										<option>Cleveland Browns</option>
										<option>Pittsburgh Steelers</option>
										<option>Houston Texans</option>
										<option>Indianapolis Colts</option>
										<option>Jacksonville Jaguars</option>
										<option>Tennessee Titans</option>
										<option>Denver Broncos</option>
										<option>Kansas City Chiefs</option>
										<option>Oakland Raiders</option>
										<option>San Diego Chargers</option>
									</select>
								</div>
								
							</div>
						</div>
						<p class="component-desc">Select Multiple Tags and Select &amp; Add Multiple Tags</p>
					</div>
				</div>
			</div>
			</div>
	
		</section> <!-- Selectbox end --> 		

		<section class="row component-section">

			<!-- selectbox title and description -->
			<div class="col-md-3">
				<div id="select2-add-tag">
					<h2>Select2 with Search and Custom Tags</h2>
				</div>
				<p>To create custom multiple tags add <code>.pmd-select2-tags</code> to the select tag.</p>
			</div> <!-- selectbox title and description end-->
		
			<div class="col-md-9">	
				<div class="component-box">
				
				<div class="row toggle-button-custom">
					<div class="col-md-12">
						<div class="pmd-card pmd-z-depth pmd-card-custom-form">
							<div class="pmd-card-body"> 
								
								<!--Select &amp; Add Multiple Tags -->
								<div class="form-group pmd-textfield pmd-textfield-floating-label">
									<label>Select &amp; Add Multiple Tags</label>
									<select class="form-control select-add-tags pmd-select2-tags" multiple>
										<option>Dallas Cowboys</option>
										<option>New York Giants</option>
										<option>Philadelphia Eagles</option>
										<option>Washington Redskins</option>
										<option>Chicago Bears</option>
										<option>Detroit Lions</option>
										<option>Green Bay Packers</option>
										<option>Minnesota Vikings</option>
										<option>Arizona Cardinals</option>
										<option>St. Louis Rams</option>
										<option>San Francisco 49ers</option>
										<option>Seattle Seahawks</option>
										<option>Baltimore Ravens</option>
										<option>Cincinnati Bengals</option>
										<option>Cleveland Browns</option>
										<option>Pittsburgh Steelers</option>
										<option>Houston Texans</option>
										<option>Indianapolis Colts</option>
										<option>Jacksonville Jaguars</option>
										<option>Tennessee Titans</option>
										<option>Denver Broncos</option>
										<option>Kansas City Chiefs</option>
										<option>Oakland Raiders</option>
										<option>San Diego Chargers</option>
									</select>
								</div>
							</div>
						</div>
						<p class="component-desc">Select Multiple Tags and Select &amp; Add Multiple Tags</p>
					</div>
				</div>
			</div>
			</div>
	
		</section> <!-- Selectbox end --> 		
		 
	</div> <!--container end --> 
	
</div>
<!--Form-->
@endsection

@section('include-scripts')
<!-- Select2 js-->
<script type="text/javascript" src="{{ asset('pmd/components/select2/js/select2.full.js') }}"></script>

<!-- Propeller Select2 -->
<script type="text/javascript">
	$(document).ready(function() {
		// Simple Selectbox -->
		$(".select-simple").select2({
			theme: "bootstrap",
			minimumResultsForSearch: Infinity,
		});
		// Selectbox with search -->
		$(".select-with-search").select2({
			theme: "bootstrap"
		});
		// Select Multiple Tags -->
		$(".select-tags").select2({
			tags: false,
			theme: "bootstrap",
		});
		// Select & Add Multiple Tags
		$(".select-add-tags").select2({
			tags: true,
			theme: "bootstrap",
		});
	});
</script>
<script type="text/javascript" src="{{ asset('pmd/components/select2/js/pmd-select2.js') }}"></script>
@endsection
