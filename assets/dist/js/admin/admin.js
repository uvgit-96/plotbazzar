jQuery(document).on('change', 'select#admin_role_id', function (e) {
    e.preventDefault();
      var roleName = $('select#admin_role_id option:selected').text().toLowerCase();
      var roleID = $('select#admin_role_id option:selected').val();
      getUserListByRole(roleID, roleName);
});



function getUserListByRole(roleID, roleName){
  // Send AJAX request
  $.ajax({
    url: base_url+"app/admin/getUserListByRole",
    type: 'post',
    dataType: "json",
    data: {roleID:roleID, roleName:roleName },
    beforeSend: function () {
      $("#loading").text("Please wait....");
    },
    complete: function () {
        $("#loading").hide();
    },
    success:function(json){
            if(json != null ){
              $('#sub_user_for, label[for="user_details"] , #role_id').show();
              $("#user_details").html(json);
            } else {
              $('#sub_user_for, label[for="user_details"] ,  #role_id').hide();
              $("#user_details").html(json);
            }
        },
    error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
      });
    }