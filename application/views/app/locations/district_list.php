<section class="content">
   <div class="card">
      <div class="card-header">
         <div class="d-inline-block">
            <h3 class="card-title"><i class="fa fa-list"></i>&nbsp; District Setting</h3>
         </div>
         <div class="d-inline-block float-right">
            <a href="<?php echo  base_url('app/locations/add_district'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New District</a>
         </div>
      </div>
      <div class="row main_header_search" >
         <div class="col-md-4">
            <div class="form-group">
               <input  type="text"  id="searchbyValue" class="form-control"  placeholder="Search by district name from here...">
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
                     <th>State</th>
                     <th>District</th>
                     <th width="100">Action</th>
                  </tr>
               </thead>
            </table>
         </div>
      </div>
   </div>
</section>