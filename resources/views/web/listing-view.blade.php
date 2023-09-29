@extends('layouts.app2')

@section('content')


<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
    @include('snippets.header')


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
				<li><span>Listing</span>
					<ul>
						<li><span>Listing Grid</span>

						</li>
						<li><span>Listing Style</span>
							<ul>

							</ul>
						</li>
						<li><span>Listing Half</span>
							<ul>

							</ul>
						</li>
						<li><span>Agent View</span>
							<ul>

							</ul>
						</li>
						<li><span>Agencies View</span>
							<ul>

							</ul>
						</li>
					</ul>
				</li>
				<li><span>Property</span>
					<ul>
						<li><span>Property</span>
							<ul>

							</ul>
						</li>
						<li><span>Listing Single</span>
							<ul>

							</ul>
						</li>
					</ul>
				</li>
				<li><span>Blog</span>
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

	<!-- Listing Single Property -->
	<section class="listing-title-area">
		<div class="container">
			<div class="row mb30">
				<div class="col-lg-7 col-xl-8">
					<div class="single_property_title mt30-767">
						<h2>Luxury Family Home</h2>
						<p>1421 Mwenge, Dar Es Salaam, Tanzania

</p>
					</div>
				</div>
				<div class="col-lg-5 col-xl-4">
					<div class="single_property_social_share">
						<div class="price float-left fn-400">
							<h2>Tsh 130,000<small>/mo</small></h2>
						</div>
						<div class="spss style2 mt20 text-right tal-400">
							<ul class="mb0">
								<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="flaticon-share"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="flaticon-printer"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7 col-lg-8">
					<div class="row">
						<div class="col-lg-12">
							<div class="spls_style_two mb30-520">
								<a class="popup-img" href="images/property/1.jpg"><img class="img-fluid w100" src="images/property/1.jpg" alt="1.jpg"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-5 col-lg-4">
					<div class="row">
						<div class="col-sm-6 col-lg-6">
							<div class="spls_style_two mb30">
								<a class="popup-img" href="images/property/2.jpg"><img class="img-fluid w100" src="images/property/2.jpg" alt="2.jpg"></a>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6">
							<div class="spls_style_two mb30">
								<a class="popup-img" href="images/property/3.jpg"><img class="img-fluid w100" src="images/property/3.jpg" alt="3.jpg"></a>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6">
							<div class="spls_style_two mb30">
								<a class="popup-img" href="images/property/4.jpg"><img class="img-fluid w100" src="images/property/4.jpg" alt="4.jpg"></a>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6">
							<div class="spls_style_two mb30">
								<a class="popup-img" href="images/property/5.jpg"><img class="img-fluid w100" src="images/property/5.jpg" alt="5.jpg"></a>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6">
							<div class="spls_style_two mb30">
								<a class="popup-img" href="images/property/6.jpg"><img class="img-fluid w100" src="images/property/6.jpg" alt="6.jpg"></a>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6">
							<div class="spls_style_two end_style mb30">
								<img class="img-fluid w100" src="images/property/7.jpg" alt="7.jpg">
								<h3 class="title"><a class="popup-img" href="images/property/7.jpg">+20</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Agent Single Grid View -->
	<section class="our-agent-single bgc-f7 pb30-991">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8">
					<div class="row">
						<div class="col-lg-12">
							<div class="listing_single_description">
								<div class="lsd_list">
									<ul class="mb0">
										<li class="list-inline-item"><a href="#">Apartment</a></li>
										<li class="list-inline-item"><a href="#">Beds: 4</a></li>
										<li class="list-inline-item"><a href="#">Baths: 2</a></li>
										<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
									</ul>
								</div>
								<h4 class="mb30">Description</h4>
						    	<p class="mb25">Evans Tower very high demand corner junior one bedroom plus a large balcony boasting full open NYC views. You need to see the views to believe them. Mint condition with new hardwood floors. Lots of closets plus washer and dryer.</p>
						    	<p class="gpara second_para white_goverlay mt10 mb10">Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>
								<div class="collapse" id="collapseExample">
								  	<div class="card card-body">
								    	<p class="mt10 mb10">Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>
								    	<p class="mt10 mb10">Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>
								  	</div>
								</div>
								<p class="overlay_close">
									<a class="text-thm fz14" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
								   	 Show More <span class="flaticon-download-1 fz12"></span>
								  	</a>
								</p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="additional_details">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb15">Property Details</h4>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<ul class="list-inline-item">
											<li><p>Property ID :</p></li>
											<li><p>Price :</p></li>
											<li><p>Property Size :</p></li>
											<li><p>Year Built :</p></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>HZ27</span></p></li>
											<li><p><span>Tsh 130,000</span></p></li>
											<li><p><span>1560 Sq Ft</span></p></li>
											<li><p><span>2016-01-09</span></p></li>
										</ul>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<ul class="list-inline-item">
											<li><p>Bedrooms :</p></li>
											<li><p>Bathrooms :</p></li>
											<li><p>Garage :</p></li>
											<li><p>Garage Size :</p></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>8</span></p></li>
											<li><p><span>4</span></p></li>
											<li><p><span>2</span></p></li>
											<li><p><span>200 SqFt</span></p></li>
										</ul>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<ul class="list-inline-item">
											<li><p>Property Type :</p></li>
											<li><p>Property Status :</p></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>Apartment</span></p></li>
											<li><p><span>For Sale</span></p></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="additional_details">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb15">Additional details</h4>
									</div>
									<div class="col-md-6 col-lg-6">
										<ul class="list-inline-item">
											<li><p>Deposit :</p></li>
											<li><p>Pool Size :</p></li>
											<li><p>Additional Rooms :</p></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>20%</span></p></li>
											<li><p><span>300 Sqft</span></p></li>
											<li><p><span>Guest Bath</span></p></li>
										</ul>
									</div>
									<div class="col-md-6 col-lg-6">
										<ul class="list-inline-item">
											<li><p>Last remodel year :</p></li>
											<li><p>Amenities :</p></li>
											<li><p>Equipment :</p></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>1987</span></p></li>
											<li><p><span>Clubhouse</span></p></li>
											<li><p><span>Grill - Gas</span></p></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="property_attachment_area">
								<h4 class="mb30">Property Attachments</h4>
								<div class="iba_container style2">
									<div class="icon_box_area style2">
										<div class="score"><span class="flaticon-document text-thm fz30"></span></div>
										<div class="details">
											<h5><span class="flaticon-download text-thm pr10"></span> Demo Word Document</h5>
										</div>
									</div>
									<div class="icon_box_area style2">
										<div class="score"><span class="flaticon-pdf text-thm fz30"></span></div>
										<div class="details">
											<h5><span class="flaticon-download text-thm pr10"></span> Demo pdf Document</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="application_statics mt30">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb10">Features</h4>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4">
										<ul class="order_list list-inline-item">
											<li><a href="#"><span class="flaticon-tick"></span>Air Conditioning</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Barbeque</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Dryer</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Gym</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Laundry</a></li>
										</ul>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4">
										<ul class="order_list list-inline-item">
											<li><a href="#"><span class="flaticon-tick"></span>Lawn</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Microwave</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Outdoor Shower</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Refrigerator</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Sauna</a></li>
										</ul>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4">
										<ul class="order_list list-inline-item">
											<li><a href="#"><span class="flaticon-tick"></span>Swimming Pool</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>TV Cable</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Washer</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>WiFi</a></li>
											<li><a href="#"><span class="flaticon-tick"></span>Window Coverings</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="application_statics mt30">
								<h4 class="mb30">Location <small class="float-right">1421 Mwenge, Dar Es Salaam, Tanzania

</small></h4>

							</div>
						</div>
						<div class="col-lg-12">
							<div class="application_statics mt30">
								<h4 class="mb30">Floor plans</h4>

							</div>
						</div>
						<div class="col-lg-12">
							<div class="shop_single_tab_content style2 mt30">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item">
									    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Property video</a>
									</li>
									<li class="nav-item">
									    <a class="nav-link" id="listing-tab" data-toggle="tab" href="#listing" role="tab" aria-controls="listing" aria-selected="false">Virtual Tour</a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent2">
									<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
										<div class="property_video">
											<div class="thumb">
												<img class="pro_img img-fluid w100" src="images/background/7.jpg" alt="7.jpg">
												<div class="overlay_icon">
													<a class="video_popup_btn red popup-youtube" href="https://www.youtube.com/watch?v=oqNZOOWF8qM"><span class="flaticon-play"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade row pl15 pl0-1199 pr15 pr0-1199" id="listing" role="tabpanel" aria-labelledby="listing-tab">
										<div class="property_video">
											<div class="thumb">
												<img class="pro_img img-fluid w100" src="images/background/7.jpg" alt="7.jpg">
												<div class="overlay_icon">
													<a class="video_popup_btn red popup-youtube" href="https://www.youtube.com/watch?v=oqNZOOWF8qM"><span class="flaticon-play"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>





						<div class="col-lg-12">
							<div class="product_single_content">
								<div class="mbp_pagination_comments mt30">
									<div class="mbp_comment_form style2">
										<h4>Write a Review</h4>
										<ul class="sspd_review">
											<li class="list-inline-item">
												<ul class="mb0">
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												</ul>
											</li>
											<li class="list-inline-item review_rating_para">Your Rating & Review</li>
										</ul>
										<form class="comments_form">
											<div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName1" aria-describedby="textHelp" placeholder="Review Title">
											</div>
											<div class="form-group">
											    <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" placeholder="Your Review"></textarea>
											</div>
											<button type="submit" class="btn btn-thm">Submit Review <span class="flaticon-right-arrow-1"></span></button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<h4 class="mt30 mb30">Similar Properties</h4>
						</div>
						<div class="col-lg-6">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item"><a href="#">Featured</a></li>
										</ul>
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
										<p><span class="flaticon-placeholder"></span> 1421 Mwenge, Dar Es Salaam, Tanzania

</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
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
						<div class="col-lg-6">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
										</ul>
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
										<p><span class="flaticon-placeholder"></span> 1421 Mwenge, Dar Es Salaam, Tanzania

</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
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
						<div class="col-lg-6">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Sale</a></li>
										</ul>
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
										<p><span class="flaticon-placeholder"></span> 1421 Mwenge, Dar Es Salaam, Tanzania

</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
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
						<div class="col-lg-6">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item"><a href="#">Featured</a></li>
										</ul>
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
										<p><span class="flaticon-placeholder"></span> 1421 Mwenge, Dar Es Salaam, Tanzania

</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
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
					</div>
				</div>
				<div class="col-lg-4 col-xl-4">
					<div class="sidebar_listing_list">
						<div class="sidebar_advanced_search_widget">
							<div class="sl_creator">
								<h4 class="mb25">Listed By</h4>
								<div class="media">
									<img class="mr-3" src="images/team/lc1.png" alt="lc1.png">
									<div class="media-body">
								    	<h5 class="mt-0 mb0">Agent Yonna</h5>
								    	<p class="mb0">+25578993648</p>
								    	<p class="mb0">yona@jmapraisers.com</p>
								    	<a class="text-thm" href="#">View My Listing</a>
								  	</div>
								</div>
							</div>
							<ul class="sasw_list mb0">
								<li class="search_area">
								    <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Your Name">
								    </div>
								</li>
								<li class="search_area">
								    <div class="form-group">
								    	<input type="number" class="form-control" id="exampleInputName2" placeholder="Phone">
								    </div>
								</li>
								<li class="search_area">
								    <div class="form-group">
								    	<input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
								    </div>
								</li>
								<li class="search_area">
		                            <div class="form-group">
		                                <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required" placeholder="I'm interest in [ Listing Single ]"></textarea>
		                            </div>
								</li>
								<li>
									<div class="search_option_button">
									    <button type="submit" class="btn btn-block btn-thm">Search</button>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="sidebar_listing_list">
						<div class="sidebar_advanced_search_widget">
							<ul class="sasw_list mb0">
								<li class="search_area">
								    <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputName1" placeholder="keyword">
								    	<label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
								    </div>
								</li>
								<li class="search_area">
								    <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
								    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
								    </div>
								</li>
								<li>
									<div class="search_option_two">
										<div class="candidate_revew_select">
											<select class="selectpicker w100 show-tick">
												<option>Status</option>
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
								<li>
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
								<li>
									<div class="small_dropdown2">
									    <div id="prncgs2" class="btn dd_btn">
									    	<span>Price</span>
									    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
									    </div>
									  	<div class="dd_content2">
										    <div class="pricing_acontent">
										    	<span id="slider-range-value1"></span>
												<span class="mt0" id="slider-range-value2"></span>
											    <div id="slider"></div>
												<!-- <input type="text" class="amount" placeholder="Tsh 52,239">
												<input type="text" class="amount2" placeholder="Tsh 985,14">
												<div class="slider-range"></div> -->
										    </div>
									  	</div>
									</div>
								</li>
								<li>
									<div class="search_option_two">
										<div class="candidate_revew_select">
											<select class="selectpicker w100 show-tick">
												<option>Bathrooms</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
											</select>
										</div>
									</div>
								</li>
								<li>
									<div class="search_option_two">
										<div class="candidate_revew_select">
											<select class="selectpicker w100 show-tick">
												<option>Bedrooms</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
											</select>
										</div>
									</div>
								</li>
								<li>
									<div class="search_option_two">
										<div class="candidate_revew_select">
											<select class="selectpicker w100 show-tick">
												<option>Garages</option>
												<option>Yes</option>
												<option>No</option>
												<option>Others</option>
											</select>
										</div>
									</div>
								</li>
								<li>
									<div class="search_option_two">
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
									</div>
								</li>
								<li class="min_area list-inline-item">
								    <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputName2" placeholder="Min Area">
								    </div>
								</li>
								<li class="max_area list-inline-item">
								    <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputName3" placeholder="Max Area">
								    </div>
								</li>
								<li>
								  	<div id="accordion" class="panel-group">
									    <div class="panel">
									      	<div class="panel-heading">
										      	<h4 class="panel-title">
										        	<a href="#panelBodyRating" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> Advanced features</a>
										        </h4>
									      	</div>
										    <div id="panelBodyRating" class="panel-collapse collapse">
										        <div class="panel-body row">
										      		<div class="col-lg-12">
										                <ul class="ui_kit_checkbox selectable-list float-left fn-400">
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck16">
																	<label class="custom-control-label" for="customCheck16">Air Conditioning</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck17">
																	<label class="custom-control-label" for="customCheck17">Barbeque</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck18">
																	<label class="custom-control-label" for="customCheck18">Gym</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck19">
																	<label class="custom-control-label" for="customCheck19">Microwave</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck20">
																	<label class="custom-control-label" for="customCheck20">TV Cable</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck21">
																	<label class="custom-control-label" for="customCheck21">Lawn</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck22">
																	<label class="custom-control-label" for="customCheck22">Refrigerator</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck23">
																	<label class="custom-control-label" for="customCheck23">Swimming Pool</label>
																</div>
										                	</li>
										                </ul>
										                <ul class="ui_kit_checkbox selectable-list float-right fn-400">
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck24">
																	<label class="custom-control-label" for="customCheck24">WiFi</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck25">
																	<label class="custom-control-label" for="customCheck25">Sauna</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck26">
																	<label class="custom-control-label" for="customCheck26">Dryer</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck27">
																	<label class="custom-control-label" for="customCheck27">Washer</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck28">
																	<label class="custom-control-label" for="customCheck28">Laundry</label>
																</div>
										                	</li>
										                	<li>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck29">
																	<label class="custom-control-label" for="customCheck29">Outdoor Shower</label>
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
										    </div>
									    </div>
									</div>
								</li>
								<li>
									<div class="search_option_button">
									    <button type="submit" class="btn btn-block btn-thm">Search</button>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="terms_condition_widget">

					</div>

					<div class="sidebar_feature_listing">
						<h4 class="title">Recently Viewed</h4>
						<div class="media">
							<img class="align-self-start mr-3" src="images/blog/fls1.jpg" alt="fls1.jpg">
							<div class="media-body">
						    	<h5 class="mt-0 post_title">Nice Room With View</h5>
						    	<a href="#">Tsh 130,000/<small>/mo</small></a>
						    	<ul class="mb0">
						    		<li class="list-inline-item">Beds: 4</li>
						    		<li class="list-inline-item">Baths: 2</li>
						    		<li class="list-inline-item">Sq Ft: 5280</li>
						    	</ul>
							</div>
						</div>
						<div class="media">
							<img class="align-self-start mr-3" src="images/blog/fls2.jpg" alt="fls2.jpg">
							<div class="media-body">
						    	<h5 class="mt-0 post_title">Villa called Archangel</h5>
						    	<a href="#">Tsh 130,000<small>/mo</small></a>
						    	<ul class="mb0">
						    		<li class="list-inline-item">Beds: 4</li>
						    		<li class="list-inline-item">Baths: 2</li>
						    		<li class="list-inline-item">Sq Ft: 5280</li>
						    	</ul>
							</div>
						</div>
						<div class="media">
							<img class="align-self-start mr-3" src="images/blog/fls3.jpg" alt="fls3.jpg">
							<div class="media-body">
						    	<h5 class="mt-0 post_title">Sunset Studio</h5>
						    	<a href="#">Tsh 130,000<small>/mo</small></a>
						    	<ul class="mb0">
						    		<li class="list-inline-item">Beds: 4</li>
						    		<li class="list-inline-item">Baths: 2</li>
						    		<li class="list-inline-item">Sq Ft: 5280</li>
						    	</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
	@include('snippets.footer')

<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->
@endsection
