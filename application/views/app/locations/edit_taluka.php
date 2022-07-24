<section class="content">
   <div class="card card-default">
      <div class="card-header">
         <div class="d-inline-block">
            <h3 class="card-title"> <i class="fa fa-pencil"></i>
               Edit Taluka
            </h3>
         </div>
         <div class="d-inline-block float-right">
            <a href="<?php echo base_url('app/locations/taluka'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Taluka List</a>
         </div>
      </div>
      <div class="card-body">
         <!-- For Messages -->
         <?php $this->load->view('app/includes/_messages.php') ?>
         <?php echo form_open_multipart(base_url('app/locations/edit_taluka/'.$data['id']), array("class"=>"form-horizontal"));  ?>
         <p class="req_mesg">* required field</p>
         
         <div class="form-group">
                    <label for="name" class="col-md-12 control-label">District Name<span class="req_sign">  *</span></label>
                    <div class="col-md-12">
                       <select name="district" class="form-control" required>
                           <option value="" selected disabled hidden>Choose here</option>
                           <?php foreach($dist_list as $dist_list_val) {?>
                           <option value="<?php echo $dist_list_val['id']; ?>" <?php if($data['district_id'] == $dist_list_val['id']){ echo 'selected'; }?>><?php echo $dist_list_val['name']; ?></option>
                           <?php }?>
                       </select>
                    </div>
         </div>
         <div class="form-group">
            <label for="name" class="col-md-12 control-label">Taluka Name<span class="req_sign">  *</span></label>
            <div class="col-md-12">
               <input type="text" name="name" class="form-control" id="name" placeholder="Enter Taluka Name" value="<?php echo $data['name']; ?>" required>
            </div>
         </div>
         <div class="form-group">
            <div class="col-md-12 text-center">
               <input type="submit" name="submit" value="Edit Taluka" class="btn btn-primary pull-right">
            </div>
         </div>
         <?php echo form_close( ); ?>
      </div>
      <!-- /.box-body -->
   </div>
</section>