<?php include 'header.php';?>
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb style4 pb0">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-6">
            <div class="breadcrumb_content style2">
               <h2 class="breadcrumb_title">Agents list</h2>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Agents list</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Listing Grid View -->
<section class="our-listing pb30-991">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-xl-9">
            <div class="row">
               <?php foreach($agents_list as $agents_list_val){?>
                 <a href="<?php echo base_url().'home/agent_details';?>">
               <div class="col-md-6 col-lg-6">
                 
                     <div class="feat_property list agent">
                        <div class="thumb">
                           <img class="img-whp" src="<?php echo base_url().'uploads/profile_photos/'.$agents_list_val['profle_img'];?>" style="height: 250px;" >
                        </div>
                        <div class="details">
                           <div class="tc_content">
                              <h4><?php echo $agents_list_val['name']; ?></h4>
                  <!-- <p>Senior agent, Houzing Home</p> -->
                  <ul class="prop_details mb0">
                  <li class="text-left"><a href="#"><span>Office</span> &nbsp;<?php echo $agents_list_val['office_contact']; ?></a></li>
                  <li class="text-left"><a href="#"><span>Mobile</span> <?php echo $agents_list_val['contact']; ?></a></li>
                  <li class="text-left"><a href="#"><span>Email</span> &nbsp;&nbsp; <?php echo $agents_list_val['email']; ?></a></li>
                  </ul>
                  </div>
                  <div class="fp_footer">
                  <a class="fp_pdate float-left text-thm" href="#">View Listings</a>
                  <ul class="social_icons float-right mb0">
                  <li class="list-inline-item"><a target="_blank" href="<?php echo $agents_list_val['fb_link']; ?>"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a target="_blank" href="<?php echo $agents_list_val['twt_link']; ?>"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a target="_blank" href="<?php echo $agents_list_val['insta_link']; ?>"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a target="_blank" href="<?php echo $agents_list_val['lnk_link']; ?>"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  
               </div>
               </a>
               <?php } ?>
            </div>
            <!--   <div class="row">
               <div class="col-lg-12">
                 <div class="mbp_pagination mt10">
                   <ul class="page_navigation">
                     <li class="page-item">
                       <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="fa fa-arrow-left"></span></a>
                     </li>
                     <li class="page-item"><a class="page-link" href="#">1</a></li>
                     <li class="page-item"><a class="page-link" href="#">2</a></li>
                     <li class="page-item active" aria-current="page">
                       <a class="page-link" href="#">3 <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="page-item"><a class="page-link" href="#">4</a></li>
                     <li class="page-item"><a class="page-link" href="#">5</a></li>
                     <li class="page-item"><a class="page-link" href="#">...</a></li>
                     <li class="page-item"><a class="page-link" href="#">15</a></li>
                     <li class="page-item">
                       <a class="page-link" href="#"><span class="fa fa-arrow-right"></span></a>
                     </li>
                   </ul>
                 </div>
               </div>
               </div> -->
         </div>
         <div class="col-lg-4 col-xl-3">
            <div class="sidebar">
               <div class="sidebar_agent_search_widget mb30">
                  <h4 class="title mb15">Find Agent</h4>
                  <div class="agent_search_form">
                     <form action="#">
                        <div class="form-group input-group mb30">
                           <input type="text" class="form-control form_control" placeholder="Enter Agent Name">
                        </div>
                        <div class="form-group input-group">
                           <select class="selectpicker form-control" data-width="100%">
                              <option>All Categories</option>
                              <option data-tokens="Apartment">Apartment</option>
                              <option data-tokens="Condo">Condo</option>
                              <option data-tokens="Studio">Studio</option>
                              <option data-tokens="Villa">Villa</option>
                           </select>
                        </div>
                        <div class="form-group input-group">
                           <label for="city">All Cities</label>
                           <select class="selectpicker form-control" data-width="100%">
                              <option data-tokens="NewYork">New York</option>
                              <option data-tokens="London">London</option>
                              <option data-tokens="Paris">Paris</option>
                              <option data-tokens="Istanbul">Istanbul</option>
                           </select>
                        </div>
                        <button type="submit" class="btn btn-block btn-thm agnt_btn mb0"><span class="fa fa-search mr10"></span>Search</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include 'footer2.php';?>