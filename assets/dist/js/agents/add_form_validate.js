$('#quickForm').validate({
rules: {
  name: {
    required: true,
  },
  profle_img: {
    required: true,
  },
  email: {
    required: true,
    email: true,
  },
  contact: {
    required: true,
    minlength: 10,
    maxlength: 10,
    number: true
  },
  password: {
    required: true,
    minlength: 6,
  }
},
messages: {
  profle_img: "Please choose profile photo is required",
  name: "Please enter name",
  email: {
    required: "Please enter  email address",
    email: "Please enter vaild email address"
  },
  contact: {
    required: "Please enter  mobile number",
    minlength: "mobile number must be min 10 characters long",
    maxlength: "mobile number must not be more than 10 characters long"
  },
  password: {
    required: "Please provide password",
    minlength: "Your password must be at least 6 characters long"
  }
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

