@extends('layouts.app2')

@section('content')

<style>
    .dashboard_sidebar_menu{
        width: 50px;
    }
</style>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->


    <div class="dashboard_sidebar_menu dn-992">
	    <ul class="sidebar-menu">
	   		<li class="header"><img src="/images/header-logo.png" alt="header-logo2.png"></li>
	   		<li class="title"><span>Main</span></li>
	    	<li class="treeview"><a href=""><i class="flaticon-layers"></i><span> Dashboard</span></a></li>
	      	<li class="treeview">
		        <a href=""><i class="flaticon-home"></i> 2<span>Properties</span><i class="fa fa-angle-down pull-right"></i></a>

	      	</li>
              <li class="treeview">
		        <a href=""><i class="flaticon-home"></i> <span>Add Properties</span><i class="fa fa-angle-down pull-right"></i></a>

	      	</li>
	      	<li><a href=""><i class="flaticon-heart"></i> <span> Agents</span></a></li>
	      	<li><a href=""><i class="flaticon-magnifying-glass"></i> <span>Saved Search</span></a></li>
	     	<li class="treeview">
		        <a href=""><i class="flaticon-chat"></i><span> Reviews</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="#"><i class="fa fa-circle"></i>Reviews</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i> Visitor Reviews</a></li>
		        </ul>
	      	</li>
	   		<li class="title"><span>Manage Account</span></li>

		    <li><a href=""><i class="flaticon-logout"></i> <span>Logout</span></a></li>
	    </ul>
    </div>

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-lg-9 col-xl-10 maxw100flex-992">
					<div class="row">
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-992">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
									<ul id="myDropdown" class="dropdown-content">
										<li class="active"><a href=""><span class="flaticon-layers"></span> Dashboard</a></li>

										<li><a href=""><span class="flaticon-logout"></span> Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 mb10">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Howdy, Ali!</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one">
								<div class="icon"><span class="flaticon-home"></span></div>
								<div class="detais">
									<div class="timer">37</div>
									<p>All Properties</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one style2">
								<div class="icon"><span class="flaticon-view"></span></div>
								<div class="detais">
									<div class="timer">24</div>
									<p>Total Customers</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one style3">
								<div class="icon"><span class="flaticon-chat"></span></div>
								<div class="detais">
									<div class="timer">12</div>
									<p>Total Visitor Reviews</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one style4">
								<div class="icon"><span class="flaticon-heart"></span></div>
								<div class="detais">
									<div class="timer">18</div>
									<p>Total Agents</p>
								</div>
							</div>
						</div>
						<div class="col-xl-7">
							<div class="application_statics">
								<h4>View Statistics</h4>
								<div class="c_container"></div>
							</div>
						</div>
						<div class="col-xl-5">

						</div>
					</div>
					<div class="row mt50">
						<div class="col-lg-6 offset-lg-3">
							<div class="copyright-widget text-center">
								<p>© 2023 JM Apraisers. Made with love.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


    <a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
    </div>
    <!-- Wrapper End -->
    @endsection


