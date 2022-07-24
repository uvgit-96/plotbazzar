<section class="content">
   <div class="card card-default">
      <div class="card-header">
         <div class="d-inline-block">
            <h3 class="card-title"> <i class="fa fa-pencil"></i>
               Edit District
            </h3>
         </div>
         <div class="d-inline-block float-right">
            <a href="<?php echo base_url('locations/district'); ?>" class="btn btn-success"><i class="fa fa-list"></i> District List</a>
         </div>
      </div>
      <div class="card-body">
         <!-- For Messages -->
         <?php $this->load->view('app/includes/_messages.php') ?>
         <?php echo form_open_multipart(base_url('app/locations/edit_district/'.$data[0]['id']), array("class"=>"form-horizontal"));  ?>
         <p class="req_mesg">* required field</p>
         <div class="form-group">
            <label for="name" class="col-md-12 control-label">District<span class="req_sign">  *</span></label>
            <div class="col-md-12">
               <input type="text" name="district" class="form-control" id="district" placeholder="Enter District Name" required value="<?php echo $data[0]['name']; ?>">
            </div>
         </div>
         <div class="form-group">
            <div class="col-md-12 text-center">
               <input type="submit" name="submit" value="Edit District" class="btn btn-primary pull-right">
            </div>
         </div>
         <?php echo form_close( ); ?>
      </div>
      <!-- /.box-body -->
   </div>
</section>