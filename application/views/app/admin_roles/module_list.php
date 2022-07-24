<section class="content">
		<!-- For Messages -->
   		<?php $this->load->view('app/includes/_messages.php') ?>
		<div class="card">
			<div class="card-header">
				<div class="d-inline-block">
					<h3 class="card-title"><i class="fa fa-list"></i>&nbsp; Module Setting</h3>
				</div>
				<div class="d-inline-block float-right">
					<a href="<?= base_url('app/admin_roles/module_add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New Module</a>
				</div>
			</div>

			<div class="card-body">
				<table id="example1" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50">ID</th>
							<th>Module Name</th>
							<th>Controller Name</th>
							<th>Fa Icon</th>
							<th>Operations</th>
							<th width="100">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($records as $record): ?>
							<tr>
								<td><?= $record['module_id']; ?></td>
								<td><?= $record['module_name']; ?></td>
								<td><?= $record['controller_name']; ?></td>
								<td><?= $record['fa_icon']; ?></td>
								<td><?= $record['operation']; ?></td>
								<td>
									<a href="<?php echo site_url("app/admin_roles/module_edit/".$record['module_id']); ?>" class="btn btn-warning btn-sm mr5" >
											<i class="fa fa-edit"></i>
										</a>
									<a href="<?php echo site_url("app/admin_roles/module_delete/".$record['module_id']); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
