@extends('layouts.master')

@section('include-styles')
@endsection

@section('content')
<!-- Progressbar -->
<div class="pmd-content pmd-content-custom" id="content"> 

	<div class="container-fluid">
	
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Progressbar</span>
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="{{ route('home') }}">Dashboard</a></li>
		  <li class="active">Progressbar</li>
		</ol><!--breadcrum end-->
		
		<!-- component header-->
		<div class="componant-title-bg">
			<p class="lead">Progressbar provide up-to-date feedback on the progress of a workflow or action with simple yet flexible bars.</p>
		</div><!--end component header-->
		
		<!-- Bootstrap Progressbar -->
  		<section class="row component-section">
        
        	<!-- Bootstrap progressbar title and description -->
    		<div class="col-md-3">
      			<div id="boot">
        			<h2>Bootstrap Progressbar</h2>
     			</div>
      			<p>This is the default progress bar provided by Bootstrap. You can also convert it to stripped, animated or stacked progressbar.</p>
    		</div> <!-- end static progressbar title and description -->           
            
            <div class="col-md-9"> 
            
            	<!-- static progressbar code, example -->
              	<div class="component-box">                    
                	
                    <!-- Static Progress bar example -->
                    <div class="row">
                        <div class="col-md-12"> 
                          	<div class="pmd-card pmd-z-depth pmd-card-custom-view">
                            	<div class="pmd-card-body"> 
                                	<div class="progress-rounded progress">
                                    	<div class="progress-bar progress-bar-success" style="width: 34%;"></div>
                                  	</div>
                              		<div class="progress-rounded progress">
                                		<div class="progress-bar progress-bar-info" style="width: 68%;"></div>
                              		</div>
                              		<div class="progress-rounded progress">
                                		<div class="progress-bar progress-bar-warning" style="width: 52%;"></div>
                              		</div>
                              		<div class="progress-rounded progress">
                                		<div class="progress-bar progress-bar-danger" style="width: 77%;"></div>
                              		</div>
                            	</div>
                          	</div>
                        </div>
                   </div><!-- Static Progress bar example end -->
                   
              	</div><!--Static Progressbar code, example end --> 
            </div>
  		</section><!-- Static Progressbar end -->
  
  		<!-- Static Progressbar -->
  		<section class="row component-section">
        
        	<!-- static progressbar title and description -->
    		<div class="col-md-3">
      			<div id="basic">
        			<h2>Propeller Progressbar</h2>
     			</div>
      			<p>It consists of Bootstrap HTML structure enhanced with Propeller customized classes based on Material Standards. Include Propeller Static Progressbar to your code by adding <code>.pmd-progress</code>.</p>
    		</div> <!-- end static progressbar title and description -->           
            
            <div class="col-md-9"> 
            
            	<!-- static progressbar code, example -->
              	<div class="component-box">
                
                    <!-- Static Progress bar example -->
                    <div class="row">
                        <div class="col-md-12"> 
                          	<div class="pmd-card pmd-z-depth pmd-card-custom-view">
                            	<div class="pmd-card-body"> 
                                	<div class="progress-rounded progress pmd-progress">
                                    	<div class="progress-bar progress-bar-success" style="width: 34%;"></div>
                                  	</div>
                              		<div class="progress-rounded progress pmd-progress">
                                		<div class="progress-bar progress-bar-info" style="width: 68%;"></div>
                              		</div>
                              		<div class="progress-rounded progress pmd-progress">
                                		<div class="progress-bar progress-bar-warning" style="width: 52%;"></div>
                              		</div>
                              		<div class="progress-rounded progress pmd-progress">
                                		<div class="progress-bar progress-bar-danger" style="width: 77%;"></div>
                              		</div>
                            	</div>
                          	</div>
                        </div>
                   </div><!-- Static Progress bar example end -->
                   
              	</div><!--Static Progressbar code, example end --> 
            </div>
  		</section><!-- Static Progressbar end --> 
  
  		<!-- Striped Progressbar -->
  		<section class="row component-section">
        
    		<!-- striped progressbar title and description -->
            <div class="col-md-3">
      			<div id="striped">
        			<h2>Striped Progressbar</h2>
      			</div>
      			<p>Include Propeller Striped Progressbar to your code by adding <code>.progress-striped</code> besides <code>.pmd-progress</code>.</p>
    		</div><!-- end striped progressbar title and description -->
            
            <div class="col-md-9">
             
              <!-- striped progressbar code, example -->
              <div class="component-box">
              
                <!-- Striped Progress bar example -->
                <div class="row">
                	<div class="col-md-12"> 
                    	<div class="pmd-card pmd-z-depth pmd-card-custom-view">
                        	<div class="pmd-card-body"> 
                            	<div class=" progress-rounded progress progress-striped pmd-progress">
                                	<div class="progress-bar progress-bar-success" style="width: 34%;"></div>
                              	</div>
                              	<div class=" progress-rounded progress progress-striped pmd-progress">
                                	<div class="progress-bar progress-bar-info" style="width: 68%;"></div>
                              	</div>
                          		<div class=" progress-rounded progress progress-striped pmd-progress">
                            		<div class="progress-bar progress-bar-warning" style="width: 52%;"></div>
                          		</div>
                          		<div class=" progress-rounded progress progress-striped pmd-progress">
                            		<div class="progress-bar progress-bar-danger" style="width: 77%;"></div>
                          		</div>
                        	</div>
                      	</div>
                    </div>
                </div><!-- Striped Progress bar example end -->
                
              </div><!-- striped progressbar code, example end -->
           </div>
  		</section><!-- Striped Progressbar end --> 
  
  		<!-- Animated Progressbar -->
        <section class="row component-section">
        
        	<!-- animated progressbar title and description -->
            <div class="col-md-3">
              <div id="animated">
                <h2>Animated Progressbar</h2>
              </div>
              <p>Include Propeller Animated Progressbar to your code by adding <code>.active</code> beside <code>.progress-striped</code>.</p>
            </div><!-- end animated progressbar title and description -->
            
            <div class="col-md-9">
             
            	<!-- striped progressbar code, example -->
              	<div class="component-box">
                
                  	<!-- Animated Progress bar example -->
                    <div class="row">
                    	<div class="col-md-12"> 
                      		<div class="pmd-card pmd-z-depth pmd-card-custom-view">
                        		<div class="pmd-card-body"> 
                          			<div class=" progress-rounded progress progress-striped pmd-progress active">
                            			<div class="progress-bar progress-bar-success" style="width: 34%;"></div>
                          			</div>
                          			<div class=" progress-rounded progress progress-striped pmd-progress active">
                            			<div class="progress-bar progress-bar-info" style="width: 68%;"></div>
                          			</div>
                        		</div>
                      		</div>
                    	</div>
                  </div><!-- Animated Progress bar example end -->
                    
              	</div><!-- Animated progressbar code, example end -->
            </div>
        </section><!-- Animated Progressbar --> 
  
  		<!-- Stacked progressbar -->
  		<section class="row component-section">
        
        	<!-- stacked progressbar title and description -->
    		<div class="col-md-3">
      			<div id="stake">
        			<h2>Stacked Progressbar</h2>
      			</div>
      			<p>Include Propeller Stacked Progressbar to your code by adding <code>.progress-bar</code> inside the wrapper div containing <code>.pmd-progress</code>.</p>
    		</div><!-- stacked progressbar title and description -->
            
    		<div class="col-md-9">
             
      			<!--Stacked Progressbar code, example -->
      			<div class="component-box">
                
          			<!-- Stacked Progress bar example -->
                    <div class="row">
            			<div class="col-md-12"> 
              				<div class="pmd-card pmd-z-depth pmd-card-custom-view ">
                				<div class="pmd-card-body"> 
                                	<div class="progress-rounded progress progress-striped pmd-progress">
                                    	<div style="width: 35%" class="progress-bar progress-bar-success "></div>
                                    	<div style="width: 20%" class="progress-bar progress-bar-warning"></div>
                                    	<div style="width: 10%" class="progress-bar progress-bar-danger"></div>
                                  	</div>
                				</div>
              				</div>
            			</div>
          			</div><!-- Stacked Progress bar example end-->
                       
     			</div><!--Staked Progressbar code,example end --> 
    		</div>
  		</section><!-- Stacked progressbar end-->
	</div><!--Progressbar container end -->	 
    
</div>
<!--Progressbar constructor end--> 
@endsection

@section('include-scripts')
@endsection
