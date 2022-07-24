<section class="content">
   <div class="card card-default">
      <div class="card-header">
         <div class="d-inline-block">
            <h3 class="card-title"> <i class="fa fa-plus"></i>
               Post Property
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
                     <td colspan="2">
                        <h3>Agent Details</h3>
                     </td>
                  </tr>
                  <tr>
                     <td><b>Name</b></td>
                     <td><?php echo $user_details['name']; ?></td>
                  </tr>
                  <tr>
                     <td><b>Contact</b></td>
                     <td><?php echo $user_details['contact']; ?></td>
                  </tr>
               </tbody>
            </table>
         </div>
         <form method="post" class="form-horizontal" action="<?php echo base_url().'app/agents/post_property/'.$user_details['id']?>" enctype="multipart/form-data">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="state" class="col-md-12 control-label">State Name<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <select name="state" id="state" class="form-control" required>
                           <option value="" selected disabled hidden>Choose here</option>
                           <?php foreach($state_list as $state_list_val) {?>
                           <option value="<?php echo $state_list_val['id']; ?>"><?php echo $state_list_val['name']; ?></option>
                           <?php }?>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="district" class="col-md-12 control-label">District Name<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <select name="district" id="district" class="form-control" required>
                           <option value="" selected disabled hidden>Choose here</option>
                           <?php foreach($dist_list as $dist_list_val) {?>
                           <option value="<?php echo $dist_list_val['id']; ?>"><?php echo $dist_list_val['name']; ?></option>
                           <?php }?>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="taluka" class="col-md-12 control-label">Taluka Name<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <select name="taluka" id="taluka" class="form-control" required>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="pincode" class="col-md-12 control-label">Pincode<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <input type="number" name="pincode" class="form-control" placeholder="Enter Pincode">
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="ownership_type" class="col-md-12 control-label">Ownership Type<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <?php $p1=1; foreach($ownership_type as $v0){ ?>
                        <div class="form-check-inline">
                           <label class="form-check-label" for="p1<?php echo $p1; ?>" style="cursor:pointer;">
                           <input type="radio" class="form-check-input" id="p1<?php echo $p1; ?>" name="ownership_type" value="<?php echo $v0; ?>"><?php echo $v0; ?>
                           </label>
                        </div>
                        <?php $p1++; } ?>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="description" class="col-md-12 control-label">Description<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <textarea name="description" class="form-control" placeholder="Enter description" rows="3"></textarea>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <label for="property_type" class="col-md-12 control-label">Property Type<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <?php $p=1; foreach($property_list as $v){ ?>
                        <div class="form-check-inline">
                           <label class="form-check-label" for="p<?php echo $p; ?>" style="cursor:pointer;">
                           <input type="radio" class="form-check-input" id="p<?php echo $p; ?>" name="property_type" value="<?php echo $v; ?>" required><?php echo $v; ?>
                           </label>
                        </div>
                        <?php $p++; } ?>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="plot_length" class="col-md-12 control-label">Length of plot (in Feet.)<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <input type="number" name="plot_length" class="form-control" placeholder="Enter Length of plot (in Feet.)">
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="plot_breadth" class="col-md-12 control-label">Breadth of plot (in Feet.)<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <input type="number" name="plot_breadth" class="form-control" placeholder="Enter Breadth of plot (in Feet.)">
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="cover_photo" class="col-md-12 control-label">Cover Photo<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <input type="file" name="cover_photo" class="form-control" oninput='UpdatePreview()' accept="image/png, image/jpeg, image/jpg">
                        <p style="font-size: 12px;">Note: Image size should be 690px X 440px and only png, jpg, jpeg file type allowed</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="col-md-12">
                     <img  style="display: flex;margin: auto;" src="" id ="frame"  width="128" height="128" />
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="price_details" class="col-md-12 control-label">Price Details<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <input type="text" name="price_details" id="price_details" class="form-control" placeholder="Enter ₹. Expected price">
                        <p style="font-size: 12px;">&#x20b9; Price in words</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="sq_price" class="col-md-12 control-label">₹ Price per sq. feet<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <input type="number" name="sq_price" id="sq_price" class="form-control" placeholder="Enter ₹ Price per sq. feet">
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <label for="price_negotiable" class="col-md-12 control-label">₹ Price Negotiable<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <div class="form-check-inline">
                           <label class="form-check-label" for="n1" style="cursor:pointer;">
                           <input type="radio" class="form-check-input" id="n1" name="price_negotiable" value="Yes">Yes
                           </label>
                        </div>
                        <div class="form-check-inline">
                           <label class="form-check-label" for="n2" style="cursor:pointer;">
                           <input type="radio" class="form-check-input" id="n2" name="price_negotiable" value="No">No
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 text-center">
                  <input type="submit" name="submit" value="Post Property" class="btn btn-primary pull-right">
               </div>
            </div>
         </form>
      </div>
      <!-- /.box-body -->
   </div>
</section>