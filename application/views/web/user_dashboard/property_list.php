  <?php $this->load->view('web/user_dashboard/common/header'); ?>
	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-alice-blue">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-2 dn-lg pl0"></div>
				<div class="col-xl-10">
					<?php $this->load->view('web/user_dashboard/common/mobile_navbar_menu'); ?>
					<div class="row">
						<div class="col-lg-12">
						</div>
						<div class="col-lg-12">
							<div class="invoice_table property table-responsive">
								<div class="heading_selector posr bgc-white">
									<div class="float-right fn-sm">
										<ul class="mb0">
											<li class="list-inline-item">
												<div class="search_field property">
													<form class="form-inline">
											    	<input class="form-control" type="search" placeholder="Search a Listing" aria-label="Search">
											    </form>
												</div>
											</li>
										</ul>
									</div>
									<div class="dropdown_selector property_page float-left fn-sm">
										<ul class="mb30 mt3">
											<li class="list-inline-item">
												<div class="wrapper">
		                      <div class="input-group mb0-767">
		                        <div class="input-group-prepend">
		                          <div class="input-group-text pb0-767">Order By: </div>
		                        </div>
		                        <div class="select-wrap">
		                          <div class="dropdown bootstrap-select">
		                          	<select class="selectpicker" tabindex="-98">
			                            <option value="Date-NewtoOld">Date - New to Old</option>
			                            <option value="Recent">Recent</option>
			                            <option value="OldtoNew">Old to New</option>
			                            <option value="Updated">Updated</option>
			                            <option value="Istanbul">Other</option>
			                          </select>
			                        </div>
			                      </div>
			                    </div>
		                    </div>
											</li>
											<li class="list-inline-item">
												<div class="wrapper style2">
		                      <div class="input-group mb0-767">
		                        <div class="input-group-prepend">
		                          <div class="input-group-text pb0-767">Filter By Status:</div>
		                        </div>
		                        <div class="select-wrap">
		                          <div class="dropdown bootstrap-select">
		                          	<select class="selectpicker" tabindex="-98">
			                            <option value="All">All</option>
			                            <option value="Approved">Approved</option>
			                            <option value="Cancel">Cancel</option>
			                            <option value="Pending">Pending</option>
			                            <option value="Istanbul">Other</option>
			                          </select>
			                        </div>
			                      </div>
			                    </div>
		                    </div>
											</li>
										</ul>
									</div>
								</div>
								<table class="table table-borderless">
								  <thead class="thead-light">
								    <tr>
								      <th scope="col">Listing Title</th>
								      <th scope="col">Date Published</th>
								      <th scope="col">Status</th>
								      <th scope="col">View</th>
								      <th scope="col">Action</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <th scope="row">
					              <div class="feat_property list property">
					                <div class="thumb"> <img class="img-whp" src="<?php echo base_url().'assets/web/';?>images/listing/s1.png" alt="s1.png">
					                  <div class="thmb_cntnt">
					                    <ul class="tag mb0">
					                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
					                    </ul>
					                  </div>
					                </div>
					                <div class="details">
					                  <div class="tc_content">
					                    <h4 class="title">New Apartment Nice Wiew <small class="tag2">FOR SALE</small></h4>
					                    <p>Quincy St, Brooklyn, NY, USA</p>
					                    <div class="fp_meta">
					                    	<a href="#">
					                    		<small><del class="body-color">$2,800/mo</del></small> <br>
					                    		<span class="heading-color fw600">$7,500/mo</span>
					                    	</a>
					                    </div>
					                  </div>
					                </div>
					              </div>
								      </th>
								      <td>30 December 2021</td>
								      <td class="pending_color">Pending</td>
								      <td>5.933</td>
								    	<td class="editing_list">
								    		<ul>
								    			<li class="list-inline-item">
										    		<a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a>
								    			</li>
								    			<li class="list-inline-item">
										    		<a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-trash"></span></a>
								    			</li>
								    		</ul>
								    	</td>
								    </tr>
								    <tr>
								      <th scope="row">
					              <div class="feat_property list property">
					                <div class="thumb"> <img class="img-whp" src="<?php echo base_url().'assets/web/';?>images/listing/s1.png" alt="s1.png">
					                  <div class="thmb_cntnt">
					                    <ul class="tag mb0">
					                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
					                    </ul>
					                  </div>
					                </div>
					                <div class="details">
					                  <div class="tc_content">
					                    <h4 class="title">New Apartment Nice Wiew <small class="tag2">FOR SALE</small></h4>
					                    <p>Quincy St, Brooklyn, NY, USA</p>
					                    <div class="fp_meta">
					                    	<a href="#">
					                    		<small><del class="body-color">$2,800/mo</del></small> <br>
					                    		<span class="heading-color fw600">$7,500/mo</span>
					                    	</a>
					                    </div>
					                  </div>
					                </div>
					              </div>
								      </th>
								      <td>30 December 2021</td>
								      <td class="text-thm">Published</td>
								      <td>5.933</td>
								    	<td class="editing_list">
								    		<ul>
								    			<li class="list-inline-item">
										    		<a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a>
								    			</li>
								    			<li class="list-inline-item">
										    		<a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-trash"></span></a>
								    			</li>
								    		</ul>
								    	</td>
								    </tr>
								    <tr>
								      <th scope="row">
					              <div class="feat_property list property">
					                <div class="thumb"> <img class="img-whp" src="<?php echo base_url().'assets/web/';?>images/listing/s1.png" alt="s1.png">
					                  <div class="thmb_cntnt">
					                    <ul class="tag mb0">
					                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
					                    </ul>
					                  </div>
					                </div>
					                <div class="details">
					                  <div class="tc_content">
					                    <h4 class="title">New Apartment Nice Wiew <small class="tag2">FOR SALE</small></h4>
					                    <p>Quincy St, Brooklyn, NY, USA</p>
					                    <div class="fp_meta">
					                    	<a href="#">
					                    		<small><del class="body-color">$2,800/mo</del></small> <br>
					                    		<span class="heading-color fw600">$7,500/mo</span>
					                    	</a>
					                    </div>
					                  </div>
					                </div>
					              </div>
								      </th>
								      <td>30 December 2021</td>
								      <td class="pending_color">Pending</td>
								      <td>5.933</td>
								    	<td class="editing_list">
								    		<ul>
								    			<li class="list-inline-item">
										    		<a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a>
								    			</li>
								    			<li class="list-inline-item">
										    		<a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-trash"></span></a>
								    			</li>
								    		</ul>
								    	</td>
								    </tr>
								  </tbody>
								</table>								
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
						</div>
					</div>
					<div class="row mt50">
						<div class="col-lg-12 text-center">
							<p class="mb0">Copyright © 2021 CreativeLayers. All Right Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $this->load->view('web/user_dashboard/common/footer'); ?>