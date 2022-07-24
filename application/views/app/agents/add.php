<section class="content">
   <div class="card card-default">
      <div class="card-header">
         <div class="d-inline-block">
            <h3 class="card-title"> <i class="fa fa-plus"></i>
               Add New Agents
            </h3>
         </div>
         <div class="d-inline-block float-right">
            <a href="<?php echo base_url('app/agents'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Agents List</a>
         </div>
      </div>
      <div class="card-body">
         <!-- For Messages -->
         <?php $this->load->view('app/includes/_messages.php') ?>
         <?php echo form_open_multipart(base_url('app/agents/add'), array("class"=>"form-horizontal","id"=>"quickForm"));  ?>
         <p class="req_mesg">* required field</p>
          <div class="form-group">
            <label for="name" class="col-md-12 control-label">Profile Photo<span class="req_sign">  *</span></label>
            <div class="col-md-12">
                     <input type="file" name="profle_img" id="profle_img" class="form-control"  accept="image/png, image/jpeg, image/jpg">
                      <p style="font-size: 12px;">Note: Image size should be 538px X 640px and only png, jpg, jpeg file type allowed</p>
            </div>
         </div>
         <!--<img style="display: none;margin: auto;"  id="frame" width="128" height="128">-->
         <div class="form-group">
            <label for="name" class="col-md-12 control-label">Name<span class="req_sign">  *</span></label>
            <div class="col-md-12">
               <input type="text" name="name" class="form-control" id="name" placeholder="Enter First Name">
            </div>
         </div>
         <div class="form-group">
            <label for="email" class="col-md-12 control-label">Email<span class="req_sign">  *</span></label>
            <div class="col-md-12">
               <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" >
            </div>
         </div>
         <!--<div class="form-group">-->
         <!--   <label for="alt_email" class="col-md-12 control-label">Alternative Email</label>-->
         <!--   <div class="col-md-12">-->
         <!--      <input type="email" name="alt_email" class="form-control" id="alt_email" placeholder="Enter Alternative Email" >-->
         <!--   </div>-->
         <!--</div>-->
         <div class="form-group">
            <label for="contact" class="col-md-12 control-label">Mobile No.<span class="req_sign">  *</span></label>
            <div class="col-md-12">
               <input type="number" name="contact" class="form-control" id="contact" placeholder="Enter Mobile No." >
            </div>
         </div>
         <!--<div class="form-group">-->
         <!--   <label for="alt_contact" class="col-md-12 control-label">Alternative Mobile No.</label>-->
         <!--   <div class="col-md-12">-->
         <!--      <input type="number" name="alt_contact" class="form-control" id="alt_contact" placeholder="Enter Alternative Mobile No.">-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="form-group">-->
         <!--   <label for="gender" class="col-md-12 control-label">Gender<span class="req_sign">  *</span></label>-->
         <!--   <div class="col-md-12">-->
         <!--      <label class="radio-inline"><input type="radio" name="gender" value="male" style="cursor: pointer;">&nbsp;male</label>-->
         <!--      <label class="radio-inline"><input type="radio" name="gender" value="female" style="cursor: pointer;">&nbsp;female</label>-->
         <!--      <label class="radio-inline"><input type="radio" name="gender" value="others" style="cursor: pointer;">&nbsp;others</label>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="form-group">-->
         <!--   <label for="password" class="col-md-12 control-label">Date of Birth<span class="req_sign">  *</span></label>-->
         <!--   <div class="col-md-12">-->
         <!--      <input type="text" name="date_of_birth" id="date_of_birth" data-date-format="yyyy-mm-dd" data-provide="datepicker" class="form-control" placeholder="yyyy-mm-dd" data-date-autoclose="true" onkeydown="return false" autocomplete="off">-->
         <!--   </div>-->
         <!--</div>-->
         <!-- <div class="form-group">-->
         <!--   <label for="aadhaar_no" class="col-md-12 control-label">Aadhaar No.<span class="req_sign">  *</span></label>-->
         <!--   <div class="col-md-12">-->
         <!--      <input type="number" name="aadhaar_no" class="form-control" id="aadhaar_no" placeholder="Enter Aadhaar No." >-->
         <!--   </div>-->
         <!--</div>-->
         <!-- <div class="form-group">-->
         <!--   <label for="pan_no" class="col-md-12 control-label">Pan No.<span class="req_sign">  *</span></label>-->
         <!--   <div class="col-md-12">-->
         <!--      <input type="text" name="pan_no" class="form-control" id="pan_no" placeholder="Enter Pan No." >-->
         <!--   </div>-->
         <!--</div>-->
         <!-- <div class="form-group">-->
         <!--   <label for="address" class="col-md-12 control-label">Address<span class="req_sign">  *</span></label>-->
         <!--   <div class="col-md-12">-->
         <!--      <textarea id="address" name="address" rows="2"  class="form-control"></textarea>-->
         <!--   </div>-->
         <!--</div>-->
         <!-- <div class="form-group">-->
         <!--   <label for="pincode" class="col-md-12 control-label">Pincode<span class="req_sign">  *</span></label>-->
         <!--   <div class="col-md-12">-->
         <!--      <input type="number" name="pincode" class="form-control" id="pincode" placeholder="Enter Pincode" >-->
         <!--   </div>-->
         <!--</div>-->
         <div class="form-group">
            <label for="fb_link" class="col-md-12 control-label">Facebook Profile Link</label>
            <div class="col-md-12">
               <input type="text" name="fb_link" class="form-control" id="fb_link" placeholder="Enter Facebook Profile Link">
            </div>
         </div>
          <div class="form-group">
            <label for="twt_link" class="col-md-12 control-label">Twitter Profile Link</label>
            <div class="col-md-12">
               <input type="text" name="twt_link" class="form-control" id="twt_link" placeholder="Enter Twitter Profile Link">
            </div>
         </div>
          <div class="form-group">
            <label for="insta_link" class="col-md-12 control-label">Instagram Profile Link</label>
            <div class="col-md-12">
               <input type="text" name="insta_link" class="form-control" id="insta_link" placeholder="Enter Instagram Profile Link">
            </div>
         </div>
          <div class="form-group">
            <label for="lnk_link" class="col-md-12 control-label">Linkedin Profile Link</label>
            <div class="col-md-12">
               <input type="text" name="lnk_link" class="form-control" id="lnk_link" placeholder="Enter Linkedin Profile Link">
            </div>
         </div>
         <div class="form-group">
            <label for="password" class="col-md-12 control-label">Password<span class="req_sign">  *</span></label>
            <div class="col-md-12">
               <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" autocomplete="new-password">
            </div>
         </div>
         <div class="form-group">
            <div class="col-md-12 text-center">
               <input type="submit" name="submit" value="Add Agents" class="btn btn-primary pull-right">
            </div>
         </div>
         <?php echo form_close( ); ?>
      </div>
      <!-- /.box-body -->
   </div>
</section>