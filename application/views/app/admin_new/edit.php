<!-- Content Wrapper. Contains page content -->
  <!-- Main content -->
  <section class="content">
    <div class="card card-default">
      <div class="card-header">
        <div class="d-inline-block">
            <h3 class="card-title"> <i class="fa fa-pencil"></i>
            Edit Clients </h3>
        </div>
        <div class="d-inline-block float-right">
          <a href="<?= base_url('app/admin'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Internal Users Lists</a>
        </div>
      </div>
      <div class="card-body">

         <!-- For Messages -->
          <?php $this->load->view('app/includes/_messages.php') ?>

          <?php echo form_open(base_url('app/admin/edit/'.$admin['admin_id']), array("class"=>"form-horizontal","id"=>"quickForm") )?>
          <p class="req_mesg">* required field</p>
           <input type="hidden" name="old_email" value="<?php echo $admin['email']; ?>">
          <input type="hidden" name="old_mobile_no" value="<?php echo $admin['mobile_no'];?>">
              <div class="form-group">
                <label for="username" class="col-md-2 control-label">User Name</label>

                <div class="col-md-12">
                  <input type="text" name="username" value="<?= $admin['username']; ?>" class="form-control" id="username" placeholder="Enter User Name" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="firstname" class="col-md-2 control-label">First Name<span class="req_sign">  *</span></label>

                <div class="col-md-12">
                  <input type="text" name="firstname" value="<?= $admin['firstname']; ?>" class="form-control" id="firstname" placeholder="Enter First Name">
                </div>
              </div>

              <div class="form-group">
                <label for="lastname" class="col-md-2 control-label">Last Name<span class="req_sign">  *</span></label>

                <div class="col-md-12">
                  <input type="text" name="lastname" value="<?= $admin['lastname']; ?>" class="form-control" id="lastname" placeholder="Enter Last Name">
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-md-2 control-label">Email</label>

                <div class="col-md-12">
                  <input type="email" name="email" value="<?= $admin['email']; ?>" class="form-control" id="email" placeholder="Enter Email" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="mobile_no" class="col-md-2 control-label">Mobile No<span class="req_sign">  *</span></label>

                <div class="col-md-12">
                  <input type="number" name="mobile_no" value="<?= $admin['mobile_no']; ?>" class="form-control" id="mobile_no" placeholder="Enter Mobile No">
                </div>
              </div>
              <div class="form-group">
                <label for="role" class="col-md-2 control-label">Select Status<span class="req_sign">  *</span></label>

                <div class="col-md-12">
                  <select name="status" class="form-control">
                    <option value="">Select Status</option>
                    <option value="1" <?= ($admin['is_active'] == 1)?'selected': '' ?> >Active</option>
                    <option value="0" <?= ($admin['is_active'] == 0)?'selected': '' ?>>Deactive</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="role" class="col-md-6 control-label">Select Admin Role<span class="req_sign">  *</span></label>

                <div class="col-md-12">
                  <select name="role" class="form-control" id="admin_role_id">
                    <option value="">Select Role</option>
                    <?php foreach($admin_roles as $role): ?>
                      <?php if($role['admin_role_id'] == $admin['admin_role_id']): ?>
                        <option value="<?= $role['admin_role_id']; ?>" selected><?= $role['admin_role_title']; ?></option>
                        <?php else: ?>
                          <option value="<?= $role['admin_role_id']; ?>"><?= $role['admin_role_title']; ?></option>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>

<?php
  // echo "<pre>";
  // print_r($master_users);
// admin_id , admin_role_id , firstname , lastname
// echo $admin_group['master_admin_id'];
  ?>
              <?php
              if(!empty($master_details)){ ?>
                <div class="form-group" id="sub_user_for" >
                  <label for="user_details" class="col-md-12 control-label">Select Under user *</label>
                  <div class="col-md-12"  id="user_details">
                    <select name="master_admin_id" class="form-control">
                      <option value=""> - Select -</option>
                      <?php foreach($master_users as $role): ?>
                        <?php if($role['admin_id'] == $admin_group['master_admin_id']): ?>
                          <option value="<?= $role['admin_id']; ?>" selected><?= $role['firstname']; ?></option>
                          <?php else: ?>
                            <option value="<?= $role['admin_id']; ?>"><?= $role['firstname']; ?></option>
                          <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <input type="hidden" class="form-control" id="role_id" name="master_admin_group_role_id" value="<?= $admin_group['master_admin_group_role_id']; ?>">
                  </div>
                </div>
             <?php } else { ?>
               <div class="form-group" id="sub_user_for" style="display:none">
                 <label for="user_details" class="col-md-12 control-label">Select Under user *</label>
                 <div class="col-md-12"  id="user_details">

                 </div>
               </div>
          <?php   }  ?>
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="submit" name="submit" value="Update Admin" class="btn btn-primary pull-right">
                  </div>
                </div>
          <?php echo form_close( ); ?>
      </div>
        <!-- /.box-body -->
    </div>
  </section>

