<?php include 'header.php';?>
	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h2 class="breadcrumb_title">My Account</h2>
						<ol class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Home</a></li>
						  <li class="breadcrumb-item active" aria-current="page">My Account</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our SigIn -->
	<section class="our-log bgc-alice-blue">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6">
					<div class="login_form inner_page bgc-white mb30">
						<form action="#">
              <h4 class="title">Sign in</h4>
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
        <div class="col-sm-12 col-lg-6">
          <div class="sign_up_form inner_page bgc-white">
            <h4 class="title">Registration</h4>
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
	</section>
<?php include 'footer.php';?>  