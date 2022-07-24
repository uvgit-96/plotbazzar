<section class="content">
		<!-- For Messages -->
   		<?php //$this->load->view('app/includes/_messages.php') ?>
		<div class="card">
			<div class="card-header">
				<div class="d-inline-block">
					<h3 class="card-title"><i class="fa fa-list"></i>&nbsp; Internal Setting</h3>
				</div>
				<div class="d-inline-block float-right">
					<a href="<?php echo  base_url('app/admin/add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New Internal Users</a>
				</div>
			</div>

          <div class="row" style="margin-top: 6px;">
				<div class="col-md-4">
	                <div class="form-group">
	                 <select   id="searchRoles" class="form-control"  >
                                <option value=''>--All Admin Types--</option>
                                <?php foreach($admin_roles as $admin_role):?>
                                    <option value="<?php echo $admin_role['admin_role_id']?>"><?php echo $admin_role['admin_role_title']?></option>
                                <?php endforeach;?>
                      </select>
	                </div>
	            </div>

	            <div class="col-md-4">
	                <div class="form-group">
	                 <select   id="sel_status" class="form-control"  >
                                <option value=''>-- Select Status --</option>
                                    <option value="pending approval">pending approval</option>
                                    <option value="active">active</option>
                                    <option value="inactive">inactive</option>
                                    <option value="reject">reject</option>
                      </select>
	                </div>
	            </div>
	           
	            <div class="col-md-4">
	                <div class="form-group">
	                    <input  type="text"  id="searchByValue" class="form-control"  placeholder="Search from here...">
	                </div>
	            </div>
	            <div class="col-md-2">
				</div>
			</div>
            <div class="text-center">
                <div class="form-group">
                    <button type="button" id="clear_filter" class="btn btn-danger" >Clear Filters</button>
                </div>
            </div>
			<div class="card-body">
				<div class="table-responsive pt-3">
				<table id="internal_datatable" class="table table-bordered table-striped" width="100%">
					<thead>
						<tr>
							<th>ID</th>
							<!-- <th>Name</th> -->
							<th>User Name</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Role</th>
							<th>Status</th>
							<th width="100">Action</th>
						</tr>
					</thead>
				</table>
			</div>
			</div>
		</div>
	</section>
