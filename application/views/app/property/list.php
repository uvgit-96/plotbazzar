<section class="content">
   <div class="card">
      <div class="card-header">
         <div class="d-inline-block">
            <h3 class="card-title"><i class="fa fa-list"></i>&nbsp; Property Setting</h3>
         </div>
         
      </div>
      <div class="row main_header_search" >
         <div class="col-md-3">
            <div class="form-group">
                <select  id="agent" class="form-control">
                  <option value=''>-- Select Agent --</option>
                  <?php foreach($agent_list as $agent_list_val){?>
                   <option value='<?php echo $agent_list_val['id']; ?>'><?php echo $agent_list_val['name']; ?></option>
                  <?php } ?>
               </select>
            </div>
         </div>
          <div class="col-md-3">
            <div class="form-group">
                <select  id="state" class="form-control">
                  <option value=''>-- Select State --</option>
                  <?php foreach($state_list as $state_list_val){?>
                   <option value='<?php echo $state_list_val['id']; ?>'><?php echo $state_list_val['name']; ?></option>
                  <?php } ?>
               </select>
            </div>
         </div>
          <div class="col-md-3">
            <div class="form-group">
                <select  id="district" class="form-control">
                  <option value=''>-- Select District --</option>
                  <?php foreach($dist_list as $dist_list_val) {?>
                           <option value="<?php echo $dist_list_val['id']; ?>"><?php echo $dist_list_val['name']; ?></option>
                  <?php }?>
               </select>
            </div>
         </div>
          <div class="col-md-3">
            <div class="form-group">
                <select  id="taluka" class="form-control">
                  <option value=''>-- Select Taluka --</option>
               </select>
            </div>
         </div>
          <div class="col-md-3">
            <div class="form-group">
               <select   id="status" class="form-control"  >
                  <option value=''>-- Select Status --</option>
                  <option value="inactive">inactive</option>
                  <option value="active">active</option>
               </select>
            </div>
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
                     <th>Sr.No</th>
                     <th>Agent Name</th>
                     <th>State</th>
                     <th>District</th>
                     <th>Taluka</th>
                     <th>Ownership type</th>
                     <th>Property type</th>
                     <th>Cover Image</th>
                     <th>Status</th>
                     <th width="100">Action</th>
                  </tr>
               </thead>
            </table>
         </div>
      </div>
   </div>
</section>