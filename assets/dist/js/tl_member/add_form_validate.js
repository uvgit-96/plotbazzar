$('#quickForm').validate({
rules: {
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
  alt_email: {
    email: true,
  },
  contact: {
    required: true,
    minlength: 10,
    maxlength: 10,
    number: true
  },
  alt_contact: {
    minlength: 10,
    maxlength: 10,
    number: true
  },
  gender: {
    required: true,
  },
  date_of_birth: {
    required: true,
  },
  aadhaar_no: {
    required: true,
    minlength: 12,
    maxlength: 12,
    number: true
  },
  pan_no: {
    required: true,
    minlength: 10,
    maxlength: 10,
    alphanumeric: true
  },
  address: {
    required: true,
  },
  pincode: {
    required: true,
    minlength: 6,
    maxlength: 6,
    number: true
  },
  password: {
    required: true,
    minlength: 6,
  }
},
messages: {
  firstname: "Please enter firstname",
  lastname: "Please enter lastname",
  email: {
    required: "Please enter  email address",
    email: "Please enter vaild email address"
  },
  alt_email: {
    email: "Please enter vaild alternative email address"
  },
  gender: "Please select gender",
  contact: {
    required: "Please enter  mobile number",
    minlength: "mobile number must be min 10 characters long",
    maxlength: "mobile number must not be more than 10 characters long"
  },
  alt_contact: {
    minlength: "mobile number must be min 10 characters long",
    maxlength: "mobile number must not be more than 10 characters long"
  },
  date_of_birth: "Please select date of birth",
  aadhaar_no: {
    required: "Please enter aadhaar no",
    minlength: "aadhaar no must be min 12 characters long",
    maxlength: "aadhaar no must not be more than 12 characters long"
  },
  pan_no: {
    required: "Please enter pan no",
    minlength: "pan no must be min 10 characters long",
    maxlength: "pan no must not be more than 10 characters long",
    alphanumeric: "pan no is invalid."
  },
  address: "Please enter address",
  pincode: {
    required: "Please enter pincode",
    minlength: "pincode must be min 6 characters long",
    maxlength: "pincoder must not be more than 6 characters long"
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