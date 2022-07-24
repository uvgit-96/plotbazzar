<section class="content">
   <div class="card card-default">
      <div class="card-header">
         <div class="d-inline-block">
            <h3 class="card-title"> <i class="fa fa-pencil"></i>
               Post Property
            </h3>
         </div>
         <div class="d-inline-block float-right">
            <a href="<?php echo base_url('app/property'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Property List</a>
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
         <div class="row">
              <div class="col-md-12">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                      <a href="<?php echo base_url().'app/agents/edit_post_property/'.$p_details['id'];?>">
                        <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light <?php if($this->uri->segment(3) == 'edit_post_property'){ echo 'btn-active';} ?>">
                            <span class="btn-label"><i class="fas fa-pencil-alt"></i>
                            </span>
                             Edit Property Details
                        </button>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="<?php echo base_url().'app/agents/post_property_image/'.$p_details['id'];?>">
                        <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light <?php if($this->uri->segment(3) == 'post_property_image'){ echo 'btn-active';} ?> ">
                            <span class="btn-label"><i class="fa fa-upload"></i>
                            </span>
                           Upload Property Image(Gallery)
                        </button>
                      </a>
                    </li>
                </ul>
             </div>
         </div>
         <form method="post" class="form-horizontal" action="<?php echo base_url().'app/agents/edit_post_property/'.$p_details['id'];?>" enctype="multipart/form-data">
             <input type="hidden" name="user_id" value="<?php echo $p_details['user_id']; ?>">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="state" class="col-md-12 control-label">State Name<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <select name="state" id="state" class="form-control" required>
                           <?php foreach($state_list as $state_list_val) {?>
                           <option value="<?php echo $state_list_val['id']; ?>" <?php if($p_details['state_id'] == $state_list_val['id']){ echo 'selected'; } ?> ><?php echo $state_list_val['name']; ?></option>
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
                           <option value="<?php echo $dist_list_val['id']; ?>" <?php if($p_details['district_id'] == $dist_list_val['id']){ echo 'selected'; } ?> ><?php echo $dist_list_val['name']; ?></option>
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
                              <?php foreach($taluka_list as $taluka_list_val) {?>
                               <option value="<?php echo $taluka_list_val['id']; ?>" <?php if($p_details['taluka_id'] == $taluka_list_val['id']){ echo 'selected'; } ?> ><?php echo $taluka_list_val['name']; ?></option>
                               <?php }?>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="pincode" class="col-md-12 control-label">Pincode<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <input type="number" name="pincode" class="form-control" placeholder="Enter Pincode" value="<?php echo $p_details['pincode']; ?>">
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
                           <input type="radio" class="form-check-input" id="p1<?php echo $p1; ?>" name="ownership_type" value="<?php echo $v0; ?>" <?php if($p_details['ownership_type'] == $v0){ echo 'checked'; } ?>><?php echo $v0; ?>
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
                        <textarea name="description" class="form-control" placeholder="Enter description" rows="3"><?php echo $p_details['description']; ?></textarea>
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
                           <input type="radio" class="form-check-input" id="p<?php echo $p; ?>" name="property_type" value="<?php echo $v; ?>" <?php if($p_details['property_type'] == $v){ echo 'checked'; } ?>><?php echo $v; ?>
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
                        <input type="number" name="plot_length" class="form-control" placeholder="Enter Length of plot (in Feet.)" value="<?php echo $p_details['plot_length']; ?>" >
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="plot_breadth" class="col-md-12 control-label">Breadth of plot (in Feet.)<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <input type="number" name="plot_breadth" class="form-control" placeholder="Enter Breadth of plot (in Feet.)" value="<?php echo $p_details['plot_breadth']; ?>">
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
                     <img  style="display: flex;margin: auto;" src="<?php echo base_url().'uploads/property_gallery/'.$p_details['user_id'].'/'.$p_details['cover_photo']; ?>" id ="frame"  width="128" height="128" />
                  </div>
               </div>
                 <div class="col-md-6">
                  <div class="form-group">
                     <label for="status" class="col-md-12 control-label">Status<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <select name="status" id="status" class="form-control" required>
                           <option value="inactive" <?php if($p_details['status'] == 'inactive'){ echo 'selected'; } ?> >inactive</option>
                           <option value="active" <?php if($p_details['status'] == 'active'){ echo 'selected'; } ?> >active</option>
                        </select>
                     </div>
                  </div>
               </div>
               <input type="hidden" name="old_cover_photo" value="<?php echo $p_details['cover_photo']; ?>">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="price_details" class="col-md-12 control-label">Price Details<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <input type="text" name="price_details" id="price_details" class="form-control" placeholder="Enter ₹. Expected price" value="<?php echo $p_details['price_details']; ?>">
                        <p style="font-size: 12px;">&#x20b9; Price in words</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="sq_price" class="col-md-12 control-label">₹ Price per sq. feet<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <input type="number" name="sq_price" id="sq_price" class="form-control" placeholder="Enter ₹ Price per sq. feet" value="<?php echo $p_details['sq_price']; ?>">
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <label for="price_negotiable" class="col-md-12 control-label">₹ Price Negotiable<span class="req_sign">  *</span></label>
                     <div class="col-md-12">
                        <div class="form-check-inline">
                           <label class="form-check-label" for="n1" style="cursor:pointer;">
                           <input type="radio" class="form-check-input" id="n1" name="price_negotiable" value="Yes" <?php if($p_details['price_negotiable'] == 'Yes'){ echo 'checked'; }?> >Yes
                           </label>
                        </div>
                        <div class="form-check-inline">
                           <label class="form-check-label" for="n2" style="cursor:pointer;">
                           <input type="radio" class="form-check-input" id="n2" name="price_negotiable" value="No" <?php if($p_details['price_negotiable'] == 'No'){ echo 'checked'; }?>>No
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 text-center">
                  <input type="submit" name="submit" value="Edit Post Property" class="btn btn-primary pull-right">
               </div>
            </div>
         </form>
      </div>
      <!-- /.box-body -->
   </div>
</section>