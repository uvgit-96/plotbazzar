<!-- Our Footer -->
<?php include 'footer_content.php';?> 
<script src="<?php echo base_url().'assets/web/'; ?>js/jquery-3.6.0.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/jquery-3.6.0.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/jquery-migrate-3.0.0.min.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/popper.min.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/jquery.mmenu.all.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/ace-responsive-menu.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/snackbar.min.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/simplebar.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/parallax.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/scrollto.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/jquery-scrolltofixed-min.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/jquery.counterup.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/wow.min.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/progressbar.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/slider.js"></script>
<script src="<?php echo base_url().'assets/web/'; ?>js/timepicker.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&callback=initMap"></script>
   <script src="<?php echo base_url().'assets/web/'; ?>js/googlemaps1.js"></script>	 -->
<!-- Custom script for all pages --> 
<script src="<?php echo base_url().'assets/web/'; ?>js/script.js"></script>
<script>
   function send_enquiry(event) {
   	event.preventDefault();
   	if($("#name").val() == ''){
   		$("#name_error").show();
   		$("#name_error").hide(3000);
   	}
   
   	if($("#contact").val() == ''){
   		$("#contact_error").show();
   		$("#contact_error").hide(3000);
   	}
   
   	if($("#name").val()!="" && $("#contact").val()!=""){
   		  $.ajax({
               url:"<?php echo base_url().'home/ajax_send_enquiry'?>",    
               type: "post",    
               dataType: 'json',
               data: {name: $("#name").val(), contact: $("#contact").val(), message:$("#message").val()},
               success:function(result){
                   if(result){
                   	$('#contact_form').trigger("reset");
                   	$(".alert-success").show(1000);
                   	//window.top.location = window.top.location;
                   } else {
                   	alert("Something went wrong please try again in sometime later!");
                   }
               },
               error: function (jqXHR, exception) {
		           var msg = '';
		           if (jqXHR.status === 0) {
		               msg = 'Not connect.\n Verify Network.';
		           } else if (jqXHR.status == 404) {
		               msg = 'Requested page not found. [404]';
		           } else if (jqXHR.status == 500) {
		               msg = 'Internal Server Error [500].';
		           } else if (exception === 'parsererror') {
		               msg = 'Requested JSON parse failed.';
		           } else if (exception === 'timeout') {
		               msg = 'Time out error.';
		           } else if (exception === 'abort') {
		               msg = 'Ajax request aborted.';
		           } else {
		               msg = 'Uncaught Error.\n' + jqXHR.responseText;
		           }
		           alert(msg);
		       },
   
           });
   	}
   }
   
</script>
</body>
</html>