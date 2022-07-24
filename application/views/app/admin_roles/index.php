<!-- Content Wrapper. Contains page content -->
<!-- <div class="content-wrapper"> -->
	<section class="content">
		<div class="card">
			<div class="card-header">
				<div class="d-inline-block">
					<h3 class="card-title"><i class="fa fa-list"></i>&nbsp; Admin Roles & Permissions</h3>
				</div>
				<div class="d-inline-block float-right">
					<a href="<?= base_url('admin/admin_roles/add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New Role</a>
				</div>
			</div>

			<div class="card-body">
				<table id="example2" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50">ID</th>
							<th>Admin Role</th>
							<th>Status</th>
							<th>Permission</th>
							<th width="200">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($records as $record): ?>
							<tr>
								<td><?php echo $record['admin_role_id']; ?></td>
								<td><?php echo $record['admin_role_title']; ?></td>
								<td><input class='tgl tgl-ios tgl_checkbox'
									data-id="<?php echo $record['admin_role_id']; ?>"
									id='cb_<?=$record['admin_role_id']?>'
									type='checkbox' <?php echo ($record['admin_role_status']==1)? "checked" : ""; ?> />
									<label class='tgl-btn' for='cb_<?=$record['admin_role_id']?>'></label>

								</td>
								<td>
									<a href="<?php echo site_url("app/admin_roles/access/".$record['admin_role_id']); ?>" class="btn btn-info btn-sm mr5" >
										<i class="fas fa-sliders-h"></i>
									</a>
								</td>
								<td>
									<?php if(!in_array($record['admin_role_id'],array(1))): ?>
										<a href="<?php echo site_url("app/admin_roles/edit/".$record['admin_role_id']); ?>" class="btn btn-warning btn-sm mr5" >
											<i class="fa fa-edit"></i>
										</a>
										<a href="<?php echo site_url("app/admin_roles/delete/".$record['admin_role_id']); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
									<?php endif;?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<!-- /.content -->
<!-- </div> -->
