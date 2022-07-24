<?php include 'header.php';?>
<!-- Search Field Modal -->
<section class="modal fade search_dropdown" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h6 class="modal-title">ADVANDEC SEARCH</h6>
            <a class="closer" data-dismiss="modal" aria-label="Close" href="#"><span aria-hidden="true"><img src="<?php echo base_url().'assets/web/';?>images/icons/close.svg" alt="close.svg"></span></a>
         </div>
         <div class="modal-body">
            <div class="popup_modal_wrapper">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="adv_src_pmodal">
                           <h6 class="title">Bathrooms</h6>
                           <div class="ui_kit_select_box">
                              <select class="selectpicker custom-select-lg mb20">
                                 <option value="">Select Bathrooms</option>
                                 <option value="One">1</option>
                                 <option value="Two">2</option>
                                 <option value="Three">3</option>
                                 <option value="Four">4</option>
                                 <option value="Five">5</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="adv_src_pmodal">
                           <h6 class="title">Beds</h6>
                           <div class="ui_kit_select_box">
                              <select class="selectpicker custom-select-lg mb20">
                                 <option value="">Select Beds</option>
                                 <option value="One">1</option>
                                 <option value="Two">2</option>
                                 <option value="Three">3</option>
                                 <option value="Four">4</option>
                                 <option value="Five">5</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 mb30-md">
                        <div class="adv_src_pmodal">
                           <h6 class="title">Area (sq ft)</h6>
                           <div class="form-group">
                              <input type="text" class="form-control area_input float-left" placeholder="Min. Area">
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control area_input float-right" placeholder="Max. Area">
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="adv_src_pmodal">
                           <h6 class="title">STATUS</h6>
                           <div class="ui_kit_select_box">
                              <select class="selectpicker custom-select-lg mb20">
                                 <option value="">Select Status</option>
                                 <option value="Active">Active</option>
                                 <option value="Deactive">Deactive</option>
                                 <option value="Pending">Pending</option>
                                 <option value="Others">Others</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 mb30-md">
                        <div class="adv_src_pmodal">
                           <h6 class="title">Price</h6>
                           <div class="mt20" id="slider"></div>
                           <span id="slider-range-value1"></span>
                           <span id="slider-range-value2"></span>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="adv_src_pmodal">
                           <h6 class="title">PROPERTY ID</h6>
                           <input type="text" class="form-control property_id_input" placeholder="HZZS 03492">
                        </div>
                     </div>
                  </div>
                  <div class="row mt30">
                     <div class="col-lg-12">
                        <div class="adv_src_pmodal">
                           <h6><span class="title">Amenities</span> <a class="tdu text-thm fz13 ml10" href="#">Select / Deselect All</a></h6>
                        </div>
                     </div>
                     <div class="col-sm-6 col-lg-4">
                        <div class="adv_src_pmodal mb20">
                           <div class="ui_kit_checkbox">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckM1">
                                 <label class="custom-control-label" for="customCheckM1">Air Conditioning</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckM2">
                                 <label class="custom-control-label" for="customCheckM2">Barbeque</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckM3">
                                 <label class="custom-control-label" for="customCheckM3">Dryer</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckM4">
                                 <label class="custom-control-label" for="customCheckM4">Gym</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckM5">
                                 <label class="custom-control-label" for="customCheckM5">Laundry</label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-lg-4">
                        <div class="adv_src_pmodal mb20">
                           <div class="ui_kit_checkbox">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckM6">
                                 <label class="custom-control-label" for="customCheckM6">Lawn</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckM7">
                                 <label class="custom-control-label" for="customCheckM7">Microwave</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckM8">
                                 <label class="custom-control-label" for="customCheckM8">Outdoor Shower</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckM9">
                                 <label class="custom-control-label" for="customCheckM9">Refrigerator</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckM10">
                                 <label class="custom-control-label" for="customCheckM10">Stunning views</label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-lg-4">
                        <div class="adv_src_pmodal mb20">
                           <div class="ui_kit_checkbox">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckM11">
                                 <label class="custom-control-label" for="customCheckM11">Waterfront</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckM12">
                                 <label class="custom-control-label" for="customCheckM12">Parking</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckM13">
                                 <label class="custom-control-label" for="customCheckM13">Doorman</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckM14">
                                 <label class="custom-control-label" for="customCheckM14">Central Heating</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckM15">
                                 <label class="custom-control-label" for="customCheckM15">Cleaning Service</label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="adv_src_pmodal">
                           <button class="btn btn-block btn-thm"><span class="fa fa-search mr15"></span>Show 300+ PROPERTY</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Home Design -->
<section class="home-one home1-overlay bg-home1">
   <div class="container">
      <div class="row posr">
         <div class="col-lg-12">
            <div class="home_content home1 custom_width">
               <div class="home_tabs">
                  <div class="tab-content" id="myTabContent2">
                     <div class="tab-pane fade" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                        <div class="home_adv_srch_opt">
                           <div class="wrapper">
                              <div class="home_adv_srch_form">
                                 <form class="bgc-white p20">
                                    <div class="form-row align-items-center">
                                       <div class="col-auto home_form_input mb15-md">
                                          <div class="form-group style2 mb-2 pl10 pl0-lg">
                                             <label>TYPE</label>
                                             <div class="select-wrap style2-dropdown">
                                                <select class="selectpicker show-tick" multiple>
                                                   <option value="Apartment">Apartment</option>
                                                   <option value="Condo">Condo</option>
                                                   <option value="Studio">Studio</option>
                                                   <option value="Villa">Villa</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-auto home_form_input mb15-md">
                                          <div class="form-group style2 mb-2 pl10 pl0-lg">
                                             <label>LOCATION</label>
                                             <div class="select-wrap style2-dropdown">
                                                <select class="selectpicker">
                                                   <option value="">All Cities</option>
                                                   <option value="NewYork">New York</option>
                                                   <option value="London">London</option>
                                                   <option value="Paris">Paris</option>
                                                   <option value="Istanbul">Istanbul</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-auto home_form_input mb15-md">
                                          <div class="form-group style1 mb-2 ml0-767">
                                             <label>SEARCH</label>
                                             <div class="select-wrap style1-dropdown">
                                                <select name="lang" class="form-control js-searchBox">
                                                   <option value="">Eaton Garth</option>
                                                   <option value="EatonGarthPenthouse1">Eaton Garth Penthouse</option>
                                                   <option value="EatonGarthPenthouse2">Eaton Garth Penthouse</option>
                                                   <option value="EatonGarthPenthouse3">Eaton Garth Penthouse</option>
                                                   <option value="Hotels">View All Results</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-auto home_form_adv_srch_form_btn mb20-md">
                                          <div class="adv_srch_btn dropbtn ml0-767" data-toggle="modal" data-target="#staticBackdrop">
                                             <i class="flaticon-setting-lines mr10 mt10 mt0-md flr-520"></i>
                                             Advanced <br class="dn-991"> Search
                                          </div>
                                       </div>
                                       <div class="col-auto home_form_input2">
                                          <button type="submit" class="btn search-btn ml0-767"><span class="fa fa-search"></span> Search</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade show active" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                        <div class="home_adv_srch_opt">
                           <div class="wrapper">
                              <div class="home_adv_srch_form">
                                 <form class="bgc-white p20">
                                    <div class="form-row align-items-center">
                                       <div class="col-auto home_form_input mb15-md">
                                          <div class="form-group style2 mb-2 pl10 pl0-lg">
                                             <label>TYPE</label>
                                             <div class="select-wrap style2-dropdown">
                                                <select class="selectpicker show-tick" multiple>
                                                   <option value="Apartment">Apartment</option>
                                                   <option value="Condo">Condo</option>
                                                   <option value="Studio">Studio</option>
                                                   <option value="Villa">Villa</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-auto home_form_input mb15-md">
                                          <div class="form-group style2 mb-2 pl10 pl0-lg">
                                             <label>LOCATION</label>
                                             <div class="select-wrap style2-dropdown">
                                                <select class="selectpicker">
                                                   <option value="">All Cities</option>
                                                   <option value="NewYork">New York</option>
                                                   <option value="London">London</option>
                                                   <option value="Paris">Paris</option>
                                                   <option value="Istanbul">Istanbul</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-auto home_form_input mb15-md">
                                          <div class="form-group style1 mb-2 ml0-767">
                                             <label>SEARCH</label>
                                             <div class="select-wrap style1-dropdown">
                                                <select name="lang" class="form-control js-searchBox">
                                                   <option value="">Eaton Garth</option>
                                                   <option value="EatonGarthPenthouse1">Eaton Garth Penthouse</option>
                                                   <option value="EatonGarthPenthouse2">Eaton Garth Penthouse</option>
                                                   <option value="EatonGarthPenthouse3">Eaton Garth Penthouse</option>
                                                   <option value="Hotels">View All Results</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-auto home_form_adv_srch_form_btn mb20-md">
                                          <div class="adv_srch_btn dropbtn ml0-767" data-toggle="modal" data-target="#staticBackdrop">
                                             <i class="flaticon-setting-lines mr10 mt10 mt0-md flr-520"></i>
                                             Advanced <br class="dn-991"> Search
                                          </div>
                                       </div>
                                       <div class="col-auto home_form_input2">
                                          <button type="submit" class="btn search-btn ml0-767"><span class="fa fa-search"></span> Search</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="sold" role="tabpanel" aria-labelledby="sold-tab">
                        <div class="home_adv_srch_opt">
                           <div class="wrapper">
                              <div class="home_adv_srch_form">
                                 <form class="bgc-white p20">
                                    <div class="form-row align-items-center">
                                       <div class="col-auto home_form_input mb15-md">
                                          <div class="form-group style2 mb-2 pl10 pl0-lg">
                                             <label>TYPE</label>
                                             <div class="select-wrap style2-dropdown">
                                                <select class="selectpicker show-tick" multiple>
                                                   <option value="Apartment">Apartment</option>
                                                   <option value="Condo">Condo</option>
                                                   <option value="Studio">Studio</option>
                                                   <option value="Villa">Villa</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-auto home_form_input mb15-md">
                                          <div class="form-group style2 mb-2 pl10 pl0-lg">
                                             <label>LOCATION</label>
                                             <div class="select-wrap style2-dropdown">
                                                <select class="selectpicker">
                                                   <option value="">All Cities</option>
                                                   <option value="NewYork">New York</option>
                                                   <option value="London">London</option>
                                                   <option value="Paris">Paris</option>
                                                   <option value="Istanbul">Istanbul</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-auto home_form_input mb15-md">
                                          <div class="form-group style1 mb-2 ml0-767">
                                             <label>SEARCH</label>
                                             <div class="select-wrap style1-dropdown">
                                                <select name="lang" class="form-control js-searchBox">
                                                   <option value="">Eaton Garth</option>
                                                   <option value="EatonGarthPenthouse1">Eaton Garth Penthouse</option>
                                                   <option value="EatonGarthPenthouse2">Eaton Garth Penthouse</option>
                                                   <option value="EatonGarthPenthouse3">Eaton Garth Penthouse</option>
                                                   <option value="Hotels">View All Results</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-auto home_form_adv_srch_form_btn mb20-md">
                                          <div class="adv_srch_btn dropbtn ml0-767" data-toggle="modal" data-target="#staticBackdrop">
                                             <i class="flaticon-setting-lines mr10 mt10 mt0-md flr-520"></i>
                                             Advanced <br class="dn-991"> Search
                                          </div>
                                       </div>
                                       <div class="col-auto home_form_input2">
                                          <button type="submit" class="btn search-btn ml0-767"><span class="fa fa-search"></span> Search</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Our Team -->
<section class="our-team">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 offset-lg-3">
            <div class="main-title text-center">
               <h2>Agents Listing</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="team_slider_home1">
               <?php foreach($agents_list as $agents_list_val){?>
               <div class="item">
                  <div class="team_member">
                     <div class="thumb">
                        <img class="img-fluid" style="height: 280px;" src="<?php echo base_url().'uploads/profile_photos/'.$agents_list_val['profle_img'];?>" alt="1.jpg">
                        <div class="overylay">
                           <ul class="social_icon">
                              <li class="list-inline-item"><a target="_blank" href="<?php echo $agents_list_val['fb_link']; ?>"><i class="fa fa-facebook"></i></a></li>
                              <li class="list-inline-item"><a target="_blank" href="<?php echo $agents_list_val['twt_link']; ?>"><i class="fa fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a target="_blank" href="<?php echo $agents_list_val['insta_link']; ?>"><i class="fa fa-instagram"></i></a></li>
                              <li class="list-inline-item"><a target="_blank"  href="<?php echo $agents_list_val['lnk_link']; ?>"><i class="fa fa-linkedin"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="details">
                        <h4><a href="page-agent-single.html"><?php echo $agents_list_val['name']; ?></a></h4>
                        <p>Lead Designer</p>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Feature Properties -->
<section id="feature-property" class="feature-property" style="padding: 0px 0!important;">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
            <div class="main-title text-center">
               <h2>Property Listings</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="popular_listing_slider1">
               <?php foreach($property_list as $property_list_val){
                  ?>
               <div class="item">
                  <div class="feat_property">
                     <div class="thumb">
                        <img class="img-whp" src="<?php echo base_url().'uploads/property_gallery/'.$property_list_val['user_id'].'/'.$property_list_val['cover_photo'];?>" style="height: 220px;" >
                        <!-- <div class="thmb_cntnt">
                           <ul class="tag mb0">
                             <li class="list-inline-item"><a href="#">FEATURED</a></li>
                           </ul>
                           <ul class="tag2 mb0">
                             <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                           </ul>
                           </div> -->
                        <!--    <div class="thmb_cntnt2">
                           <ul class="listing_gallery mb0">
                             <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                             <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                           </ul>
                           </div> -->
                     </div>
                     <div class="details">
                        <div class="tc_content">
                           <!-- <div class="badge_icon"><a href="#"><img src="<?php echo base_url().'assets/web/';?>images/agent/1.png" alt="1.png"></a></div> -->
                           <h4><a href="page-listing-single-v8.html"><?php echo $property_list_val['property_type']; ?></a></h4>
                           <p><?php echo $property_list_val['taluka_name'].', '.$property_list_val['district_name'].', '.$property_list_val['state_name'].', India.'; ?></p>
                           <p>Ownership Type : <?php echo $property_list_val['ownership_type']; ?></p>
                           <ul class="prop_details mb0">
                              <!--  <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                 <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                 <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                 <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br> -->&#x20b9;<?php echo $property_list_val['sq_price']; ?> Per Sq Ft</a></li>
                           </ul>
                        </div>
                        <div class="fp_footer">
                           <ul class="fp_meta float-left mb0">
                              <!-- <li class="list-inline-item"><a href="#"><small><del class="body-color">$2,800/mo</del></small><br> -->
                              <span class="heading-color fw600">&#x20b9;<?php echo $property_list_val['price_details']; ?></span></a></li>
                           </ul>
                           <!-- <ul class="fp_meta float-right mb0">
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                              </ul> -->
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- How It Works -->
<section id="why-chose" class="whychose_us bgc-alice-blue pb30">
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
         <div class="col-md-6 col-xl-3">
            <div class="why_chose_us">
               <div class="icon"> <span class="flaticon-discord"></span> </div>
               <div class="details">
                  <h4>Trusted By Thousands</h4>
                  <p>With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.</p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-xl-3">
            <div class="why_chose_us">
               <div class="icon"> <span class="flaticon-house"></span> </div>
               <div class="details">
                  <h4>Wide Renge Of Properties</h4>
                  <p>With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.</p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-xl-3">
            <div class="why_chose_us">
               <div class="icon"> <span class="flaticon-calculator"></span> </div>
               <div class="details">
                  <h4>Financing Made Easy</h4>
                  <p>With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.</p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-xl-3">
            <div class="why_chose_us">
               <div class="icon"> <span class="flaticon-maps"></span> </div>
               <div class="details">
                  <h4>See Neighborhoods</h4>
                  <p>With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Recent Property For Rent -->
<section class="recent-property pb30">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 offset-lg-3">
            <div class="main-title text-center">
               <h2>Recent Properties</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="recent_property_slider_home1">
               <div class="item">
                  <div class="feat_property recent">
                     <div class="thumb">
                        <img class="img-whp" src="<?php echo base_url().'assets/web/';?>images/property/rp1.jpg" alt="rp1.jpg">
                        <div class="thmb_cntnt">
                           <ul class="tag mb0">
                              <li class="list-inline-item"><a href="#">FEATURED</a></li>
                           </ul>
                           <ul class="tag2 mb0">
                              <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                           </ul>
                        </div>
                        <div class="thmb_cntnt2">
                           <ul class="listing_gallery mb0">
                              <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                              <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="details">
                        <div class="tc_content">
                           <div class="badge_icon"><a href="#"><img src="<?php echo base_url().'assets/web/';?>images/agent/1.png" alt="1.png"></a></div>
                           <h4><a href="page-listing-single-v8.html">New Apartment Nice Wiew</a></h4>
                           <p>Quincy St, Brooklyn, NY, USA</p>
                           <ul class="prop_details mb0">
                              <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                           </ul>
                        </div>
                        <div class="fp_footer">
                           <ul class="fp_meta float-left mb0">
                              <li class="list-inline-item"><a href="#"><small><del class="body-color">$2,800/mo</del></small><br>
                                 <span class="heading-color fw600">$7,500/mo</span></a>
                              </li>
                           </ul>
                           <ul class="fp_meta float-right mb0">
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="feat_property recent">
                     <div class="thumb">
                        <img class="img-whp" src="<?php echo base_url().'assets/web/';?>images/property/rp2.jpg" alt="rp2.jpg">
                        <div class="thmb_cntnt">
                           <ul class="tag mb0">
                              <li class="list-inline-item"><a href="#">FEATURED</a></li>
                           </ul>
                           <ul class="tag2 mb0">
                              <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                           </ul>
                        </div>
                        <div class="thmb_cntnt2">
                           <ul class="listing_gallery mb0">
                              <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                              <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="details">
                        <div class="tc_content">
                           <div class="badge_icon"><a href="#"><img src="<?php echo base_url().'assets/web/';?>images/agent/2.png" alt="2.png"></a></div>
                           <h4><a href="page-listing-single-v8.html">Skyper Pool Apartment</a></h4>
                           <p>Quincy St, Brooklyn, NY, USA</p>
                           <ul class="prop_details mb0">
                              <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                           </ul>
                        </div>
                        <div class="fp_footer">
                           <ul class="fp_meta float-left mb0">
                              <li class="list-inline-item">
                                 <a href="#">
                                 <small><del class="body-color">$2,800/mo</del></small><br>
                                 <span class="heading-color fw600">$5,250/mo</span>
                                 </a>
                              </li>
                           </ul>
                           <ul class="fp_meta float-right mb0">
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="feat_property recent">
                     <div class="thumb">
                        <img class="img-whp" src="<?php echo base_url().'assets/web/';?>images/property/rp3.jpg" alt="rp3.jpg">
                        <div class="thmb_cntnt">
                           <ul class="tag mb0">
                              <li class="list-inline-item"><a href="#">FEATURED</a></li>
                           </ul>
                           <ul class="tag2 mb0">
                              <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                           </ul>
                        </div>
                        <div class="thmb_cntnt2">
                           <ul class="listing_gallery mb0">
                              <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                              <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="details">
                        <div class="tc_content">
                           <div class="badge_icon"><a href="#"><img src="<?php echo base_url().'assets/web/';?>images/agent/3.png" alt="3.png"></a></div>
                           <h4><a href="page-listing-single-v8.html">New Caledonian Wharf</a></h4>
                           <p>Quincy St, Brooklyn, NY, USA</p>
                           <ul class="prop_details mb0">
                              <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                           </ul>
                        </div>
                        <div class="fp_footer">
                           <ul class="fp_meta float-left mb0">
                              <li class="list-inline-item">
                                 <a href="#">
                                 <small><del class="body-color">$2,800/mo</del></small><br>
                                 <span class="heading-color fw600">$2,300/mo</span>
                                 </a>
                              </li>
                           </ul>
                           <ul class="fp_meta float-right mb0">
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="feat_property recent">
                     <div class="thumb">
                        <img class="img-whp" src="<?php echo base_url().'assets/web/';?>images/property/rp4.jpg" alt="rp3.jpg">
                        <div class="thmb_cntnt">
                           <ul class="tag mb0">
                              <li class="list-inline-item"><a href="#">FEATURED</a></li>
                           </ul>
                           <ul class="tag2 mb0">
                              <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                           </ul>
                        </div>
                        <div class="thmb_cntnt2">
                           <ul class="listing_gallery mb0">
                              <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                              <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="details">
                        <div class="tc_content">
                           <div class="badge_icon"><a href="#"><img src="<?php echo base_url().'assets/web/';?>images/agent/4.png" alt="4.png"></a></div>
                           <h4><a href="page-listing-single-v8.html">Spacious Family Home</a></h4>
                           <p>Quincy St, Brooklyn, NY, USA</p>
                           <ul class="prop_details mb0">
                              <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                           </ul>
                        </div>
                        <div class="fp_footer">
                           <ul class="fp_meta float-left mb0">
                              <li class="list-inline-item">
                                 <a href="#">
                                 <small><del class="body-color">$2,800/mo</del></small><br>
                                 <span class="heading-color fw600">$1,900/mo</span>
                                 </a>
                              </li>
                           </ul>
                           <ul class="fp_meta float-right mb0">
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="feat_property recent">
                     <div class="thumb">
                        <img class="img-whp" src="<?php echo base_url().'assets/web/';?>images/property/rp1.jpg" alt="rp1.jpg">
                        <div class="thmb_cntnt">
                           <ul class="tag mb0">
                              <li class="list-inline-item"><a href="#">FEATURED</a></li>
                           </ul>
                           <ul class="tag2 mb0">
                              <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                           </ul>
                        </div>
                        <div class="thmb_cntnt2">
                           <ul class="listing_gallery mb0">
                              <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                              <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="details">
                        <div class="tc_content">
                           <div class="badge_icon"><a href="#"><img src="<?php echo base_url().'assets/web/';?>images/agent/1.png" alt="1.png"></a></div>
                           <h4><a href="page-listing-single-v8.html">New Apartment Nice Wiew</a></h4>
                           <p>Quincy St, Brooklyn, NY, USA</p>
                           <ul class="prop_details mb0">
                              <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                           </ul>
                        </div>
                        <div class="fp_footer">
                           <ul class="fp_meta float-left mb0">
                              <li class="list-inline-item"><a href="#"><small><del class="body-color">$2,800/mo</del></small><br>
                                 <span class="heading-color fw600">$7,500/mo</span></a>
                              </li>
                           </ul>
                           <ul class="fp_meta float-right mb0">
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                              <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
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
<!-- Our Testimonials -->
<!-- <section class="our-testimonials bg-ptrn1 pb40 pb100-lg">
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
       <div class="col-lg-12">
         <div class="testimonial_slider_home1">
           <div class="item">
             <div class="testimonial_post home1 text-center">
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
           <div class="item">
             <div class="testimonial_post home1 text-center">
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
           <div class="item">
             <div class="testimonial_post home1 text-center">
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
           <div class="item">
             <div class="testimonial_post home1 text-center">
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
           <div class="item">
             <div class="testimonial_post home1 text-center">
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
         </div>
       </div>
     </div>
   </div>
   </section> -->
<?php include 'footer.php';?>
