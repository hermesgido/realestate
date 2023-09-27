@extends('layouts.app2')

@section('content')

<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	@section('snippets.header')

    @endsection
	<!-- Modal -->
	<div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	</div>
		      	<div class="modal-body container pb20">
		      		<div class="row">
		      			<div class="col-lg-12">
				    		<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
							  	<li class="nav-item">
							    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
							  	</li>
							  	<li class="nav-item">
							    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
							  	</li>
							</ul>
		      			</div>
		      		</div>
					<div class="tab-content container" id="myTabContent">
					  	<div class="row mt25 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="login_thumb">
					  				<img class="img-fluid w100" src="images/resource/login.jpg" alt="login.jpg">
					  			</div>
					  		</div>
					  		<div class="col-lg-6 col-xl-6">
								<div class="login_form">
									<form action="#">
										<div class="heading">
											<h4>Login</h4>
										</div>
										<div class="row mt25">
											<div class="col-lg-12">
												<button type="submit" class="btn btn-fb btn-block"><i class="fa fa-facebook float-left mt5"></i> Login with Facebook</button>
											</div>
											<div class="col-lg-12">
												<button type="submit" class="btn btn-googl btn-block"><i class="fa fa-google float-left mt5"></i> Login with Google</button>
											</div>
										</div>
										<hr>
										<div class="input-group mb-2 mr-sm-2">
										    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="User Name Or Email">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-user"></i></div>
										    </div>
										</div>
										<div class="input-group form-group">
									    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="exampleCheck1">
											<label class="custom-control-label" for="exampleCheck1">Remember me</label>
											<a class="btn-fpswd float-right" href="#">Lost your password?</a>
										</div>
										<button type="submit" class="btn btn-log btn-block btn-thm">Log In</button>
										<p class="text-center">Don't have an account? <a class="text-thm" href="#">Register</a></p>
									</form>
								</div>
					  		</div>
					  	</div>
					  	<div class="row mt25 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="regstr_thumb">
					  				<img class="img-fluid w100" src="images/resource/regstr.jpg" alt="regstr.jpg">
					  			</div>
					  		</div>
					  		<div class="col-lg-6 col-xl-6">
								<div class="sign_up_form">
									<div class="heading">
										<h4>Register</h4>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-lg-12">
												<button type="submit" class="btn btn-block btn-fb"><i class="fa fa-facebook float-left mt5"></i> Login with Facebook</button>
											</div>
											<div class="col-lg-12">
												<button type="submit" class="btn btn-block btn-googl"><i class="fa fa-google float-left mt5"></i> Login with Google</button>
											</div>
										</div>
										<hr>
										<div class="form-group input-group">
										    <input type="text" class="form-control" id="exampleInputName" placeholder="User Name">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-user"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Re-enter password">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div>
										<div class="form-group ui_kit_select_search mb0">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="SelectRole">Single User</option>
												<option data-tokens="Agent/Agency">Agent</option>
												<option data-tokens="SingleUser">Multi User</option>
											</select>
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="exampleCheck2">
											<label class="custom-control-label" for="exampleCheck2">I have read and accept the Terms and Privacy Policy?</label>
										</div>
										<button type="submit" class="btn btn-log btn-block btn-thm">Sign Up</button>
										<p class="text-center">Already have an account? <a class="text-thm" href="#">Log In</a></p>
									</form>
								</div>
					  		</div>
					  	</div>
					</div>
		      	</div>
		    </div>
		</div>
	</div>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="d-flex justify-content-between">
					<a class="mobile-menu-trigger" href="#menu"><img src="images/dark-nav-icon.svg" alt=""></a>
					<a class="nav_logo_img" href=""><img class="img-fluid mt20" src="images/header-logo2.png" alt="header-logo2.png"></a>
					<a class="mobile-menu-reg-link" href=""><span class="flaticon-user"></span></a>
				</div>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li><span>Home</span>
	                <ul>

	                </ul>
				</li>


				<li><a href="">Contact</a></li>
				<li><a href=""><span class="flaticon-user"></span> Login</a></li>
				<li><a href=""><span class="flaticon-edit"></span> Register</a></li>
				<li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="#"><span class="flaticon-plus"></span> Create Listing</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home Design -->
	<section class="home-one home1-overlay home1_bgi1">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-12">
					<div class="home_content">
						<div class="home-text text-center">
							<h2 class="fz55">Find Your Dream Office</h2>
							<p class="fz18 color-white">From as low as Ths 100,000 per day with limited time offer discounts.</p>
						</div>
						<div class="home_adv_srch_opt">
							<ul class="nav nav-pills" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Buy</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Rent</a>
								</li>
							</ul>
							<div class="tab-content home1_adsrchfrm" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									<div class="home1-advnc-search">
										<ul class="h1ads_1st_list mb0">
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Enter keyword...">
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_two">
													<div class="candidate_revew_select">
														<select class="selectpicker w100 show-tick">
															<option>Property Type</option>
															<option>Apartment</option>
															<option>Bungalow</option>
															<option>Condo</option>
															<option>House</option>
															<option>Land</option>
															<option>Single Family</option>
														</select>
													</div>
												</div>
											</li>
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
											    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="small_dropdown2">
												    <div id="prncgs" class="btn dd_btn">
												    	<span>Price</span>
												    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
												    </div>
												  	<div class="dd_content2">
													    <div class="pricing_acontent">
															<!-- <input type="text" class="amount" placeholder="Tsh 52,239">
															<input type="text" class="amount2" placeholder="Tsh 985,14">
															<div class="slider-range"></div> -->
													    	<span id="slider-range-value1"></span>
															<span id="slider-range-value2"></span>
														    <div id="slider"></div>
													    </div>
												  	</div>
												</div>
											</li>
											<li class="custome_fields_520 list-inline-item">
												<div class="navbered">
												  	<div class="mega-dropdown">
													    <span id="show_advbtn" class="dropbtn">Advanced <i class="flaticon-more pl10 flr-520"></i></span>
													    <div class="dropdown-content">
													      	<div class="row p15">
													      		<div class="col-lg-12">
													      			<h4 class="text-thm3">Amenities</h4>
													      		</div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck1">
																				<label class="custom-control-label" for="customCheck1">Air Conditioning</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck2">
																				<label class="custom-control-label" for="customCheck2">Lawn</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck3">
																				<label class="custom-control-label" for="customCheck3">Swimming Pool</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck4">
																				<label class="custom-control-label" for="customCheck4">Barbeque</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck5">
																				<label class="custom-control-label" for="customCheck5">Microwave</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck6">
																				<label class="custom-control-label" for="customCheck6">TV Cable</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck7">
																				<label class="custom-control-label" for="customCheck7">Dryer</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck8">
																				<label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck9">
																				<label class="custom-control-label" for="customCheck9">Washer</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck10">
																				<label class="custom-control-label" for="customCheck10">Gym</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck11">
																				<label class="custom-control-label" for="customCheck11">Refrigerator</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck12">
																				<label class="custom-control-label" for="customCheck12">WiFi</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck13">
																				<label class="custom-control-label" for="customCheck13">Laundry</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck14">
																				<label class="custom-control-label" for="customCheck14">Sauna</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck15">
																				<label class="custom-control-label" for="customCheck15">Window Coverings</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
													      	</div>
													      	<div class="row p15 pt0-xsd">
													      		<div class="col-lg-11 col-xl-10">
													      			<ul class="apeartment_area_list mb0">
													      				<li class="list-inline-item">
																			<div class="candidate_revew_select">
																				<select class="selectpicker w100 show-tick">
																					<option>Bathrooms</option>
																					<option>1</option>
																					<option>2</option>
																					<option>3</option>
																					<option>4</option>
																					<option>5</option>
																					<option>6</option>
																					<option>7</option>
																					<option>8</option>
																				</select>
																			</div>
													      				</li>
													      				<li class="list-inline-item">
																			<div class="candidate_revew_select">
																				<select class="selectpicker w100 show-tick">
																					<option>Bedrooms</option>
																					<option>1</option>
																					<option>2</option>
																					<option>3</option>
																					<option>4</option>
																					<option>5</option>
																					<option>6</option>
																					<option>7</option>
																					<option>8</option>
																				</select>
																			</div>
													      				</li>
													      				<li class="list-inline-item">
																			<div class="candidate_revew_select">
																				<select class="selectpicker w100 show-tick">
																					<option>Year built</option>
																					<option>2013</option>
																					<option>2014</option>
																					<option>2015</option>
																					<option>2016</option>
																					<option>2017</option>
																					<option>2018</option>
																					<option>2019</option>
																					<option>2020</option>
																				</select>
																			</div>
													      				</li>
													      				<li class="list-inline-item">
																			<div class="candidate_revew_select">
																				<select class="selectpicker w100 show-tick">
																					<option>Built-up Area</option>
																					<option>Adana</option>
																					<option>Ankara</option>
																					<option>Antalya</option>
																					<option>Bursa</option>
																					<option>Bodrum</option>
																					<option>Gaziantep</option>
																					<option>İstanbul</option>
																					<option>İzmir</option>
																					<option>Konya</option>
																				</select>
																			</div>
													      				</li>
													      			</ul>
													      		</div>
													      		<div class="col-lg-1 col-xl-2">
													      			<div class="mega_dropdown_content_closer">
														      			<h5 class="text-thm text-right mt15"><span id="hide_advbtn" class="curp">Hide</span></h5>
													      			</div>
													      		</div>
													      	</div>
													    </div>
													</div>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm">Search</button>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
									<div class="home1-advnc-search">
										<ul class="h1ads_1st_list mb0">
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputName2" placeholder="Enter keyword...">
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_two">
													<div class="candidate_revew_select">
														<select class="selectpicker w100 show-tick">
															<option>Property Type</option>
															<option>Apartment</option>
															<option>Bungalow</option>
															<option>Condo</option>
															<option>House</option>
															<option>Land</option>
															<option>Single Family</option>
														</select>
													</div>
												</div>
											</li>
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputEmail3" placeholder="Location">
											    	<label for="exampleInputEmail3"><span class="flaticon-maps-and-flags"></span></label>
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="small_dropdown2">
												    <div id="prncgs2" class="btn dd_btn">
												    	<span>Price</span>
												    	<label for="exampleInputEmail4"><span class="fa fa-angle-down"></span></label>
												    </div>
												  	<div class="dd_content2">
													    <div class="pricing_acontent">
															<input type="text" class="amount" placeholder="Tsh 52,239">
															<input type="text" class="amount2" placeholder="Tsh 985,14">
															<div class="slider-range"></div>
													    </div>
												  	</div>
												</div>
											</li>
											<li class="custome_fields_520 list-inline-item">
												<div class="navbered">
												  	<div class="mega-dropdown">
													    <span id="show_advbtn2" class="dropbtn">Advanced <i class="flaticon-more pl10 flr-520"></i></span>
													    <div class="dropdown-content">
													      	<div class="row p15">
													      		<div class="col-lg-12">
													      			<h4 class="text-thm3">Amenities</h4>
													      		</div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck16">
																				<label class="custom-control-label" for="customCheck16">Air Conditioning</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck17">
																				<label class="custom-control-label" for="customCheck17">Lawn</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck18">
																				<label class="custom-control-label" for="customCheck18">Swimming Pool</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck19">
																				<label class="custom-control-label" for="customCheck19">Barbeque</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck20">
																				<label class="custom-control-label" for="customCheck20">Microwave</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck21">
																				<label class="custom-control-label" for="customCheck21">TV Cable</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck22">
																				<label class="custom-control-label" for="customCheck22">Dryer</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck23">
																				<label class="custom-control-label" for="customCheck23">Outdoor Shower</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck24">
																				<label class="custom-control-label" for="customCheck24">Washer</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck25">
																				<label class="custom-control-label" for="customCheck25">Gym</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck26">
																				<label class="custom-control-label" for="customCheck26">Refrigerator</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck27">
																				<label class="custom-control-label" for="customCheck27">WiFi</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck28">
																				<label class="custom-control-label" for="customCheck28">Laundry</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck29">
																				<label class="custom-control-label" for="customCheck29">Sauna</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck30">
																				<label class="custom-control-label" for="customCheck30">Window Coverings</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
													      	</div>
													      	<div class="row p15 pt0-xsd">
													      		<div class="col-lg-11 col-xl-10">
													      			<ul class="apeartment_area_list mb0">
													      				<li class="list-inline-item">
																			<div class="candidate_revew_select">
																				<select class="selectpicker w100 show-tick">
																					<option>Bathrooms</option>
																					<option>1</option>
																					<option>2</option>
																					<option>3</option>
																					<option>4</option>
																					<option>5</option>
																					<option>6</option>
																					<option>7</option>
																					<option>8</option>
																				</select>
																			</div>
													      				</li>
													      				<li class="list-inline-item">
																			<div class="candidate_revew_select">
																				<select class="selectpicker w100 show-tick">
																					<option>Bedrooms</option>
																					<option>1</option>
																					<option>2</option>
																					<option>3</option>
																					<option>4</option>
																					<option>5</option>
																					<option>6</option>
																					<option>7</option>
																					<option>8</option>
																				</select>
																			</div>
													      				</li>
													      				<li class="list-inline-item">
																			<div class="candidate_revew_select">
																				<select class="selectpicker w100 show-tick">
																					<option>Year built</option>
																					<option>2013</option>
																					<option>2014</option>
																					<option>2015</option>
																					<option>2016</option>
																					<option>2017</option>
																					<option>2018</option>
																					<option>2019</option>
																					<option>2020</option>
																				</select>
																			</div>
													      				</li>
													      				<li class="list-inline-item">
																			<div class="candidate_revew_select">
																				<select class="selectpicker w100 show-tick">
																					<option>Built-up Area</option>
																					<option>Adana</option>
																					<option>Ankara</option>
																					<option>Antalya</option>
																					<option>Bursa</option>
																					<option>Bodrum</option>
																					<option>Gaziantep</option>
																					<option>İstanbul</option>
																					<option>İzmir</option>
																					<option>Konya</option>
																				</select>
																			</div>
													      				</li>
													      			</ul>
													      		</div>
													      		<div class="col-lg-1 col-xl-2">
													      			<div class="mega_dropdown_content_closer">
														      			<h5 class="text-thm text-right mt15"><span id="hide_advbtn2" class="curp">Hide</span></h5>
													      			</div>
													      		</div>
													      	</div>
													    </div>
													</div>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm">Search</button>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Feature Properties -->
	<section id="feature-property" class="feature-property bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a href="#feature-property">
			    	<div class="mouse_scroll">
	        		<div class="icon">
			    		<h4>Scroll Down</h4>
			    		<p>to discover more</p>
	        		</div>
	        		<div class="thumb">
	        			<img src="images/resource/mouse.png" alt="mouse.png">
	        		</div>
			    	</div>
			    </a>
				</div>
			</div>
		</div>
		<div class="container ovh">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center mb40">
						<h2>Featured Properties</h2>
						<p>Handpicked properties by our team.</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="feature_property_slider">
						<div class="item">
							<a href="{{ route('listingView') }}">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
												<li class="list-inline-item"><span>Featured</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">Tsh 130,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Agent Yonna</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="{{ route('listingView') }}">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">Tsh 130,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Agent Yonna</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Sale</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">Tsh 130,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Agent Yonna</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="{{ route('listingView') }}">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
												<li class="list-inline-item"><span>Featured</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">Tsh 130,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Agent Yonna</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="{{ route('listingView') }}">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">Tsh 130,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Agent Yonna</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Sale</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">Tsh 130,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Agent Yonna</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="{{ route('listingView') }}">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
												<li class="list-inline-item"><span>Featured</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">Tsh 130,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Agent Yonna</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="{{ route('listingView') }}">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">Tsh 130,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Agent Yonna</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Sale</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">Tsh 130,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Agent Yonna</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="{{ route('listingView') }}">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
												<li class="list-inline-item"><span>Featured</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">Tsh 130,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Agent Yonna</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="{{ route('listingView') }}">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">Tsh 130,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Agent Yonna</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Sale</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">Tsh 130,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Agent Yonna</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Property Cities -->
	<section id="property-city" class="property-city pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Find Properties in These Cities</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="feat_property home7 style4">
						<div class="thumb">
							<div class="fp_single_item_slider">
								<div class="item">
									<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
								</div>
								<div class="item">
									<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
								</div>
							</div>
							<div class="thmb_cntnt style2">
								<ul class="tag mb0">
									<li class="list-inline-item"><a href="#">For Rent</a></li>
									<li class="list-inline-item"><a href="#">Featured</a></li>
								</ul>
							</div>
							<div class="thmb_cntnt style3">
								<ul class="icon mb0">
									<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
									<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								</ul>
								<a class="fp_price" href="#">Tsh 130,000<small>/mo</small></a>
							</div>
						</div>
						<div class="details">
							<div class="tc_content">
								<p class="text-thm">Apartment</p>
								<h4>Renovated Apartment</h4>
								<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
								<ul class="prop_details mb0">
									<li class="list-inline-item"><a class="text-thm3" href="#">Beds: 4</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Baths: 2</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 5280</a></li>
								</ul>
							</div>
							<div class="fp_footer">
								<ul class="fp_meta float-left mb0">
									<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
									<li class="list-inline-item"><a href="#">Agent Yonna</a></li>
								</ul>
								<div class="fp_pdate float-right">4 years ago</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="feat_property home7 style4">
						<div class="thumb">
							<div class="fp_single_item_slider">
								<div class="item">
									<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
								</div>
								<div class="item">
									<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
								</div>
							</div>
							<div class="thmb_cntnt style2">
								<ul class="tag mb0">
									<li class="list-inline-item"><a href="#">For Rent</a></li>
									<li class="list-inline-item dn"></li>
								</ul>
							</div>
							<div class="thmb_cntnt style3">
								<ul class="icon mb0">
									<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
									<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								</ul>
								<a class="fp_price" href="#">Tsh 130,000<small>/mo</small></a>
							</div>
						</div>
						<div class="details">
							<div class="tc_content">
								<p class="text-thm">Villa</p>
								<h4>Gorgeous Villa Bay View</h4>
								<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
								<ul class="prop_details mb0">
									<li class="list-inline-item"><a class="text-thm3" href="#">Beds: 4</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Baths: 2</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 5280</a></li>
								</ul>
							</div>
							<div class="fp_footer">
								<ul class="fp_meta float-left mb0">
									<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
									<li class="list-inline-item"><a href="#">Agent Yonna</a></li>
								</ul>
								<div class="fp_pdate float-right">4 years ago</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="feat_property home7 style4">
						<div class="thumb">
							<div class="fp_single_item_slider">
								<div class="item">
									<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
								</div>
								<div class="item">
									<img class="img-whp" src="images/property/fp4.jpg" alt="fp4.jpg">
								</div>
							</div>
							<div class="thmb_cntnt style2">
								<ul class="tag mb0">
									<li class="list-inline-item"><a href="#">For Sale</a></li>
									<li class="list-inline-item dn"></li>
								</ul>
							</div>
							<div class="thmb_cntnt style3">
								<ul class="icon mb0">
									<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
									<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								</ul>
								<a class="fp_price" href="#">Tsh 130,000<small>/mo</small></a>
							</div>
						</div>
						<div class="details">
							<div class="tc_content">
								<p class="text-thm">Single Family Home</p>
								<h4>Luxury Family Home</h4>
								<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
								<ul class="prop_details mb0">
									<li class="list-inline-item"><a class="text-thm3" href="#">Beds: 4</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Baths: 2</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 5280</a></li>
								</ul>
							</div>
							<div class="fp_footer">
								<ul class="fp_meta float-left mb0">
									<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
									<li class="list-inline-item"><a href="#">Agent Yonna</a></li>
								</ul>
								<div class="fp_pdate float-right">4 years ago</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="feat_property home7 style4">
						<div class="thumb">
							<div class="fp_single_item_slider">
								<div class="item">
									<img class="img-whp" src="images/property/fp4.jpg" alt="fp4.jpg">
								</div>
								<div class="item">
									<img class="img-whp" src="images/property/fp5.jpg" alt="fp5.jpg">
								</div>
							</div>
							<div class="thmb_cntnt style2">
								<ul class="tag mb0">
									<li class="list-inline-item"><a href="#">For Rent</a></li>
									<li class="list-inline-item"><a href="#">Featured</a></li>
								</ul>
							</div>
							<div class="thmb_cntnt style3">
								<ul class="icon mb0">
									<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
									<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								</ul>
								<a class="fp_price" href="#">Tsh 130,000<small>/mo</small></a>
							</div>
						</div>
						<div class="details">
							<div class="tc_content">
								<p class="text-thm">Apartment</p>
								<h4>Luxury Family Home</h4>
								<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
								<ul class="prop_details mb0">
									<li class="list-inline-item"><a class="text-thm3" href="#">Beds: 4</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Baths: 2</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 5280</a></li>
								</ul>
							</div>
							<div class="fp_footer">
								<ul class="fp_meta float-left mb0">
									<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
									<li class="list-inline-item"><a href="#">Agent Yonna</a></li>
								</ul>
								<div class="fp_pdate float-right">4 years ago</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="feat_property home7 style4">
						<div class="thumb">
							<div class="fp_single_item_slider">
								<div class="item">
									<img class="img-whp" src="images/property/fp15.jpg" alt="fp15.jpg">
								</div>
								<div class="item">
									<img class="img-whp" src="images/property/fp16.jpg" alt="fp16.jpg">
								</div>
							</div>
							<div class="thmb_cntnt style2">
								<ul class="tag mb0">
									<li class="list-inline-item"><a href="#">For Rent</a></li>
									<li class="list-inline-item"><a href="#">Featured</a></li>
								</ul>
							</div>
							<div class="thmb_cntnt style3">
								<ul class="icon mb0">
									<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
									<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								</ul>
								<a class="fp_price" href="#">Tsh 130,000<small>/mo</small></a>
							</div>
						</div>
						<div class="details">
							<div class="tc_content">
								<p class="text-thm">Apartment</p>
								<h4>Renovated Apartment</h4>
								<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
								<ul class="prop_details mb0">
									<li class="list-inline-item"><a class="text-thm3" href="#">Beds: 4</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Baths: 2</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 5280</a></li>
								</ul>
							</div>
							<div class="fp_footer">
								<ul class="fp_meta float-left mb0">
									<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
									<li class="list-inline-item"><a href="#">Agent Yonna</a></li>
								</ul>
								<div class="fp_pdate float-right">4 years ago</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="feat_property home7 style4">
						<div class="thumb">
							<div class="fp_single_item_slider">
								<div class="item">
									<img class="img-whp" src="images/property/fp16.jpg" alt="fp16.jpg">
								</div>
								<div class="item">
									<img class="img-whp" src="images/property/fp17.jpg" alt="fp17.jpg">
								</div>
							</div>
							<div class="thmb_cntnt style2">
								<ul class="tag mb0">
									<li class="list-inline-item"><a href="#">For Rent</a></li>
									<li class="list-inline-item dn"></li>
								</ul>
							</div>
							<div class="thmb_cntnt style3">
								<ul class="icon mb0">
									<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
									<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								</ul>
								<a class="fp_price" href="#">Tsh 130,000<small>/mo</small></a>
							</div>
						</div>
						<div class="details">
							<div class="tc_content">
								<p class="text-thm">Villa</p>
								<h4>Gorgeous Villa Bay View</h4>
								<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
								<ul class="prop_details mb0">
									<li class="list-inline-item"><a class="text-thm3" href="#">Beds: 4</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Baths: 2</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 5280</a></li>
								</ul>
							</div>
							<div class="fp_footer">
								<ul class="fp_meta float-left mb0">
									<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
									<li class="list-inline-item"><a href="#">Agent Yonna</a></li>
								</ul>
								<div class="fp_pdate float-right">4 years ago</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="feat_property home7 style4">
						<div class="thumb">
							<div class="fp_single_item_slider">
								<div class="item">
									<img class="img-whp" src="images/property/fp17.jpg" alt="fp17.jpg">
								</div>
								<div class="item">
									<img class="img-whp" src="images/property/fp18.jpg" alt="fp18.jpg">
								</div>
							</div>
							<div class="thmb_cntnt style2">
								<ul class="tag mb0">
									<li class="list-inline-item"><a href="#">For Sale</a></li>
									<li class="list-inline-item dn"></li>
								</ul>
							</div>
							<div class="thmb_cntnt style3">
								<ul class="icon mb0">
									<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
									<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								</ul>
								<a class="fp_price" href="#">Tsh 130,000<small>/mo</small></a>
							</div>
						</div>
						<div class="details">
							<div class="tc_content">
								<p class="text-thm">Single Family Home</p>
								<h4>Luxury Family Home</h4>
								<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
								<ul class="prop_details mb0">
									<li class="list-inline-item"><a class="text-thm3" href="#">Beds: 4</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Baths: 2</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 5280</a></li>
								</ul>
							</div>
							<div class="fp_footer">
								<ul class="fp_meta float-left mb0">
									<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
									<li class="list-inline-item"><a href="#">Agent Yonna</a></li>
								</ul>
								<div class="fp_pdate float-right">4 years ago</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="feat_property home7 style4">
						<div class="thumb">
							<div class="fp_single_item_slider">
								<div class="item">
									<img class="img-whp" src="images/property/fp18.jpg" alt="fp18.jpg">
								</div>
								<div class="item">
									<img class="img-whp" src="images/property/fp19.jpg" alt="fp19.jpg">
								</div>
							</div>
							<div class="thmb_cntnt style2">
								<ul class="tag mb0">
									<li class="list-inline-item"><a href="#">For Rent</a></li>
									<li class="list-inline-item"><a href="#">Featured</a></li>
								</ul>
							</div>
							<div class="thmb_cntnt style3">
								<ul class="icon mb0">
									<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
									<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								</ul>
								<a class="fp_price" href="#">Tsh 130,000<small>/mo</small></a>
							</div>
						</div>
						<div class="details">
							<div class="tc_content">
								<p class="text-thm">Apartment</p>
								<h4>Luxury Family Home</h4>
								<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
								<ul class="prop_details mb0">
									<li class="list-inline-item"><a class="text-thm3" href="#">Beds: 4</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Baths: 2</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 5280</a></li>
								</ul>
							</div>
							<div class="fp_footer">
								<ul class="fp_meta float-left mb0">
									<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
									<li class="list-inline-item"><a href="#">Agent Yonna</a></li>
								</ul>
								<div class="fp_pdate float-right">4 years ago</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="feat_property home7 style4">
						<div class="thumb">
							<div class="fp_single_item_slider">
								<div class="item">
									<img class="img-whp" src="images/property/fp19.jpg" alt="fp19.jpg">
								</div>
								<div class="item">
									<img class="img-whp" src="images/property/fp20.jpg" alt="fp20.jpg">
								</div>
							</div>
							<div class="thmb_cntnt style2">
								<ul class="tag mb0">
									<li class="list-inline-item"><a href="#">For Rent</a></li>
									<li class="list-inline-item dn"></li>
								</ul>
							</div>
							<div class="thmb_cntnt style3">
								<ul class="icon mb0">
									<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
									<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								</ul>
								<a class="fp_price" href="#">Tsh 130,000<small>/mo</small></a>
							</div>
						</div>
						<div class="details">
							<div class="tc_content">
								<p class="text-thm">Apartment</p>
								<h4>Renovated Apartment</h4>
								<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
								<ul class="prop_details mb0">
									<li class="list-inline-item"><a class="text-thm3" href="#">Beds: 4</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Baths: 2</a></li>
									<li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 5280</a></li>
								</ul>
							</div>
							<div class="fp_footer">
								<ul class="fp_meta float-left mb0">
									<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
									<li class="list-inline-item"><a href="#">Agent Yonna</a></li>
								</ul>
								<div class="fp_pdate float-right">4 years ago</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 mt20">
					<div class="mbp_pagination">
						<ul class="page_navigation">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active" aria-current="page">
								<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
							</li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">...</a></li>
							<li class="page-item"><a class="page-link" href="#">29</a></li>
							<li class="page-item">
								<a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Why Chose Us -->
	<section id="why-chose" class="whychose_us bgc-f7 pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Why Choose Us</h2>
						<p>We provide full service at every step.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-high-five"></span>
						</div>
						<div class="details">
							<h4>Trusted By Thousands</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-home-1"></span>
						</div>
						<div class="details">
							<h4>Wide Renge Of Properties</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-profit"></span>
						</div>
						<div class="details">
							<h4>Financing Made Easy</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Start Partners -->
	<section class="start-partners bgc-thm pt50 pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="start_partner tac-smd">
						<h2>Become a Real Estate Agent</h2>
						<p>We only work with the best companies around the country</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="parner_reg_btn text-right tac-smd">
						<a class="btn btn-thm2" href="#">Register Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
@include('snippets.footer')

@endsection

