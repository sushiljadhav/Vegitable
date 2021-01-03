<?php 
	include('header.php');
?>


<div>
    <!-- <div id="wrapper">
			<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
					<div class="container-fluid d-flex flex-column p-0">
							<hr class="sidebar-divider my-0">
							<ul class="nav navbar-nav text-light" id="accordionSidebar">
									<li class="nav-item" role="presentation"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
							</ul>
							<div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
					</div>
			</nav>
    </div> -->
</div>

<section class="myprofile bg-light">
		<div class="container mt-5 py-5">
			<div class="myprofile_details mb-4">
					<div class="myprofile_details_header d-flex justify-content-between align-items-center">
							<div class="d-flex align-items-center bg-white px-5 py-3 profile_name">
								<i class="fa fa-user-o bg-warning p-3 fs-20 rounded-circle text-white mr-2" aria-hidden="true"></i>
								<h5 class="fs-16"><span class="d-block fs-12 font-weight-normal">Hello, </span>sushil  jadhav</h5>
							</div>
					</div>
			</div>

			<div class="my_profile_tabs">
				<div class="row">

					<div class="col-md-12 col-lg-3 bg-white py-3 profiles-tabs-link mb-3">
						<div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link text-dark active py-2" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>

							<a class="nav-link text-dark py-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>

							<a class="nav-link text-dark py-2" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>

							<a class="nav-link text-dark py-2" id="v-pills-faq-tab" data-toggle="pill" href="#v-pills-faq" role="tab" aria-controls="v-pills-faq" aria-selected="false">FAQ</a>

							<a class="nav-link text-dark py-2" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>

							<a class="nav-link text-dark py-2" id="v-pills-customer-tab" data-toggle="pill" href="#v-pills-customer" role="tab" aria-controls="v-pills-customer" aria-selected="false">Customer Service</a>
						</div>
					</div>

					<div class="col-md-12 col-lg-9">
						<div class="tab-content" id="v-pills-tabContent ">

							<div class="tab-pane fade show active p-0" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
								<div class="myprofile_dashboard">

									<div class="d-sm-flex justify-content-between align-items-center mb-2">
										<h2 class="text-dark mb-0 font-weight-normal">Dashboard</h2>
										<a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#">
										<i class="fa fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
									</div>

									<div class="row">
										<div class="col-12 col-lg-7 p-0">
												<div class="card shadow mb-4">
														<div class="card-header d-flex justify-content-between align-items-center">
																<h6 class="text-gray font-weight-normal fs-14 m-0">Earnings Overview</h6>
																<div class="dropdown no-arrow"><button class="btn btn-link btn-sm text-gray dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fa fa-ellipsis-v text-gray"></i></button>
																		<div class="dropdown-menu shadow dropdown-menu-right animated--fade-in" role="menu">
																				<p class="dropdown-header">Dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
																				<div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
																</div>
														</div>
														<div class="card-body">
																<div class="chart-area" style="height: 200px; min-height: 200px"><canvas data-bs-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;0&quot;,&quot;10000&quot;,&quot;5000&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
														</div>
												</div>
										</div>
										<div class="col-12 col-lg-5 pr-0">
												<div class="card shadow mb-4">
														<div class="card-header d-flex justify-content-between align-items-center">
																<h6 class="text-gray font-weight-normal fs-14 m-0">Revenue Sources</h6>
																<div class="dropdown no-arrow"><button class="btn btn-link btn-sm text-gray  dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fa fa-ellipsis-v text-gray "></i></button>
																		<div class="dropdown-menu shadow dropdown-menu-right animated--fade-in" role="menu">
																				<p class="dropdown-header">Dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
																				<div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
																</div>
														</div>
														<div class="card-body">
																<div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Direct&quot;,&quot;Social&quot;,&quot;Referral&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;50&quot;,&quot;30&quot;,&quot;15&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{}}}"></canvas></div>
																<div class="text-center small mt-4"><span class="mr-2"><i class="fa fa-circle text-primary"></i>&nbsp;Direct</span><span class="mr-2"><i class="fa fa-circle text-success"></i>&nbsp;Social</span><span class="mr-2"><i class="fa fa-circle text-info"></i>&nbsp;Refferal</span></div>
												</div>
										</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12 col-md-6 col-xl-3 mb-4 pl-0">
												<div class="card shadow border-left-primary py-2">
														<div class="card-body">
																<div class="row align-items-center no-gutters">
																		<div class="col mr-auto">
																				<div class="text-dark font-weight-normal"><span>Earnings (monthly)</span></div>
																				<div class="text-dark fs-14 font-weight-normal mb-0"><span>$40,000</span></div>
																		</div>
																		<div class="col-auto">
																			<i class="fa fa-calendar fa-2x text-light-gray "></i></div>
																</div>
														</div>
												</div>
										</div>
										<div class="col-12 col-md-6 col-xl-3 mb-4 pl-0">
												<div class="card shadow border-left-success py-2">
														<div class="card-body">
																<div class="row align-items-center no-gutters">
																		<div class="col mr-2">
																				<div class="text-success font-weight-normal"><span>Earnings (annual)</span></div>
																				<div class="text-dark fs-14 font-weight-normal mb-0"><span>$215,000</span></div>
																		</div>
																		<div class="col-auto"><i class="fa fa-dollar-sign fa-2x text-gray-300"></i></div>
																</div>
														</div>
												</div>
										</div>
										<div class="col-12 col-md-6 col-xl-3 mb-4 pl-0">
												<div class="card shadow border-left-info py-2">
														<div class="card-body">
																<div class="row align-items-center no-gutters">
																		<div class="col mr-2">
																				<div class="text-info font-weight-normal"><span>Tasks</span></div>
																				<div class="row no-gutters align-items-center">
																						<div class="col-auto">
																								<div class="text-dark fs-14 font-weight-normal mb-0 mr-4"><span>50%</span></div>
																						</div>
																						<div class="col">
																								<div class="progress progress-sm">
																										<div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
																								</div>
																						</div>
																				</div>
																		</div>
																		<div class="col-auto"><i class="fa fa-clipboard-list fa-2x text-gray-300"></i></div>
																</div>
														</div>
												</div>
										</div>
										<div class="col-12 col-md-6 col-xl-3 mb-4 p-0">
												<div class="card shadow border-left-warning py-2">
														<div class="card-body">
																<div class="row align-items-center no-gutters">
																		<div class="col mr-2">
																				<div class="text-warning font-weight-normal"><span>Pending Requests</span></div>
																				<div class="text-dark fs-14 font-weight-normal mb-0"><span>18</span></div>
																		</div>
																		<div class="col-auto"><i class="fa fa-comments fa-2x text-light-gray"></i></div>
																</div>
														</div>
												</div>
										</div>
									</div>	
								</div>
							</div>

							<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							    							    									<form method="post" action="edit_php.php">

									   <input type="hidden" class="form-control" id="tablename" value="Users" name="tablename">
                <input type="hidden" class="form-control" id="url" value="myprofile.php" name="url">
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="UserID">UserID</label>
                  <input type="hidden" class="form-control" id="UserID" placeholder="UserID" value="18" name="id">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="UserFname">UserFname</label>
                  <input type="text" class="form-control" id="UserFname" placeholder="UserFname" value="sushil" name="UserFname">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="UserLName">UserLName</label>
                  <input type="text" class="form-control" id="UserLName" placeholder="UserLName" value="jadhav" name="UserLName">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ContactNo">ContactNo</label>
                  <input type="text" class="form-control" id="ContactNo" placeholder="ContactNo" value="" name="ContactNo">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="EmailID">EmailID</label>
                  <input type="text" class="form-control" id="EmailID" placeholder="EmailID" value="sushilj76@gmail.com" name="EmailID">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="UserCategory">UserCategory</label>
                  <input type="text" class="form-control" id="UserCategory" placeholder="UserCategory" value="Customer" name="UserCategory">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Password">Password</label>
                  <input type="hidden" class="form-control" id="Password" placeholder="Password" value="9870558736" name="Password">
                </div>
                
       </div>
        
                  <input type="hidden" class="form-control" id="ProfilePhoto" placeholder="ProfilePhoto" value="" name="ProfilePhoto">
                
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Address">Address</label>
                  <input type="text" class="form-control" id="Address" placeholder="Address" value="" name="Address">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="State">State</label>
                  <input type="text" class="form-control" id="State" placeholder="State" value="" name="State">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="City">City</label>
                  <input type="text" class="form-control" id="City" placeholder="City" value="" name="City">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Pincode">Pincode</label>
                  <input type="text" class="form-control" id="Pincode" placeholder="Pincode" value="" name="Pincode">
                </div>
                
       </div>
        
       
        
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Gender">Gender</label>
                  <input type="text" class="form-control" id="Gender" placeholder="Gender" value="" name="Gender">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="DateOfBirth">DateOfBirth</label>
                  <input type="text" class="form-control" id="DateOfBirth" placeholder="DateOfBirth" value="" name="DateOfBirth">
                </div>
                
       </div>
        

									<div class="form-submit-btn">
										<button type="submit" class="btn btn-sm px-4 btn-primary">Sign in</button>
									</div>
								</form>
							</div>

							<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
								<h2 class="text-light-gray">No Chat Found</h2>
							</div>

							<div class="tab-pane fade" id="v-pills-faq" role="tabpanel" aria-labelledby="v-pills-faq-tab">
								<ol class="tab-faq list-group" list-style="decimal">
									 <li class="mb-2 list-group-item">
									 	<h5 class="fs-14 mb-1">What happens when I update my email address (or mobile number)?</h5>
									 	<p class="fs-14 text-gray font-weight-light">Your login email id (or mobile number) changes, likewise. You'll receive all your account related communication on your updated email address (or mobile number).</p>
									 </li>
									 <li class="mb-2 list-group-item">
									 	<h5 class="fs-14 mb-1">Does my Seller account get affected when I update my email address?</h5>
									 	<p class="fs-14 text-gray font-weight-light">Oursoil has a 'single sign-on' policy. Any changes will reflect in your Seller account also.</p>
									 </li>
									  <li class="mb-2 list-group-item">
									 	<h5 class="fs-14 mb-1">When will my account be updated with the new email address (or mobile number)?</h5>
									 	<p class="fs-14 text-gray font-weight-light">It happens as soon as you confirm the verification code sent to your email (or mobile) and save the changes.</p>
									 </li>
									 <li class="mb-2 list-group-item">
									 	<h5 class="fs-14 mb-1">Does my Seller account get affected when I update my email address?</h5>
									 	<p class="fs-14 text-gray font-weight-light">Oursoil has a 'single sign-on' policy. Any changes will reflect in your Seller account also.</p>
									 </li>
								</ol>
							</div>

							<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
								<h2 class="text-light-gray">No Data Found</h2>
							</div>		

							<div class="tab-pane fade" id="v-pills-customer" role="tabpanel" aria-labelledby="v-pills-customer-tab">
								<div class="">
									<h2 class="text-light-gray">Hello. What can we help you with?</h2>
								</div>
								<hr>
								
							</div>						
						</div>
					</div>

				</div>
			</div>	

		</div>
</section>
<?php 
    include('footer.php');
?>






