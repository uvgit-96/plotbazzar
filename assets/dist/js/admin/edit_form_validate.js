$('#quickForm').validate({
rules: {
  firstname: {
    required: true,
  },
  lastname: {
    required: true,
  },
  mobile_no: {
    required: true,
    minlength: 10,
    maxlength: 10,
    number: true
  },
  role: {
    required: true,
  }
},
messages: {
  firstname: "Please enter your firstname",
  lastname: "Please enter your lastname",
  mobile_no: {
    required: "Please enter a mobile number address",
    minlength: "mobile number must be min 10 characters long",
    maxlength: "mobile number must not be more than 10 characters long"
  },
  role: "Please select user role",
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