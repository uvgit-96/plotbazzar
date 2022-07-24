<?php include 'header.php';?>
<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 h0">
   <div class="mobile-menu">
      <div class="header stylehome1">
         <div class="main_logo_home2 text-center"> <img class="nav_logo_img img-fluid mt10" src="<?php echo base_url().'assets/web/';?>images/header-logo.svg" alt="header-logo.svg"> <span class="mt15">Houzing</span> </div>
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
         <li> <a href="<?php echo base_url().'home';?>"><span class="title">Home</span></a></li>
         <li> <a href="<?php echo base_url().'home/agent_listing';?>"><span class="title">Agent Listing</span></a></li>
         <li> <a href="<?php echo base_url().'home/property_listing';?>"><span class="title">Property Listing</span></a></li>
         <li> <a href="<?php echo base_url().'home/about_us';?>"><span class="title">About Us</span></a></li>
         <li><a href="<?php echo base_url().'home/contact'?>">Contact Us</a></li>
         <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm rounded" href="#"><span class="icon flaticon-button mr5"></span> Create Listing</a></li>
      </ul>
   </nav>
</div>
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-6">
            <div class="breadcrumb_content">
               <h2 class="breadcrumb_title">About Us</h2>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About Us</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- About Text Content -->
<section class="about-section bb1 pb70">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 offset-lg-2">
            <div class="main-title text-center">
               <h2>Our Mission Is To Houzing</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6">
            <div class="about_thumb mb30-smd">
               <img class="img-fluid w100" src="<?php echo base_url().'assets/web/';?>images/about/2.jpg" alt="2.jpg">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="about_content">
               <p class="large">Mauris ac consectetur ante, dapibus gravida tellus. Nullam aliquet eleifend dapibus. Cras sagittis, ex euismod lacinia tempor.</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis ligula eu lectus vulputate porttitor sed feugiat nunc. Mauris ac consectetur ante, dapibus gravida tellus. Nullam aliquet eleifend dapibus. Cras sagittis, ex euismod lacinia tempor, lectus orci elementum augue, eget auctor metus ante sit amet velit.</p>
               <p>Maecenas quis viverra metus, et efficitur ligula. Nam congue augue et ex congue, sed luctus lectus congue. Integer convallis condimentum sem. Duis elementum tortor eget condimentum tempor. Praesent sollicitudin lectus ut pharetra pulvinar. Donec et libero ligula. Vivamus semper at orci at placerat.Placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod libero amet, laborum qui nulla quae alias tempora.</p>
               <p>That’s why we go beyond the typical listings, by sourcing insights straight from locals and offering over 34 neighborhood map overlays, to give people a deeper understanding of what living in a home and neighborhood is really like.</p>
            </div>
         </div>
      </div>
      <div class="row mt50">
         <div class="col-md-6 col-lg-3">
            <div class="funfact_one text-center">
               <div class="details">
                  <div class="timer text-thm">66.180</div>
                  <p class="ff_title">Homes for sale</p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="funfact_one text-center">
               <div class="details">
                  <div class="timer text-thm">4.809</div>
                  <p class="ff_title">Open houses</p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="funfact_one text-center">
               <div class="details">
                  <div class="timer text-thm">30.469</div>
                  <p class="ff_title">Recently sold</p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="funfact_one text-center">
               <div class="details">
                  <div class="timer text-thm">2.919</div>
                  <p class="ff_title">Price reduced</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Our Team -->
<!-- <section class="our-testimonials bg-ptrn1 pb70">
   <div class="container">
   	<div class="row">
   		<div class="col-lg-6 offset-lg-3">
   			<div class="main-title text-center">
             <h2>Our Testimonials</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
   			</div>
   		</div>
   	</div>
       <div class="row">
         <div class="col-md-6 col-lg-6 col-xl-3">
           <div class="testimonial_post text-center">
             <div class="details">
               <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
             </div>
             <div class="thumb"> <img src="<?php echo base_url().'assets/web/';?>images/testimonial/1.png" alt="1.png"> </div>
             <div class="client_details">
               <h4 class="title">Marvin McKinney</h4>
               <div class="client-postn">Designer</div>
             </div>
           </div>
         </div>
         <div class="col-md-6 col-lg-6 col-xl-3">
           <div class="testimonial_post text-center">
             <div class="details">
               <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
             </div>
             <div class="thumb"> <img src="<?php echo base_url().'assets/web/';?>images/testimonial/2.png" alt="2.png"> </div>
             <div class="client_details">
               <h4 class="title">Theresa Webb</h4>
               <div class="client-postn">Host</div>
             </div>
           </div>
         </div>
         <div class="col-md-6 col-lg-6 col-xl-3">
           <div class="testimonial_post text-center">
             <div class="details">
               <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
             </div>
             <div class="thumb"> <img src="<?php echo base_url().'assets/web/';?>images/testimonial/3.png" alt="3.png"> </div>
             <div class="client_details">
               <h4 class="title">Robert Fox</h4>
               <div class="client-postn">Reporter</div>
             </div>
           </div>
         </div>
         <div class="col-md-6 col-lg-6 col-xl-3">
           <div class="testimonial_post text-center">
             <div class="details">
               <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
             </div>
             <div class="thumb"> <img src="<?php echo base_url().'assets/web/';?>images/testimonial/4.png" alt="4.png"> </div>
             <div class="client_details">
               <h4 class="title">Guy Hawkins</h4>
               <div class="client-postn">Developer</div>
             </div>
           </div>
         </div>
       </div>
   </div>
   </section> -->
<?php include 'footer2.php';?>