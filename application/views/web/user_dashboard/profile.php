  <?php $this->load->view('web/user_dashboard/common/header'); ?>

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-alice-blue">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-2 dn-lg pl0"></div>
				<div class="col-xl-10">
					<?php $this->load->view('web/user_dashboard/common/mobile_navbar_menu'); ?>
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-8">
									<form class="contact_form profile mb30" action="#">
										<div class="row">
											<div class="col-lg-12">
												<h4 class="mb30 title">Contact Information</h4>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="First Name">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Last Name">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb25">
										    	<input type="email" class="form-control form_control" placeholder="Email">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Phone">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Mobile">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Skype">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<h4 class="mb30 mt20 title">Social Media</h4>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Facebook Url">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Twitter Url">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Linkedin Url">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Instagram Url">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Pinterest Url">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Website Url (without http)">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group mb30">
											    <textarea class="form-control" rows="6" placeholder="About Me"></textarea>
												</div>
											</div>
											<div class="col-xl-12">
												<div class="form-group mb0">
													<button class="btn btn-thm update_btn">UPDATE PROFILE</button>
												</div>
											</div>
										</div>
									</form>
									<form class="contact_form profile mb30-lg" action="#">
										<div class="row">
											<div class="col-lg-12">
												<h4 class="mb30 title">Change Password</h4>
											</div>
											<div class="col-lg-12">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Old Password">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="New Password">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb30">
										    	<input type="email" class="form-control form_control" placeholder="Confirm New Password">
												</div>
											</div>
											<div class="col-xl-12">
												<div class="form-group mb0">
													<button class="btn btn-thm update_btn">CHANGE PASSWORD</button>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="col-lg-4">
									<div class="my_dashboard_profile">
										<h4 class="mb20 title">Photo</h4>
										<div class="wrap-custom-file mb25">
									    <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png"/>
									    <label for="image1">
								      	<span class="flaticon-document">&nbsp;&nbsp;UPLOAD PROFILE PHOTO</span>
												<small class="file_title">*minimum 500px x 500px</small>
									    </label>
										</div>
									</div>
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
