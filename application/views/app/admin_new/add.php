<section class="content">
      <div class="card card-default">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i>
              Add New Internal Users </h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?php echo base_url('app/admin'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Internal Users List</a>
          </div>
        </div>
        <div class="card-body">

           <!-- For Messages -->
            <?php $this->load->view('app/includes/_messages.php') ?>

            <?php echo form_open_multipart(base_url('app/admin/add'), array("class"=>"form-horizontal","id"=>"quickForm"));  ?>
            <p class="req_mesg">* required field</p>
               <div class="form-group">
                   <label for="username" class="col-md-12 control-label">User Name<span class="req_sign">  *</span></label>

                   <div class="col-md-12">
                     <input type="text" name="username" class="form-control" id="username" placeholder="Enter User Name" autocomplete="off">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="firstname" class="col-md-12 control-label">First Name<span class="req_sign">  *</span></label>

                   <div class="col-md-12">
                     <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter First Name" autocomplete="offer">
                   </div>
                 </div>

                 <div class="form-group">
                   <label for="lastname" class="col-md-12 control-label">Last Name<span class="req_sign">  *</span></label>

                   <div class="col-md-12">
                     <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Last Name" autocomplete="off">
                   </div>
                 </div>

                 <div class="form-group">
                   <label for="email" class="col-md-12 control-label">Email<span class="req_sign">  *</span></label>

                   <div class="col-md-12">
                     <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" autocomplete="new">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="mobile_no" class="col-md-12 control-label">Mobile No<span class="req_sign">  *</span></label>

                   <div class="col-md-12">
                     <input type="number" name="mobile_no" class="form-control" id="mobile_no" placeholder="Enter Mobile No" autocomplete="mob">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="password" class="col-md-12 control-label">Password<span class="req_sign">  *</span></label>

                   <div class="col-md-12">
                     <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" autocomplete="new-password">
                   </div>
                 </div>

                 <div class="form-group">
                   <label for="role" class="col-md-12 control-label">Select Admin Role<span class="req_sign">  *</span></label>

                   <div class="col-md-12">
                     <select name="role" class="form-control" id="admin_role_id">
                       <option value="">Select Role</option>
                       <?php foreach($admin_roles as $role): ?>
                         <option value="<?= $role['admin_role_id']; ?>"><?= $role['admin_role_title']; ?></option>
                       <?php endforeach; ?>
                     </select>
                     <p id="loading"></p>
                   </div>
                 </div>

                 <div class="form-group" id="sub_user_for" style="display:none">
                   <label for="user_details" class="col-md-12 control-label">Select Under user *</label>
                   <div class="col-md-12"  id="user_details">
                   </div>
                 </div>

                 <div class="form-group">
                   <div class="col-md-12">
                     <input type="submit" name="submit" value="Add Admin" class="btn btn-primary pull-right">
                   </div>
                 </div>

            <?php echo form_close( ); ?>
        </div>
          <!-- /.box-body -->
      </div>
    </section>
