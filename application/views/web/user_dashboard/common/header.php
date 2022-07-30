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
<link rel="stylesheet" href="<?php echo base_url().'assets/web/';?>css/fileuploader.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/web/';?>css/style.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/web/';?>css/dashbord_navitaion.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="<?php echo base_url().'assets/web/';?>css/responsive.css">
<!-- Title -->
<title>Plotbazzar - Real Estate</title>
<!-- Favicon -->
<link href="<?php echo base_url().'assets/web/';?>images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo base_url().'assets/web/';?>images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
</style>
</head>
<body>
<div class="wrapper">
  <div class="preloader"></div>

  <!-- Main Header Nav -->
  <header class="header-nav menu_style_home_one style2 dashbord menu-fixed main-menu">
    <div class="container-fluid p0">
      <!-- Ace Responsive Menu -->
      <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
          <img class="nav_logo_img img-fluid" src="images/header-logo.svg" alt="header-logo.svg">
          <button type="button" id="menu-btn">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <a href="<?php echo base_url();?>" class="navbar_brand float-left dn-md">
          <img class="logo1 img-fluid" src="<?php echo base_url().'assets/web/';?>images/header-logo2.svg" alt="header-logo.svg">
          <img class="logo2 img-fluid" src="<?php echo base_url().'assets/web/';?>images/header-logo2.svg" alt="header-logo2.svg">
          <span>Plotbazzar</span>
        </a>
        <!-- Responsive Menu Structure-->
        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
          <li class="user_setting">
            <div class="dropdown">
              <a class="btn dropdown-toggle" href="#" data-toggle="dropdown">
                <img class="rounded-circle" src="<?php echo base_url().'assets/web/';?>images/team/e1.png" alt="e1.png"> 
                <span class="dn-1366"> Darrell Steward <span class="fa fa-angle-down ml5"></span></span>
              </a>
              <div class="dropdown-menu">
                <div class="user_set_header">
                  <img class="float-left" src="<?php echo base_url().'assets/web/';?>images/team/e1.png" alt="e1.png">
                  <p>Darrell Steward <br><span class="address">alitufan@gmail.com</span></p>
                </div>
                <div class="user_setting_content">
                  <a class="dropdown-item active" href="#">My Profile</a>
                  <a class="dropdown-item" href="#">Messages</a>
                  <a class="dropdown-item" href="#">Purchase history</a>
                  <a class="dropdown-item" href="#">Help</a>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </div>
            </div>
          </li>
          <!-- <li class="list-inline-item add_listing"><a href="page-dashboard-new-property.html"><span class="icon flaticon-button"></span><span class="dn-lg"> Create Listing</span></a></li> -->
        </ul>
      </nav>
    </div>
  </header>

  <!-- Main Header Nav For Mobile -->
  <div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
      <div class="header stylehome1">
        <div class="main_logo_home2 text-center"> <img class="nav_logo_img img-fluid mt10" src="<?php echo base_url().'assets/web/';?>images/header-logo.svg" alt="header-logo.svg"> <span class="mt15">Plotbazzar</span> </div>
        <ul class="menu_bar_home2">
          <li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" href="#"></a></li>
          <li class="list-inline-item"><a class="muser_icon" href="#" data-toggle="modal" data-target="#logInModal"><span class="flaticon-user"></span></a></li>
          <!-- <li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li> -->
        </ul>
      </div>
    </div><!-- /.mobile-menu -->
   <!--  <nav id="menu" class="stylehome1">
      <ul>
        <li><a href="page-contact.html">Contact</a></li>
        <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm rounded" href="#"><span class="icon flaticon-button mr5"></span> Create Listing</a></li>
      </ul>
    </nav> -->
  </div>

  <!-- Our Dashbord -->
  <div class="extra-dashboard-menu dn-lg">
    <div class="ed_menu_list">
      <ul>
        <li><a <?php if($this->uri->segment(1) == 'dashboard'){ echo 'class="active"';}?>href="<?php echo base_url().'dashboard'; ?>"><span class="flaticon-dashboard"></span> Dashboard</a></li>
        <li><a <?php if($this->uri->segment(1) == 'profile'){ echo 'class="active"';}?>href="<?php echo base_url().'profile'; ?>"><span class="flaticon-user"></span> My Profile</a></li>
        <li><a <?php if($this->uri->segment(1) == 'property-list'){ echo 'class="active"';}?>href="<?php echo base_url().'property-list'; ?>"><span class="flaticon-house"></span> My Properties List</a></li>
        <li><a <?php if($this->uri->segment(1) == 'post-property'){ echo 'class="active"';}?>href="<?php echo base_url().'post-property'; ?>"><span class="flaticon-button"></span> Add New Property</a></li>
        <li><a <?php if($this->uri->segment(1) == 'invoice'){ echo 'class="active"';}?>href="<?php echo base_url().'invoice'; ?>"><span class="flaticon-invoice"></span> Invoices</a></li>
        <li><a href="<?php base_url().'logout'; ?>"><span class="flaticon-logout"></span> Logout</a></li>
      </ul>
    </div>
  </div>