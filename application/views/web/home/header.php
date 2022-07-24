
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search, agency, agent, classified, directory, google maps, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
<meta name="description" content="Houzing - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="<?php echo base_url().'assets/web/';?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/web/';?>css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="<?php echo base_url().'assets/web/';?>css/responsive.css">
<!-- Title -->
<title>Houzing - Real Estate HTML Template</title>
<!-- Favicon -->
<link href="<?php echo base_url().'assets/web/';?>images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo base_url().'assets/web/';?>images/favicon.ico" sizes="128x128" rel="shortcut icon" />
</head>
<body>
<div class="wrapper">


	<!-- Main Header Nav --> 
  <header class="header-nav menu_style_home_one style2 navbar-scrolltofixed stricky main-menu">
    <div class="container"><!-- Ace Responsive Menu -->
	    <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
          <img class="nav_logo_img img-fluid" src="<?php echo base_url().'assets/web/';?>images/header-logo.svg" alt="header-logo.svg">
          <button type="button" id="menu-btn">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <a href="index.html" class="navbar_brand float-left dn-md">
          <img class="logo1 img-fluid" src="<?php echo base_url().'assets/web/';?>images/header-logo2.svg" alt="header-logo.svg">
          <img class="logo2 img-fluid" src="<?php echo base_url().'assets/web/';?>images/header-logo2.svg" alt="header-logo2.svg">
          <span>Houzing</span>
        </a>
        <!-- Responsive Menu Structure-->
        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
          <li> <a href="<?php echo base_url().'home';?>"><span class="title">Home</span></a></li>
          <li> <a href="<?php echo base_url().'home/agent_listing';?>"><span class="title">Agent Listing</span></a></li>
          <li> <a href="<?php echo base_url().'home/property_listing';?>"><span class="title">Property Listing</span></a></li>
          <li> <a href="<?php echo base_url().'home/about_us';?>"><span class="title">About Us</span></a></li>
          <li><a href="<?php echo base_url().'home/contact'?>">Contact Us</a></li>
          <li class="list-inline-item list_c"><a href="#"><span class="flaticon-phone mr7"></span> <span>(+88) 1990 6886</span></a></li>
          <li class="list-inline-item list_s"><a href="#" class="btn" data-toggle="modal" data-target="#logInModal"><span class="flaticon-user"></span></a></li>
          <li class="list-inline-item add_listing"><a href="page-dashboard-new-property.html"><span class="icon flaticon-button"></span><span class="dn-lg"> Create Listing</span></a></li>
        </ul>
	    </nav>
		</div>
	</header>
  <!-- Modal -->
  <div class="sign_up_modal modal fade" id="logInModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body container pb30 pl0 pr0 pt0">
          <div class="row">
            <div class="col-lg-12">
              <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sign in</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content container" id="myTabContent">
            <div class="row mt30 tab-pane fade show active pl20 pr20" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="col-lg-12">
                <div class="login_form">
                  <form action="#">
                    <div class="mb-2 mr-sm-2">
                      <label for="formGroupExampleInput" class="form-label mb0">Login</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ali Tufa..">
                    </div>
                    <div class="form-group mb5">
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                      <label class="custom-control-label" for="exampleCheck2">Remember me</label>
                      <a class="btn-fpswd float-right text-thm" href="#">Forgot</a>
                    </div>
                    <button type="submit" class="btn btn-log btn-block btn-thm mt20">Sign in</button>
                    <div class="row mt10">
                      <div class="col-lg-12">
                        <div class="user_log_info">
                          <p>Username: <span>agency or agent</span></p>
                          <p>Password: <span>demo</span></p>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="row mt30 tab-pane fade pl20 pr20" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="col-lg-12">
                <div class="sign_up_form">
                  <form action="#">
                    <div class="form-group input-group">
                      <input type="text" class="form-control" placeholder="Login">
                    </div>
                    <div class="form-group input-group">
                      <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="form-group input-group">
                      <input type="text" class="form-control" placeholder="Last name">
                    </div>
                    <div class="form-group input-group">
                      <select class="selectpicker form-control" data-width="100%">
                        <option data-tokens="banking">User role</option>
                        <option data-tokens="digital&creative">User role 2</option>
                        <option data-tokens="retail">User role 3</option>
                        <option data-tokens="humanresource">User role 4</option>
                      </select>
                    </div>
                    <div class="form-group input-group">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group input-group mb20">
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group input-group mb30">
                      <input type="password" class="form-control" placeholder="Re-enter password">
                    </div>
                    <button type="submit" class="btn btn-signup btn-block btn-dark mb0">REGISTER</button>
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
        <div class="main_logo_home2 text-center"> <img class="nav_logo_img img-fluid mt10" src="<?php echo base_url().'assets/web/';?>images/header-logo.svg" alt="header-logo.svg"> <span class="mt15">Plotbazzar</span> </div>
        <ul class="menu_bar_home2">
          <li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" href="#"></a></li>
          <li class="list-inline-item"><a class="muser_icon" href="#" data-toggle="modal" data-target="#logInModal"><span class="flaticon-user"></span></a></li>
          <li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
        </ul>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
      <ul>
        <li><a href="<?php echo base_url().'home';?>">Home</a></li>
		<li><a href="<?php echo base_url().'home/agent_listing';?>">Agent Listing</a></li>
		<li><a href="<?php echo base_url().'home/property_listing';?>">Property Listing</a></li>
		<li><a href="<?php echo base_url().'home/about_us';?>">About Us</a></li>
		<li><a href="<?php echo base_url().'home/contact'?>">Contact Us</a></li>
		<li class="cl_btn"><a class="btn btn-block btn-lg btn-thm rounded" href="#"><span class="icon flaticon-button mr5"></span> Create Listing</a></li>
      </ul>
    </nav>
  </div>