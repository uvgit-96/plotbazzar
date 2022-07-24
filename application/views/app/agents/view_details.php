<section class="content">
   <div class="card card-default">
      <div class="card-header">
         <div class="d-inline-block">
            <h3 class="card-title"> <i class="fa fa-eye"></i>
               View user details
            </h3>
         </div>
         <div class="d-inline-block float-right">
            <a href="<?php echo base_url('app/agents'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Agents List</a>
         </div>
      </div>
      <div class="card-body">
         <div class="table-responsive">
         <table class="table table-bordered table-striped">
             <tbody class="text-center">
                  <tr>
                    <td colspan="2"><h3>View Details</h3></td>
                  </tr>
                  <tr>
                      <td colspan="2"><img style="display: flex;margin: auto;" src="<?php echo base_url().'uploads/profile_photos/'.$user_details['profle_img']; ?>" id="frame" width="100" height="100"></td>
                  </tr>
                  <tr>
                    <td><b>Name</b></td>
                    <td><?php echo $user_details['name']; ?></td>
                  </tr>
                  <!--<tr>-->
                  <!--  <td><b>Lastname</b></td>-->
                  <!--  <td><?php echo $user_details['lastname']; ?></td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--  <td><b>Email</b></td>-->
                  <!--  <td><?php echo $user_details['email']; ?></td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--  <td><b>Alternative Email</b></td>-->
                  <!--  <td><?php echo $user_details['alt_email']; ?></td>-->
                  <!--</tr>-->
                  <tr>
                    <td><b>Contact</b></td>
                    <td><?php echo $user_details['contact']; ?></td>
                  </tr>
                  <!--<tr>-->
                  <!--  <td><b>Alternative Contact</b></td>-->
                  <!--  <td><?php echo $user_details['alt_contact']; ?></td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--  <td><b>Gender</b></td>-->
                  <!--  <td><?php echo $user_details['gender']; ?></td>-->
                  <!--</tr>-->
                  <!-- <tr>-->
                  <!--  <td><b>Date of birth</b></td>-->
                  <!--  <td><?php echo $user_details['date_of_birth']; ?></td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--  <td><b>Aadhar Number</b></td>-->
                  <!--  <td><?php echo $user_details['aadhaar_no']; ?></td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--  <td><b>PAN Number</b></td>-->
                  <!--  <td><?php echo $user_details['pan_no']; ?></td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--  <td><b>Address</b></td>-->
                  <!--  <td><?php echo $user_details['address']; ?></td>-->
                  <!--</tr>-->
                  <!-- <tr>-->
                  <!--  <td><b>Pincode</b></td>-->
                  <!--  <td><?php echo $user_details['pincode']; ?></td>-->
                  <!--</tr>-->
                  <tr>
                    <td><b>Status</b></td>
                    <td><?php echo $user_details['status']; ?></td>
                  </tr>
                  <tr>
                    <td><b>Register datetime</b></td>
                    <td><?php echo $user_details['register_datetime']; ?></td>
                  </tr>
                   <tr>
                    <td><b>Last edit datetime</b></td>
                    <td><?php echo $user_details['last_update_datetime']; ?></td>
                  </tr>
             </tbody>
           </table>
          </div>
      </div>
      <!-- /.box-body -->
   </div>
</section>