<section class="content">
   <div class="card">
      <div class="card-header">
         <div class="d-inline-block">
            <h3 class="card-title"><i class="fa fa-list"></i>&nbsp; Agents Setting</h3>
         </div>
         <div class="d-inline-block float-right">
            <a href="<?php echo  base_url('app/agents/add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New Agent</a>
         </div>
      </div>
      <div class="row main_header_search" >
         <div class="col-md-4">
            <div class="form-group">
               <select   id="sel_status" class="form-control"  >
                  <option value=''>-- Select Status --</option>
                  <option value="inactive">inactive</option>
                  <option value="active">active</option>
               </select>
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group">
               <input  type="text"  id="searchByValue" class="form-control"  placeholder="Search from here...">
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
                     <th>Profile Image</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Contact</th>
                     <th>Status</th>
                     <th width="100">Action</th>
                  </tr>
               </thead>
            </table>
         </div>
      </div>
   </div>
</section>