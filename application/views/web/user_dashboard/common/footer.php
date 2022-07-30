<a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Wrapper End -->
<script src="<?php echo base_url().'assets/web/';?>js/jquery-3.6.0.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/jquery-migrate-3.0.0.min.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/popper.min.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/jquery.mmenu.all.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/ace-responsive-menu.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/bootstrap-select.min.js"></script>
<?php if($this->uri->segment(1) == 'dashboard'){?>
<script src="<?php echo base_url().'assets/web/';?>js/chart.min.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/chart-custome.js"></script>
<?php }?>
<script src="<?php echo base_url().'assets/web/';?>js/snackbar.min.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/simplebar.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/parallax.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/scrollto.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/jquery-scrolltofixed-min.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/jquery.counterup.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/wow.min.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/jquery.smartuploader.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/progressbar.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/slider.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/timepicker.js"></script>
<script src="<?php echo base_url().'assets/web/';?>js/wow.min.js"></script>
<?php if($this->uri->segment(1) == 'profile'){?>
<script src="<?php echo base_url().'assets/web/';?>js/smartuploader.js"></script>
<?php }?>
<script src="<?php echo base_url().'assets/web/';?>js/dashboard-script.js"></script>
<?php if($this->uri->segment(1) == 'post-property'){?>
<script src="<?php echo base_url().'assets/web/';?>js/tagsinput.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&callback=initMap"></script>
<script src="<?php echo base_url().'assets/web/';?>js/googlemaps1.js"></script>
<?php }?>
<!-- Custom script for all pages --> 
<script src="<?php echo base_url().'assets/web/';?>js/script.js"></script>
</body>
</html>