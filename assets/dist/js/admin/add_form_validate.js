$('#quickForm').validate({
rules: {
  username: {
    required: true,
  },
  firstname: {
    required: true,
  },
  lastname: {
    required: true,
  },
  email: {
    required: true,
    email: true,
  },
  mobile_no: {
    required: true,
    minlength: 10,
    maxlength: 10,
    number: true
  },
  role: {
    required: true,
  },
  password: {
    required: true,
    minlength: 5,
  }
},
messages: {
  username: "Please enter your username",
  firstname: "Please enter your firstname",
  lastname: "Please enter your lastname",
  email: {
    required: "Please enter a email address",
    email: "Please enter a vaild email address"
  },
  mobile_no: {
    required: "Please enter a mobile number address",
    minlength: "mobile number must be min 10 characters long",
    maxlength: "mobile number must not be more than 10 characters long"
  },
  role: "Please select user role",
  password: {
    required: "Please provide a password",
    minlength: "Your password must be at least 5 characters long"
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