@extends('layouts.master')

@section('include-styles')
@endsection

@section('content')
<!--Icons start --> 
<style>
	.icon-custom .row div {
		min-height: auto;
		padding:8px;
		font-size:14px;
		line-height:1.2;
		min-height: 94px;
	}
</style>

<div id="content" class="pmd-content">
	
    <!-- Typography  -->
	<div class="container-fluid">

		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Icons</span>
		</h1><!-- End Title -->
		
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="{{ route('home') }}">Dashboard</a></li>
		  <li class="active">Icons</li>
		</ol><!--breadcrum end-->
	
		<!--component header -->
		<div class="componant-title-bg"> 
			<p class="lead">An Icon is a small picture that represents an object or program.</p>
			<p class="lead">For providing a huge collection of unique icons we have incorporated the <a href="https://design.google.com/icons/" target="_blank">Google Material icon library.</a>
			These icons are present in the form of icon fonts which are extremely lightweight and easy to use. In order to make this library a part of your project, simply download the font kit include the web font 
			files in your template and use them as and when required.</p>
		</div> <!--component header end -->
	
		<!-- icons list-->
		<section class="row component-section">
			
			<!-- icons list title and description -->
			<div class="col-md-12">
				<div id="sizes">
					<h2>Google icons</h2>
				</div>
				<p>Propeller provides four different sizes of Google Material Icon Library - <code>.pmd-lg</code> for large, <code>.pmd-md</code> for medium, <code>.pmd-sm</code> for small, and <code>.pmd-xs</code> for extra 
				small icon.</p>
				<p>To use any of the icon you just need to add a class taking reference from the name of icon.<br><br><strong>For example:</strong> To use the 3d rotation icon, add <code><</code><code>i class="material-icons md-dark pmd-md"</code><code>></code><code>3d_rotation</code><code><</code><code>/i</code><code>></code>.</p>
			</div> <!-- icons list title and description end -->
			
			<!-- icons list code and example -->
			<div class="col-md-12">
				<div class="component-box"> 
				
					<!-- icons of different sizes -->
					<section class="row component-section">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center">
									<div class="row"> 
										<!-- Large Propeller icon -->
										<div class="col-md-3 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-lg">mood</i><br>
											<code>pmd-lg</code></div>
										<!-- Medium Propeller icon -->
										<div class="col-md-3 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">account_balance</i><br>
											<code>pmd-md</code></div>
										<!-- Small Propeller icon -->
										<div class="col-md-3 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-sm">supervisor_account</i><br>
											<code>pmd-sm</code></div>
										<!-- Extra small Propeller icon -->
										<div class="col-md-3 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-xs">add_to_queue</i><br>
											<code>pmd-xs</code></div>
									</div>
								</div>
							</div>
						</div>
	
					</section>
					<!-- icons of different sizes -->
					<section class="row">
						<div class="col-sm-6">
							<p>Inverse Default</p>
	
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center">
									<div class="row"> 
										
										<!-- Default Propeller icon -->
										<div class="col-md-6 col-sm-6 col-xs-6">
											<i class="material-icons pmd-lg md-dark">mood</i><br>
											Active
										</div>
										<!-- Default Inactive Propeller icon -->
										<div class="col-md-6 col-sm-6 col-xs-6">
											<i class="material-icons pmd-lg md-dark md-inactive">account_balance</i><br>
											Inactive
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<p>Inverse Icons</p>
	
							<div class="pmd-card pmd-z-depth pmd-card-inverse pmd-card-custom-view">
								<div class="pmd-card-body text-center">
									<div class="row"> 
									
										<!-- Inverse Propeller icon -->
										<div class="col-md-6 col-sm-6 col-xs-6">
											<i class="material-icons pmd-lg md-light">supervisor_account</i><br>
											Active
										</div>
	
										<!-- Inverse Inactive Propeller icon -->
										<div class="col-md-6 col-sm-6 col-xs-6">
											<i class="material-icons pmd-lg md-light md-inactive">add_to_queue</i><br>
											Inactive
										</div>
										
									</div>
								</div>
							</div>
						</div>
													
							
					</section> <!-- icons of different sizes end -->
				</div>
			</div>
				
		</section>
		
		<!-- icons list-->
		<section class="row component-section">
			
			<!-- icons list code and example -->
			<div class="col-md-12">
				<div class="component-box"> 
				
					
					<!-- action icons -->
					<section class="row component-section">
						<div class="col-md-12">
							<p>Action icons</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<!--row -->
									<div class="row">
	
	
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">3d_rotation</i><br/>3d rotation
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">accessibility</i><br/>accessibility
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">accessible</i><br/>accessible
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">account_balance</i><br/>account balance
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">account_balance_wallet</i><br/>account balance wallet
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">account_box</i><br/>account box
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">account_circle</i><br/>account circle
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">add_shopping_cart</i><br/>add shopping cart
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">alarm</i><br/>alarm
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">alarm_add</i><br/>alarm add
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">alarm_off</i><br/>alarm off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">alarm_on</i><br/>alarm on
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">all_out</i><br/>all out
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">android</i><br/>android
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">announcement</i><br/>announcement
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">aspect_ratio</i><br/>aspect ratio
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">assessment</i><br/>assessment
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">assignment</i><br/>assignment
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">assignment_ind</i><br/>assignment ind
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">assignment_late</i><br/>assignment late
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">assignment_return</i><br/>assignment return
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">assignment_returned</i><br/>assignment returned
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">assignment_turned_in</i><br/>assignment turned in
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">autorenew</i><br/>autorenew
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">backup</i><br/>backup
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">book</i><br/>book
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">bookmark</i><br/>bookmark
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">bookmark_border</i><br/>bookmark border
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">bug_report</i><br/>bug report
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">build</i><br/>build
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">cached</i><br/>cached
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">camera_enhance</i><br/>camera enhance
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">card_giftcard</i><br/>card giftcard
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">card_membership</i><br/>card membership
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">card_travel</i><br/>card travel
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">change_history</i><br/>change history
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">check_circle</i><br/>check circle
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">chrome_reader_mode</i><br/>chrome reader mode
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">class</i><br/>class
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">code</i><br/>code
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">compare_arrows</i><br/>compare arrows
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">copyright</i><br/>copyright
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">credit_card</i><br/>credit card
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">dashboard</i><br/>dashboard
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">date_range</i><br/>date range
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">delete</i><br/>delete
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">delete_forever</i><br/>delete forever
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">description</i><br/>description
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">dns</i><br/>dns
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">done</i><br/>done
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">done_all</i><br/>done all
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">donut_large</i><br/>donut large
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">donut_small</i><br/>donut small
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">eject</i><br/>eject
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">euro_symbol</i><br/>euro symbol
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">event</i><br/>event
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">event_seat</i><br/>event seat
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">exit_to_app</i><br/>exit to app
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">explore</i><br/>explore
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">extension</i><br/>extension
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">face</i><br/>face
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">favorite</i><br/>favorite
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">favorite_border</i><br/>favorite border
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">feedback</i><br/>feedback
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">find_in_page</i><br/>find in page
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">find_replace</i><br/>find replace
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">fingerprint</i><br/>fingerprint
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">flight_land</i><br/>flight land
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">flight_takeoff</i><br/>flight takeoff
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">flip_to_back</i><br/>flip to back
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">flip_to_front</i><br/>flip to front
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">g_translate</i><br/>g translate
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">gavel</i><br/>gavel
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">get_app</i><br/>get app
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">gif</i><br/>gif
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">grade</i><br/>grade
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">group_work</i><br/>group work
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">help</i><br/>help
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">help_outline</i><br/>help outline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">highlight_off</i><br/>highlight off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">history</i><br/>history
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">home</i><br/>home
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">hourglass_empty</i><br/>hourglass empty
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">hourglass_full</i><br/>hourglass full
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">http</i><br/>http
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">https</i><br/>https
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">important_devices</i><br/>important devices
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">info</i><br/>info
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">info_outline</i><br/>info outline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">input</i><br/>input
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">invert_colors</i><br/>invert colors
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">label</i><br/>label
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">label_outline</i><br/>label outline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">language</i><br/>language
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">launch</i><br/>launch
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">lightbulb_outline</i><br/>lightbulb outline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">line_style</i><br/>line style
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">line_weight</i><br/>line weight
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">list</i><br/>list
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">lock</i><br/>lock
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">lock_open</i><br/>lock open
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">lock_outline</i><br/>lock outline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">loyalty</i><br/>loyalty
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">markunread_mailbox</i><br/>markunread mailbox
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">motorcycle</i><br/>motorcycle
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">note_add</i><br/>note add
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">offline_pin</i><br/>offline pin
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">opacity</i><br/>opacity
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">open_in_browser</i><br/>open in browser
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">open_in_new</i><br/>open in new
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">open_with</i><br/>open with
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">pageview</i><br/>pageview
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">pan_tool</i><br/>pan tool
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">payment</i><br/>payment
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">perm_camera_mic</i><br/>perm camera mic
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">perm_contact_calendar</i><br/>perm contact calendar
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">perm_data_setting</i><br/>perm data setting
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">perm_device_information</i><br/>perm device information
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">perm_identity</i><br/>perm identity
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">perm_media</i><br/>perm media
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">perm_phone_msg</i><br/>perm phone msg
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">perm_scan_wifi</i><br/>perm scan wifi
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">pets</i><br/>pets
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">picture_in_picture</i><br/>picture in picture
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">picture_in_picture_alt</i><br/>picture in picture alt
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">play_for_work</i><br/>play for work
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">polymer</i><br/>polymer
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">power_settings_new</i><br/>power settings new
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">pregnant_woman</i><br/>pregnant woman
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">print</i><br/>print
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">query_builder</i><br/>query builder
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">question_answer</i><br/>question answer
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">receipt</i><br/>receipt
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">record_voice_over</i><br/>record voice over
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">redeem</i><br/>redeem
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">remove_shopping_cart</i><br/>remove shopping cart
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">reorder</i><br/>reorder
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">report_problem</i><br/>report problem
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">restore</i><br/>restore
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">restore_page</i><br/>restore page
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">room</i><br/>room
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">rounded_corner</i><br/>rounded corner
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">rowing</i><br/>rowing
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">schedule</i><br/>schedule
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">search</i><br/>search
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings</i><br/>settings
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_applications</i><br/>settings applications
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_backup_restore</i><br/>settings backup restore
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_bluetooth</i><br/>settings bluetooth
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_brightness</i><br/>settings brightness
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_cell</i><br/>settings cell
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_ethernet</i><br/>settings ethernet
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_input_antenna</i><br/>settings input antenna
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_input_component</i><br/>settings input component
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_input_composite</i><br/>settings input composite
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_input_hdmi</i><br/>settings input hdmi
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_input_svideo</i><br/>settings input svideo
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_overscan</i><br/>settings overscan
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_phone</i><br/>settings phone
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_power</i><br/>settings power
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_remote</i><br/>settings remote
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">settings_voice</i><br/>settings voice
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">shop</i><br/>shop
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">shop_two</i><br/>shop two
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">shopping_basket</i><br/>shopping basket
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">shopping_cart</i><br/>shopping cart
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">speaker_notes</i><br/>speaker notes
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">speaker_notes_off</i><br/>speaker notes off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">spellcheck</i><br/>spellcheck
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">star</i><br/>star rate
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">stars</i><br/>stars
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">store</i><br/>store
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">subject</i><br/>subject
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">supervisor_account</i><br/>supervisor account
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">swap_horiz</i><br/>swap horiz
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">swap_vert</i><br/>swap vert
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">swap_vertical_circle</i><br/>swap vertical circle
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">system_update_alt</i><br/>system update alt
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">tab</i><br/>tab
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">tab_unselected</i><br/>tab unselected
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">theaters</i><br/>theaters
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">thumb_down</i><br/>thumb down
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">thumb_up</i><br/>thumb up
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">thumbs_up_down</i><br/>thumbs up down
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">timeline</i><br/>timeline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">toc</i><br/>toc
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">today</i><br/>today
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">toll</i><br/>toll
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">touch_app</i><br/>touch app
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">track_changes</i><br/>track changes
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">translate</i><br/>translate
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">trending_down</i><br/>trending down
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">trending_flat</i><br/>trending flat
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">trending_up</i><br/>trending up
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">turned_in</i><br/>turned in
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">turned_in_not</i><br/>turned in not
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">update</i><br/>update
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">verified_user</i><br/>verified user
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">view_agenda</i><br/>view agenda
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">view_array</i><br/>view array
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">view_carousel</i><br/>view carousel
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">view_column</i><br/>view column
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">view_day</i><br/>view day
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">view_headline</i><br/>view headline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">view_list</i><br/>view list
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">view_module</i><br/>view module
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">view_quilt</i><br/>view quilt
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">view_stream</i><br/>view stream
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">view_week</i><br/>view week
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">visibility</i><br/>visibility
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">visibility_off</i><br/>visibility off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">watch_later</i><br/>watch later
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">work</i><br/>work
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">youtube_searched_for</i><br/>youtube searched for
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">zoom_in</i><br/>zoom in
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">zoom_out</i><br/>zoom out
										</div>
	
									</div>
									<!--row -->
								</div>
							</div>
						</div>
					</section> <!-- action icons end-->
					
					<!-- alert icons start-->
					<section class="row component-section">
						<div class="col-md-12">
							<p>Alert icons</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<div class="row">
	
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">add_alert</i><br/>add alert
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">error</i><br/>error
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">error_outline</i><br/>error outline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">warning</i><br/>warning
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</section> <!-- alert icons end-->
					
					<!-- audio video icons -->
					<section class="row component-section">
						<div class="col-md-12">
							<p>Audio/Video</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<div class="row">
										
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">add_to_queue</i><br/>add to queue
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">airplay</i><br/>airplay
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">album</i><br/>album
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">art_track</i><br/>art track
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">av_timer</i><br/>av timer
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">branding_watermark</i><br/>branding watermark
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">call_to_action</i><br/>call to action
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">closed_caption</i><br/>closed caption
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">equalizer</i><br/>equalizer
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">explicit</i><br/>explicit
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">fast_forward</i><br/>fast forward
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">fast_rewind</i><br/>fast rewind
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">featured_play_list</i><br/>featured play list
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">featured_video</i><br/>featured video
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">fiber_dvr</i><br/>fiber dvr
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">fiber_manual_record</i><br/>fiber manual record
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">fiber_new</i><br/>fiber new
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">fiber_pin</i><br/>fiber pin
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">fiber_smart_record</i><br/>fiber smart record
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">forward_10</i><br/>forward 10
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">forward_30</i><br/>forward 30
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">forward_5</i><br/>forward 5
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">games</i><br/>games
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">hd</i><br/>hd
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">hearing</i><br/>hearing
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">high_quality</i><br/>high quality
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">library_add</i><br/>library add
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">library_books</i><br/>library books
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">library_music</i><br/>library music
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">loop</i><br/>loop
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">mic</i><br/>mic
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">mic_none</i><br/>mic none
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">mic_off</i><br/>mic off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">movie</i><br/>movie
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">music_video</i><br/>music video
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">new_releases</i><br/>new releases
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">not_interested</i><br/>not interested
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">note</i><br/>note
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">pause</i><br/>pause
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">pause_circle_filled</i><br/>pause circle filled
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">pause_circle_outline</i><br/>pause circle outline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">play_arrow</i><br/>play arrow
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">play_circle_filled</i><br/>play circle filled
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">play_circle_outline</i><br/>play circle outline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">playlist_add</i><br/>playlist add
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">playlist_add_check</i><br>playlist add check
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">playlist_play</i><br>playlist play
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">queue</i><br>queue
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">queue_music</i><br>queue music
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">queue_play_next</i><br>queue play next
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">radio</i><br>radio
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">recent_actors</i><br>recent actors
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">remove_from_queue</i><br>remove from queue
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">repeat</i><br>repeat
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">repeat_one</i><br>repeat one
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">replay</i><br>replay
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">replay_10</i><br>replay 10
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">replay_30</i><br>replay 30
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">replay_5</i><br>replay 5
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">shuffle</i><br>shuffle
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">skip_next</i><br>skip next
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">skip_previous</i><br>skip previous
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">slow_motion_video</i><br>slow motion video
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">snooze</i><br>snooze
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">sort_by_alpha</i><br>sort by alpha
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">stop</i><br>stop
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">subscriptions</i><br>subscriptions
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">subtitles</i><br>subtitles
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">surround_sound</i><br>surround sound
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">video_call</i><br>video call
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">video_label</i><br>video label
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">video_library</i><br>video library
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">videocam</i><br>videocam
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">videocam_off</i><br>videocam off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">volume_down</i><br>volume down
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">volume_mute</i><br>volume mute
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">volume_off</i><br>volume off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">volume_up</i><br>volume up
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">web</i><br>web
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">
											<i class="material-icons md-dark pmd-md">web_asset</i><br>web asset
										</div>                                        
										
										<!--End av --> 
									</div>
									<!--End action--> 
								</div>
							</div>
							<!--Audio/Video card start --> 
						</div>
					</section> <!-- audio video icons end -->
					
					<!-- Communication icons -->
					<section class="row component-section">
						<div class="col-md-12">
							<p>Communication</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<!--row -->
									<div class="row">
	
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">business</i><br />business
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">call</i><br />call
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">call_end</i><br />call end
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">call_made</i><br />call made
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">call_merge</i><br />call merge
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">call_missed</i><br />call missed
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">call_missed_outgoing</i><br />call missed outgoing
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">call_received</i><br />call received
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">call_split</i><br />call split
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">chat</i><br />chat
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">chat_bubble</i><br />chat bubble
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">chat_bubble_outline</i><br />chat bubble outline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">clear_all</i><br />clear all
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">comment</i><br />comment
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">contact_mail</i><br />contact mail
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">contact_phone</i><br />contact phone
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">contacts</i><br />contacts
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">dialer_sip</i><br />dialer sip
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">dialpad</i><br />dialpad
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">email</i><br />email
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">forum</i><br />forum
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">import_contacts</i><br />import contacts
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">import_export</i><br />import export
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">invert_colors_off</i><br />invert colors off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">live_help</i><br />live help
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">location_off</i><br />location off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">location_on</i><br />location on
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">mail_outline</i><br />mail outline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">message</i><br />message
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">no_sim</i><br />no sim
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">phone</i><br />phone
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">phonelink_erase</i><br />phonelink erase
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">phonelink_lock</i><br />phonelink lock
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">phonelink_setup</i><br />phonelink setup
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">phonelink_ring</i><br />phonelink ring
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">portable_wifi_off</i><br />portable wifi off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">present_to_all</i><br />present to all
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">ring_volume</i><br />ring volume
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">rss_feed</i><br />rss feed
										</div>	
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">screen_share</i><br />screen share
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">speaker_phone</i><br />speaker phone
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">stay_current_landscape</i><br />stay current landscape
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">stay_current_portrait</i><br />stay current portrait
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">stay_primary_landscape</i><br />stay primary landscape
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">stay_primary_portrait</i><br />stay primary portrait
										</div>    
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">stop_screen_share</i><br />stop screen share
										</div>    
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">swap_calls</i><br />swap calls
										</div>    
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">textsms</i><br />textsms
										</div>    
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">voicemail</i><br />voicemail
										</div>    
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">vpn_key</i><br />vpn key
										</div>    
	
	
									</div>
									<!--row -->
								</div>
							</div>
						</div>
					</section> <!-- Communication icons end-->
					
					<!-- content icons -->
					<section class="row component-section">
						<div class="col-md-12">
							<p>Content</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<div class="row">
	
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">add</i><br />add
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">add_box</i><br />add box
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">add_circle</i><br />add circle
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">add_circle_outline</i><br />add circle outline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">archive</i><br />archive
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">backspace</i><br />backspace
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">block</i><br />block
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">clear</i><br />clear
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">content_copy</i><br />content copy
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">content_cut</i><br />content cut
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">content_paste</i><br />content paste
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">create</i><br />create
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">delete_sweep</i><br />delete sweep
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">drafts</i><br />drafts
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_list</i><br />filter list
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">flag</i><br />flag
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">font_download</i><br />font download
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">forward</i><br />forward
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">gesture</i><br />gesture
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">inbox</i><br />inbox
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">link</i><br />link
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">low_priority</i><br />low priority
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">mail</i><br />mail
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">markunread</i><br />markunread
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">move_to_inbox</i><br />move to inbox
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">next_week</i><br />next week
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">redo</i><br />redo
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">remove</i><br />remove
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">remove_circle</i><br />remove circle
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">remove_circle_outline</i><br />remove circle outline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">reply</i><br />reply
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">reply_all</i><br />reply all
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">report</i><br />report
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">save</i><br />save
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">select_all</i><br />select all
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">send</i><br />send
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">sort</i><br />sort
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">text_format</i><br />text format
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">unarchive</i><br />unarchive
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">undo</i><br />undo
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">weekend</i><br />weekend
										</div>
	
									</div>
								</div>
							</div>
						</div>
					</section> <!-- content icons end-->
					
					<!-- device icons -->
					<section class="row component-section">
						<div class="col-md-12">
							<p>Device</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<div class="row">
	
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">access_alarm</i><br />access alarm
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">add_alarm</i><br />add alarm
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">access_time</i><br />access time
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">access_alarms</i><br />access alarms
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">airplanemode_active</i><br />airplanemode active
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">airplanemode_inactive</i><br />airplanemode inactive
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">battery_alert</i><br />battery alert
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">battery_charging_full</i><br />battery charging full
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">battery_full</i><br />battery full
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">battery_std</i><br />battery std
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">battery_unknown</i><br />battery unknown
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">bluetooth</i><br />bluetooth
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">bluetooth_connected</i><br />bluetooth connected
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">bluetooth_disabled</i><br />bluetooth disabled
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">bluetooth_searching</i><br />bluetooth searching
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">brightness_auto</i><br />brightness auto
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">brightness_high</i><br />brightness high
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">brightness_low</i><br />brightness low
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">brightness_medium</i><br />brightness medium
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">data_usage</i><br />data usage
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">developer_mode</i><br />developer mode
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">devices</i><br />devices
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">dvr</i><br />dvr
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">gps_fixed</i><br />gps fixed
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">gps_not_fixed</i><br />gps not fixed
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">gps_off</i><br />gps off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">graphic_eq</i><br />graphic eq
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">location_disabled</i><br />location disabled
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">location_searching</i><br />location searching
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">network_cell</i><br />network cell
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">network_wifi</i><br />network wifi
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">nfc</i><br />nfc
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">screen_lock_landscape</i><br />screen lock landscape
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">screen_lock_portrait</i><br />screen lock portrait
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">screen_lock_rotation</i><br />screen lock rotation
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">screen_rotation</i><br />screen rotation
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">sd_storage</i><br />sd storage
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">settings_system_daydream</i><br />settings system daydream
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">signal_cellular_4_bar</i><br />signal cellular 4 bar
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">signal_cellular_connected_no_internet_4_bar</i><br />signal cellular connected no internet 4 bar
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">signal_cellular_no_sim</i><br />signal cellular no sim
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">signal_cellular_null</i><br />signal cellular null
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">signal_cellular_off</i><br />signal cellular off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">signal_wifi_4_bar</i><br />signal wifi 4 bar
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">signal_wifi_4_bar_lock</i><br />signal wifi 4 bar lock
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">signal_wifi_off</i><br />signal wifi off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">storage</i><br />storage
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">usb</i><br />usb
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">wallpaper</i><br />wallpaper
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">widgets</i><br />widgets
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">wifi_lock</i><br />wifi lock
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">wifi_tethering</i><br />wifi tethering
										</div>
	
									</div>
								</div>
							</div>
						</div>
					</section> <!-- device icons end -->
					
					<!-- editor icons -->
					<section class="row component-section">
						<div class="col-md-12">
							<p>Editor</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<!--row -->
									<div class="row">
	
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">attach_file</i><br />attach file
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">attach_money</i><br />attach money
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">border_all</i><br />border all
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">border_bottom</i><br />border bottom
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">border_clear</i><br />border clear
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">border_color</i><br />border color
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">border_horizontal</i><br />border horizontal
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">border_inner</i><br />border inner
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">border_left</i><br />border left
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">border_outer</i><br />border outer
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">border_right</i><br />border right
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">border_style</i><br />border style
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">border_top</i><br />border top
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">border_vertical</i><br />border vertical
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">bubble_chart</i><br />bubble chart
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">drag_handle</i><br />drag handle
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_align_center</i><br />format align center
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_align_justify</i><br />format align justify
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_align_left</i><br />format align left
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_align_right</i><br />format align right
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_bold</i><br />format bold
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_clear</i><br />format clear
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_color_fill</i><br />format color fill
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_color_reset</i><br />format color_reset
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_color_text</i><br />format color text
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_indent_decrease</i><br />format indent_decrease
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_indent_increase</i><br />format indent increase
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_italic</i><br />format italic
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_line_spacing</i><br />format line spacing
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_list_bulleted</i><br />format list bulleted
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_list_numbered</i><br />format list numbered
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_paint</i><br />format paint
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_quote</i><br />format quote
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_shapes</i><br />format shapes
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_size</i><br />format size
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_strikethrough</i><br />format strikethrough
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_textdirection_l_to_r</i><br />format textdirection l to r
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_textdirection_r_to_l</i><br />format textdirection r to l
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">format_underlined</i><br />format underlined
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">functions</i><br />functions
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">highlight</i><br />highlight
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">insert_chart</i><br />insert chart
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">insert_comment</i><br />insert comment
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">insert_drive_file</i><br />insert drive file
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">insert_emoticon</i><br />insert emoticon
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">insert_invitation</i><br />insert invitation
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">insert_link</i><br />insert link
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">insert_photo</i><br />insert photo
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">linear_scale</i><br />linear scale
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">merge_type</i><br />merge type
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">mode_comment</i><br />mode comment
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">mode_edit</i><br />mode edit
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">monetization_on</i><br />monetization on
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">money_off</i><br />money off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">multiline_chart</i><br />multiline chart
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">pie_chart</i><br />pie chart
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">pie_chart_outlined</i><br />pie chart outlined
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">publish</i><br />publish
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">short_text</i><br />short text
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">show_chart</i><br />show chart
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">space_bar</i><br />space bar
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">strikethrough_s</i><br />strikethrough s
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">text_fields</i><br />text fields
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">title</i><br />title
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">vertical_align_bottom</i><br />vertical align bottom
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">vertical_align_center</i><br />vertical align center
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">vertical_align_top</i><br />vertical align top
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">wrap_text</i><br />wrap text
										</div>
	
									</div>
									<!--row -->
								</div>
							</div>
						</div>
					</section> <!-- editor icons end -->
					
					<!-- file icons -->
					<section class="row component-section">
						<div class="col-md-12">
							<p>File</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<!--row -->
									<div class="row">
	
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">attachment</i><br />attachment
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">cloud</i><br />cloud
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">cloud_circle</i><br />cloud_circle
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">cloud_done</i><br />cloud_done
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">cloud_download</i><br />cloud_download
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">cloud_off</i><br />cloud_off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">cloud_queue</i><br />cloud_queue
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">cloud_upload</i><br />cloud_upload
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">create_new_folder</i><br />create_new_folder
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">file_download</i><br />file_download
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">file_upload</i><br />file_upload
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">folder</i><br />folder
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">folder_open</i><br />folder_open
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">folder_shared</i><br />folder_shared
										</div>
	
									</div>
									<!--row -->
								</div>
							</div>
						</div>
					</section> <!-- file icons end-->
					
					<!-- hardware icons -->
					<section class="row component-section">
						<div class="col-md-12">
							<p>Hardware</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<div class="row">
	
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">cast</i><br />cast
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">cast_connected</i><br />cast connected
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">computer</i><br />computer
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">desktop_mac</i><br />desktop mac
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">desktop_windows</i><br />desktop windows
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">developer_board</i><br />developer board
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">device_hub</i><br />device hub
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">devices_other</i><br />devices other
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">dock</i><br />dock
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">gamepad</i><br />gamepad
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">headset</i><br />headset
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">headset_mic</i><br />headset mic
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">keyboard</i><br />keyboard
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">keyboard_arrow_down</i><br />keyboard arrow down
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">keyboard_arrow_left</i><br />keyboard arrow left
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">keyboard_arrow_up</i><br />keyboard arrow up
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">keyboard_arrow_right</i><br />keyboard arrow right
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">keyboard_backspace</i><br />keyboard backspace
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">keyboard_capslock</i><br />keyboard capslock
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">keyboard_hide</i><br />keyboard hide
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">keyboard_return</i><br />keyboard return
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">keyboard_tab</i><br />keyboard tab
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">keyboard_voice</i><br />keyboard voice
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">laptop</i><br />laptop
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">laptop_chromebook</i><br />laptop chromebook
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">laptop_mac</i><br />laptop mac
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">laptop_windows</i><br />laptop windows
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">memory</i><br />memory
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">mouse</i><br />mouse
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">phone_android</i><br />phone android
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">phone_iphone</i><br />phone iphone
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">phonelink</i><br />phonelink
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">phonelink_off</i><br />phonelink off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">power_input</i><br />power input
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">router</i><br />router
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">scanner</i><br />scanner
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">security</i><br />security
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">sim_card</i><br />sim card
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">smartphone</i><br />smartphone
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">speaker</i><br />speaker
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">speaker_group</i><br />speaker group
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">tablet</i><br />tablet
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">tablet_android</i><br />tablet android
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">tablet_mac</i><br />tablet_mac
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">toys</i><br />toys
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">tv</i><br />tv
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">videogame_asset</i><br />videogame asset
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">watch</i><br />watch
										</div>
	
									</div>
								</div>
							</div>
						</div>
					</section> <!-- hardware icons end-->
					
					<!-- image icons -->
					<section class="row component-section">
						<div class="col-md-12">
							<p>Image</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<!--row -->
									<div class="row">
	
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">add_a_photo</i><br />add a photo
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">add_to_photos</i><br />add to photos
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">adjust</i><br />adjust
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">assistant_photo</i><br />assistant photo
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">assistant</i><br />assistant
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">audiotrack</i><br />audiotrack
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">blur_circular</i><br />blur circular
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">blur_linear</i><br />blur linear
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">blur_off</i><br />blur off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">blur_on</i><br />blur on
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">brightness_1</i><br />brightness 1
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">brightness_2</i><br />brightness 2
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">brightness_3</i><br />brightness 3
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">brightness_4</i><br />brightness 4
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">brightness_5</i><br />brightness 5
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">brightness_6</i><br />brightness 6
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">brightness_7</i><br />brightness 7
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">broken_image</i><br />broken image
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">brush</i><br />brush
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">burst_mode</i><br />burst mode
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">camera</i><br />camera
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">camera_alt</i><br />camera alt
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">camera_front</i><br />camera front
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">camera_rear</i><br />camera rear
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">camera_roll</i><br />camera roll
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">center_focus_strong</i><br />center focus strong
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">center_focus_weak</i><br />center focus weak
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">collections</i><br />collections
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">collections_bookmark</i><br />collections bookmark
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">color_lens</i><br />color lens
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">colorize</i><br />colorize
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">compare</i><br />compare
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">control_point</i><br />control point
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">control_point_duplicate</i><br />control point duplicate
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">crop</i><br />crop
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">crop_16_9</i><br />crop 16 9
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">crop_3_2</i><br />crop 3 2
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">crop_5_4</i><br />crop 5 4
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">crop_7_5</i><br />crop 7 5
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">crop_din</i><br />crop din
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">crop_free</i><br />crop free
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">crop_landscape</i><br />crop landscape
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">crop_original</i><br />crop original
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">crop_portrait</i><br />crop portrait
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">crop_rotate</i><br />crop rotate
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">crop_square</i><br />crop square
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">dehaze</i><br />dehaze
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">details</i><br />details
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">edit</i><br />edit
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">exposure</i><br />exposure
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">exposure_neg_1</i><br />exposure neg 1
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">exposure_neg_2</i><br />exposure neg 2
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">exposure_plus_1</i><br />exposure plus 1
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">exposure_plus_2</i><br />exposure plus 2
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">exposure_zero</i><br />exposure zero
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter</i><br />filter
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_1</i><br />filter 1
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_2</i><br />filter 2
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_3</i><br />filter 3
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_5</i><br />filter 5
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_4</i><br />filter 4
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_6</i><br />filter 6
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_7</i><br />filter 7
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_8</i><br />filter 8
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_9</i><br />filter 9
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_9_plus</i><br />filter 9 plus
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_b_and_w</i><br />filter b and w
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_center_focus</i><br />filter center focus
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_drama</i><br />filter drama
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_frames</i><br />filter frames
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_hdr</i><br />filter hdr
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_none</i><br />filter none
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_tilt_shift</i><br />filter tilt shift
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">filter_vintage</i><br />filter vintage
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">flare</i><br />flare
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">flash_auto</i><br />flash auto
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">flash_off</i><br />flash off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">flash_on</i><br />flash on
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">flip</i><br />flip
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">gradient</i><br />gradient
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">grain</i><br />grain
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">grid_off</i><br />grid off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">grid_on</i><br />grid on
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">hdr_off</i><br />hdr off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">hdr_on</i><br />hdr on
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">hdr_strong</i><br />hdr strong
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">hdr_weak</i><br />hdr weak
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">healing</i><br />healing
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">image</i><br />image
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">image_aspect_ratio</i><br />image aspect ratio
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">iso</i><br />iso
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">landscape</i><br />landscape
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">leak_add</i><br />leak add
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">leak_remove</i><br />leak remove
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">lens</i><br />lens
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">linked_camera</i><br />linked camera
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">looks</i><br />looks
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">looks_3</i><br />looks 3
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">looks_4</i><br />looks 4
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">looks_5</i><br />looks 5
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">looks_6</i><br />looks 6
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">looks_one</i><br />looks one
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">looks_two</i><br />looks two
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">loupe</i><br />loupe
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">monochrome_photos</i><br />monochrome photos
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">movie_creation</i><br />movie creation
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">movie_filter</i><br />movie filter
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">music_note</i><br />music note
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">nature</i><br />nature
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">nature_people</i><br />nature people
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">navigate_before</i><br />navigate before
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">navigate_next</i><br />navigate next
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">palette</i><br />palette
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">panorama</i><br />panorama
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">panorama_fish_eye</i><br />panorama fish eye
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">panorama_horizontal</i><br />panorama horizontal
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">panorama_vertical</i><br />panorama vertical
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">panorama_wide_angle</i><br />panorama wide angle
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">photo</i><br />photo
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">photo_album</i><br />photo album
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">photo_camera</i><br />photo camera
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">photo_filter</i><br />photo filter
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">photo_library</i><br />photo library
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">photo_size_select_actual</i><br />photo size select actual
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">photo_size_select_large</i><br />photo size select large
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">photo_size_select_small</i><br />photo size select small
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">picture_as_pdf</i><br />picture as pdf
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">portrait</i><br />portrait
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">remove_red_eye</i><br />remove red eye
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">rotate_90_degrees_ccw</i><br />rotate 90 degrees ccw
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">rotate_left</i><br />rotate left
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">rotate_right</i><br />rotate right
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">slideshow</i><br />slideshow
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">straighten</i><br />straighten
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">style</i><br />style
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">switch_camera</i><br />switch camera
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">switch_video</i><br />switch video
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">tag_faces</i><br />tag faces
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">texture</i><br />texture
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">timelapse</i><br />timelapse
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">timer</i><br />timer
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">timer_10</i><br />timer 10
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">timer_3</i><br />timer 3
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">timer_off</i><br />timer off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">tonality</i><br />tonality
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">transform</i><br />transform
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">tune</i><br />tune
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">view_comfy</i><br />view comfy
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">view_compact</i><br />view compact
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">vignette</i><br />vignette
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">wb_auto</i><br />wb auto
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">wb_cloudy</i><br />wb cloudy
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">wb_incandescent</i><br />wb incandescent
										</div>
										
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">wb_sunny</i><br />wb sunny
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">wb_iridescent</i><br />wb iridescent
										</div>
	
									</div>
									<!--row -->
								</div>
							</div>
						</div>
					</section> <!-- image icons end -->
					
					<!-- maps icon -->
					<section class="row component-section">
						<div class="col-md-12">
							<p>Maps</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<div class="row">
	
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">add_location</i><br />add location
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">beenhere</i><br />beenhere
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">directions</i><br />directions
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">directions_bike</i><br />directions bike
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">directions_boat</i><br />directions boat
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">directions_bus</i><br />directions bus
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">directions_car</i><br />directions car
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">directions_railway</i><br />directions railway
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">directions_run</i><br />directions run
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">directions_subway</i><br />directions subway
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">directions_transit</i><br />directions transit
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">directions_walk</i><br />directions walk
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">edit_location</i><br />edit location
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">ev_station</i><br />ev station
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">flight</i><br />flight
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">hotel</i><br />hotel
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">layers</i><br />layers
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">layers_clear</i><br />layers clear
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_activity</i><br />local activity
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_airport</i><br />local airport
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_atm</i><br />local atm
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_bar</i><br />local bar
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_cafe</i><br />local cafe
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_car_wash</i><br />local car wash
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_convenience_store</i><br />local convenience store
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_dining</i><br />local dining
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_drink</i><br />local drink
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_florist</i><br />local florist
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_gas_station</i><br />local gas station
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_grocery_store</i><br />local grocery store
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_hospital</i><br />local hospital
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_hotel</i><br />local hotel
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_laundry_service</i><br />local laundry service
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_library</i><br />local library
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_mall</i><br />local mall
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_movies</i><br />local movies
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_offer</i><br />local offer
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_parking</i><br />local parking
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_pharmacy</i><br />local pharmacy
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_phone</i><br />local phone
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_pizza</i><br />local pizza
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_play</i><br />local play
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_post_office</i><br />local post office
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_printshop</i><br />local printshop
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_see</i><br />local see
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_shipping</i><br />local shipping
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">local_taxi</i><br />local taxi
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">map</i><br />map
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">my_location</i><br />my location
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">navigation</i><br />navigation
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">near_me</i><br />near me
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">person_pin</i><br />person pin
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">person_pin_circle</i><br />person pin circle
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">pin_drop</i><br />pin drop
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">place</i><br />place
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">rate_review</i><br />rate review
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">restaurant</i><br />restaurant
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">restaurant_menu</i><br />restaurant menu
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">satellite</i><br />satellite
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">store_mall_directory</i><br />store mall directory
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">streetview</i><br />streetview
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">subway</i><br />subway
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">terrain</i><br />terrain
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">traffic</i><br />traffic
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">train</i><br />train
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">tram</i><br />tram
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">transfer_within_a_station</i><br />transfer within a station
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">zoom_out_map</i><br />zoom out map
										</div>
	
									</div>
								</div>
							</div>
						</div>
					</section> <!-- maps icon end -->
					
					<!-- navigation icons -->
					<section class="row component-section">
						<div class="col-md-12">
							<p>Navigation</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<!--row -->
									<div class="row">
										
										
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">apps</i><br />apps
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">arrow_back</i><br />arrow back
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">arrow_downward</i><br />arrow downward
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">arrow_drop_down</i><br />arrow drop down
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">arrow_drop_down_circle</i><br />arrow drop down circle
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">arrow_drop_up</i><br />arrow drop up
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">arrow_forward</i><br />arrow forward
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">arrow_upward</i><br />arrow upward
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">cancel</i><br />cancel
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">check</i><br />check
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">chevron_left</i><br />chevron left
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">chevron_right</i><br />chevron right
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">close</i><br />close
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">expand_less</i><br />expand less
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">expand_more</i><br />expand more
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">first_page</i><br />first page
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">fullscreen</i><br />fullscreen
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">fullscreen_exit</i><br />fullscreen exit
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">last_page</i><br />last page
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">menu</i><br />menu
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">more_horiz</i><br />more horiz
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">more_vert</i><br />more vert
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">refresh</i><br />refresh
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">subdirectory_arrow_left</i><br />subdirectory arrow left
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">subdirectory_arrow_right</i><br />subdirectory arrow right
										</div>
											
											
											
									</div>
									<!--row -->
								</div>
							</div>
						</div>
					</section> <!-- navigation icons end -->
					
					<!-- notification icons -->
					<section class="row component-section">
						<div class="col-md-12">
							<p>Notification</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<div class="row">
	
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">adb</i><br />adb
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">airline_seat_flat</i><br />airline seat flat
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">airline_seat_flat_angled</i><br />airline seat flat angled
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">airline_seat_individual_suite</i><br />airline seat individual suite
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">airline_seat_legroom_extra</i><br />airline seat legroom extra
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">airline_seat_recline_normal</i><br />airline seat recline normal
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">airline_seat_legroom_reduced</i><br />airline seat legroom reduced
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">airline_seat_recline_extra</i><br />airline seat recline extra
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">airline_seat_legroom_normal</i><br />airline seat legroom normal
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">bluetooth_audio</i><br />bluetooth audio
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">confirmation_number</i><br />confirmation number
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">disc_full</i><br />disc full
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">do_not_disturb</i><br />do not disturb
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">do_not_disturb_alt</i><br />do not disturb alt
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">do_not_disturb_off</i><br />do not disturb off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">do_not_disturb_on</i><br />do not disturb on
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">drive_eta</i><br />drive eta
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">enhanced_encryption</i><br />enhanced encryption
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">event_available</i><br />event available
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">event_busy</i><br />event busy
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">event_note</i><br />event note
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">folder_special</i><br />folder special
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">live_tv</i><br />live tv
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">mms</i><br />mms
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">more</i><br />more
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">network_check</i><br />network check
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">network_locked</i><br />network locked
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">no_encryption</i><br />no encryption
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">ondemand_video</i><br />ondemand video
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">personal_video</i><br />personal video
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">phone_bluetooth_speaker</i><br />phone bluetooth speaker
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">phone_forwarded</i><br />phone forwarded
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">phone_in_talk</i><br />phone in talk
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">phone_locked</i><br />phone locked
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">phone_missed</i><br />phone missed
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">phone_paused</i><br />phone paused
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">power</i><br />power
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">priority_high</i><br />priority high
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">sd_card</i><br />sd card
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">sim_card_alert</i><br />sim card alert
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">sms</i><br />sms
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">sms_failed</i><br />sms failed
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">sync</i><br />sync
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">sync_disabled</i><br />sync disabled
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">sync_problem</i><br />sync problem
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">system_update</i><br />system update
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">tap_and_play</i><br />tap and play
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">time_to_leave</i><br />time to leave
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">vibration</i><br />vibration
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">voice_chat</i><br />voice chat
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">vpn_lock</i><br />vpn lock
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">wc</i><br />wc
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">wifi</i><br />wifi
										</div>
	
	
	
									</div>
								</div>
							</div>
						</div>
					</section> <!-- notification icons end-->
					
					<!-- Places icons -->
					<section class="row component-section">
						<div class="col-md-12">
							<p>Places</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<!--row -->
									<div class="row">
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">ac_unit</i><br />ac unit
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">airport_shuttle</i><br />airport shuttle
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">all_inclusive</i><br />all inclusive
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">beach_access</i><br />beach access
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">business_center</i><br />business center
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">casino</i><br />casino
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">child_care</i><br />child care
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">child_friendly</i><br />child friendly
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">fitness_center</i><br />fitness center
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">free_breakfast</i><br />free breakfast
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">golf_course</i><br />golf course
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">hot_tub</i><br />hot tub
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">kitchen</i><br />kitchen
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">pool</i><br />pool
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">room_service</i><br />room service
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">rv_hookup</i><br />rv hookup
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">smoke_free</i><br />smoke free
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">smoking_rooms</i><br />smoking rooms
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">spa</i><br />spa
										</div>
	
									</div>
									<!--row -->
								</div>
							</div>
						</div>
					</section> <!-- Places icons end -->
					<!-- Social icons -->
					<section class="row component-section">
						<div class="col-md-12">
							<p>Social</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<!--row -->
									<div class="row">
	
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">cake</i><br />cake
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">domain</i><br />domain
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">group</i><br />group
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">group_add</i><br />group add
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">location_city</i><br />location city
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">mood</i><br />mood
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">mood_bad</i><br />mood bad
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">notifications</i><br />notifications
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">notifications_active</i><br />notifications active
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">notifications_none</i><br />notifications none
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">notifications_off</i><br />notifications off
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">notifications_paused</i><br />notifications paused
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">pages</i><br />pages
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">party_mode</i><br />party mode
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">people</i><br />people
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">people_outline</i><br />people outline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">person</i><br />person
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">person_add</i><br />person add
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">person_outline</i><br />person outline
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">plus_one</i><br />plus one
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">poll</i><br />poll
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">public</i><br />public
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">school</i><br />school
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">sentiment_dissatisfied</i><br />sentiment dissatisfied
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">sentiment_neutral</i><br />sentiment neutral
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">sentiment_satisfied</i><br />sentiment satisfied
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">sentiment_very_dissatisfied</i><br />sentiment very dissatisfied
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">sentiment_very_satisfied</i><br />sentiment very satisfied
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">share</i><br />share
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">whatshot</i><br />whatshot
										</div>
	
									</div>
									<!--row -->
								</div>
							</div>
						</div>
					</section> <!-- Social icons end -->
					
					<!-- toggle icons -->
					<section class="row component-section">
						<div class="col-md-12">
							<p>Toggle</p>
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center icon-custom">
									<!--row -->
									<div class="row">
	
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">check_box</i><br />check box
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">check_box_outline_blank</i><br />check box outline blank
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">indeterminate_check_box</i><br />indeterminate check box
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">radio_button_checked</i><br />radio button checked
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">radio_button_unchecked</i><br />radio button unchecked
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">star</i><br />star
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">star_border</i><br />star border
										</div>
										<div class="col-md-2 col-sm-3 col-xs-6">	
											<i class="material-icons md-dark pmd-md">star_half</i><br />star half
										</div>
	
									</div>
									<!--row -->
								</div>
							</div>
						</div>
					</section> <!-- toggle icons end -->
					
				</div>
			</div> <!-- icons list code and example end -->
		</section> <!-- icons list end --> 
	
	</div>
	
</div>
<!--Icons end --> 
@endsection

@section('include-scripts')
@endsection
