$('#district').on('change', function() {
   var district_id = this.value;
    $.ajax({
           url : base_url+"app/agents/get_taluka",
           type : "POST",
           dataType : "html",
           async: false,
           data : {"district_id" : district_id},
           beforeSend: function() {
            $("#taluka").html('');
           },
           success : function(res) {
             $("#taluka").html(res);
           },
           error : function(data) {
               alert(data);
           }
         });
         
});

function UpdatePreview(){
    $('#frame').attr('src', URL.createObjectURL(event.target.files[0]));
}

$('.form-horizontal').validate({
rules: {
  state: {
    required: true,
  },
  district: {
    required: true,
  },
  taluka: {
    required: true,
  },
  pincode: {
    required: true,
    minlength: 6,
    maxlength: 6,
    number: true
  },
   ownership_type: {
    required: true,
  },
  description: {
    required: true,
  },
  property_type: {
    required: true,
  },
  plot_length: {
    required: true,
  },
  plot_breadth: {
    required: true,
  },
  price_details: {
    required: true,
  },
  sq_price: {
    required: true,
  },
  price_negotiable: {
    required: true,
  }
},
messages: {
  state: "Please select state",
  district: "Please select district",
  taluka: "Please select taluka",
  pincode: {
    required: "Please enter a pincode",
    minlength: "pincode number must be min 6 characters long",
    maxlength: "pincode number must not be more than 6 characters long"
  },
  ownership_type: "Please select ownership_type",
  description: "Please enter description",
  property_type: "Please select property_type",
  plot_length: "Please enter plot_length",
  plot_breadth: "Please enter plot_breadth",
  price_details: "Please enter price_details",
  sq_price: "Please enter sq_price",
  price_negotiable: "Please enter price_negotiable",
},
errorElement: 'span',
errorPlacement: function (error, element) {
  error.addClass('invalid-feedback');
  element.closest('.form-group').append(error);
},
highlight: function (element, errorClass, validClass) {
  $(element).addClass('is-invalid');
},
unhighlight: function (element, errorClass, validClass) {
  $(element).removeClass('is-invalid');
}
});