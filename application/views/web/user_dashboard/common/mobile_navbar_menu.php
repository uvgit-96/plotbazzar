<div class="row">
<div class="col-lg-12">
	<div class="dashboard_navigationbar dn db-lg mt50">
		<div class="dropdown">
			<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
			<ul id="myDropdown" class="dropdown-content">
				<li><a <?php if($this->uri->segment(1) == 'dashboard'){ echo 'class="active"';}?>href="<?php echo base_url().'dashboard'; ?>"><span class="flaticon-dashboard"></span> Dashboard</a></li>
				<li><a <?php if($this->uri->segment(1) == 'profile'){ echo 'class="active"';}?>href="<?php echo base_url().'profile'; ?>"><span class="flaticon-user"></span> My Profile</a></li>
				<li><a <?php if($this->uri->segment(1) == 'property-list'){ echo 'class="active"';}?>href="<?php echo base_url().'property-list'; ?>"><span class="flaticon-house"></span> My Properties List</a></li>
				<li><a <?php if($this->uri->segment(1) == 'post-property'){ echo 'class="active"';}?>href="<?php echo base_url().'post-property'; ?>"><span class="flaticon-button"></span> Add New Property</a></li>
				<li><a <?php if($this->uri->segment(1) == 'invoice'){ echo 'class="active"';}?>href="<?php echo base_url().'invoice'; ?>"><span class="flaticon-invoice"></span> My Invoices</a></li>
				<li><a href="<?php base_url().'logout'; ?>"><span class="flaticon-invoice"></span></span> Logout</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="col-lg-12 mb50">
	<div class="breadcrumb_content">
		<h2 class="breadcrumb_title"><?php echo $title; ?></h2>
		<!-- <p>Ready to jump back in!</p> -->
	</div>
</div>
</div>