@extends('layouts.master')

@section('include-styles')
@endsection

@section('content')
<!-- Shadow -->
<div class="pmd-content pmd-content-custom" id="content">
	
	<div class="container-fluid">
	
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Shadow</span>
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="{{ route('home') }}">Dashboard</a></li>
		  <li class="active">Shadow</li>
		</ol><!--breadcrum end-->
		
		<!-- component header -->
		<div class="componant-title-bg"> 
			<p class="lead">In material design, everything should have a certain <code>pmd-z-depth</code> that determines how far raised or close to the page the element is.</p>
		</div> <!-- component header end-->
		
		<!-- Shadow types -->
		<section class="row component-section">
			
			<!-- shadow types title and description -->
			<div class="col-md-3">
				<div id="types">
					<h2>Types</h2>
				</div>
				<p>You can easily apply this shadow effect by adding a <code>.pmd-z-depth</code> to an HTML tag. Alternatively you can extend any of these shadows using <code>.pmd-z-depth-1</code>, <code>.pmd-z-depth-2</code> and more.</p>
			</div> <!-- shadow types title and description end-->
			
			<!--Shadow type code and example -->
			<div class="col-md-9">
				<div class="component-box">
					<!-- Shadow varients -->
					<div class="pmd-card-body card-shadow">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-xs-6"> 
								<!--pmd-z-depth-->
								<div class="pmd-card pmd-z-depth shadow-demo">
									<div class="pmd-card-body">pmd-z-depth</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-xs-6"> 
								<!--pmd-z-depth-1-->
								<div class="pmd-card pmd-z-depth-1 shadow-demo">
									<div class="pmd-card-body">pmd-z-depth-1</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-xs-6"> 
								<!--pmd-z-depth-2-->
								<div class="pmd-card pmd-z-depth-2 shadow-demo">
									<div class="pmd-card-body">pmd-z-depth-2</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-xs-6"> 
								<!--pmd-z-depth-3-->
								<div class="pmd-card pmd-z-depth-3 shadow-demo">
									<div class="pmd-card-body">pmd-z-depth-3</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-xs-6"> 
								<!--pmd-z-depth-4-->
								<div class="pmd-card pmd-z-depth-4 shadow-demo">
									<div class="pmd-card-body">pmd-z-depth-4</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-xs-6"> 
								<!--pmd-z-depth-5-->
								<div class="pmd-card pmd-z-depth-5 shadow-demo">
									<div class="pmd-card-body">pmd-z-depth-5</div>
								</div>
							</div>
						</div>
					</div> <!-- shadow examples end -->
				</div>
			</div> <!--Shadow type code and example end -->
			
		</section> <!--Shadow types end -->
		 
	</div>
</div>
<!-- Shadow constructor end --> 
@endsection

@section('include-scripts')
@endsection
