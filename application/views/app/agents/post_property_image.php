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
         <p class="text-center">Note: Image size should be 690px X 440px and only png, jpg, jpeg file type allowed</p>
         <div class="table-responsive-sm">
           <table class="table table-bordered mb-0">
              <tbody class="text-center">
                 <tr>
                    <th>Sr.No</th>
                    <th>Uploaded Image</th>
                    <th>Choose &amp; Upload</th>
                    <th>Preview Choosen File</th>
                 </tr>
                    <?php $i=1; foreach($property_list_no as $v){?>
                    <tr>
                    <td><?php echo $i; ?></td>
                    <td>
                     <?php  $filename = $this->agents->get_properties_image_details($this->uri->segment(4),$v); 
                     if($filename!=NULL){ ?>
                         <a href="<?php echo base_url().'uploads/property_gallery/'.$user_details['id'].'/'.$filename['file_name'];?>" target="_blank"><img style="display: flex;margin: auto;"  src="<?php echo base_url().'uploads/property_gallery/'.$user_details['id'].'/'.$filename['file_name'];?>"  width="128" height="128"></a>
                     <?php } ?>
                    </td>
                    <td>
                       <form method="post" action="<?php echo base_url().'app/agents/post_property_image/'.$this->uri->segment(4); ?>" enctype="multipart/form-data">
                          <input type="file" name="property_img" class="form-control" accept="image/png, image/jpeg, image/jpg" required oninput="UpdatePreview('<?php echo $v; ?>')">
                          <input type="hidden" name="user_id" value="<?php echo $user_details['id']; ?>">
                          <input type="hidden" name="property_name" value="<?php echo $v; ?>">
                          <?php if($filename!=NULL){ ?>
                          <input type="hidden" name="old_photo" value="<?php echo $filename['file_name']; ?>">
                          <?php } else { ?>
                          <input type="hidden" name="old_photo" value="">
                          <?php  } ?>
                          <div class="text-center" style="margin-top:8px;">
                             <button type="submit" name="submit" class="btn btn-success">Upload</button>
                          </div>
                       </form>
                    </td>
                    <td><div style="display:none;" id="<?php echo $v."_html"; ?>"><img style="display: flex;margin: auto;" src="" id="<?php echo $v; ?>" width="128" height="128"></div></td>
                    </tr>
                    <?php $i++; } ?>
              </tbody>
           </table>
        </div>
      </div>
      <!-- /.box-body -->
   </div>
</section>