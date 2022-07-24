$(document).ready(function(){
  var estabDataTable = $('#internal_datatable').DataTable({
      'processing': true,
      'serverSide': true,
      "paging"    : true,
      "pageLength": 10,
      'serverMethod': 'post',
      'searching': false, // Remove default Search Control
      'ajax': {
        "url": base_url+"app/tl_member/internalList",
        'data': function(data){
            data.searchStatus = $('#sel_status').val();
            data.searchbyValue = $('#searchByValue').val();
         }
      },
      'columns': [
          {
            targets: 0,
            data: 'id',
          },
          {
            targets: 1,
            data: 'emp_code'
          },
          {
            targets: 2,
            data: 'name'
          },
           {
            targets: 3,
            data: 'email'
          },
           {
            targets: 4,
            data: 'contact'
          },
           {
            targets: 5,
            data: 'user_role'
          },
          {
            targets: 6,
            data: 'status',
            render: function ( data, type, row ) {
               var status0 =  (row['status'] == 'inactive')?'selected':'';
               var status1 =  (row['status'] == 'active')?'selected':'';
               var status2 =  (row['status'] == 'join and left')?'selected':'';
               var status3 =  (row['status'] == 'absconded')?'selected':'';
               var status4 =  (row['status'] == 'terminated')?'selected':'';
               var status5 =  (row['status'] == 'resign')?'selected':'';
          
              var statusHTML = '<select data-id="'+row['id']+'" data-status="'+row['status']+'" id="estab_status" class="form-control form-control-sm estab-statuses'+row['id']+' ">'
              +'<option value="inactive" '+status0+'>inactive</option>'
              +'<option value="active" '+status1+'>active</option>'
              +'<option value="join and left" '+status2+'>join and left</option>'
              +'<option value="absconded" '+status3+'>absconded</option>'
              +'<option value="terminated" '+status4+'>terminated</option>'
              +'<option value="resign" '+status5+'>resign</option>'
              ;
              var old_status = '<input type="hidden" id="status_val'+row['id']+'" value="'+row['status']+'" >';
              return statusHTML + old_status;
              },
          },
          {
            targets: 6,
            data: 'id',
            render: function ( data, type, row ) {
              var infoHTML = '<a title="View" class="view btn btn-sm btn-outline-info  mr-1" href="'+base_url+'app/tl_member/view_details/'+row['id']+'"> <i class="fa fa-eye"></i></a>';
              var editHTML = '<a title="Edit" class="update btn btn-sm btn-outline-warning  mr-1"  href="'+base_url+'app/tl_member/edit/'+row['id']+'"> <i class="fas fa-pencil-alt"></i></a>';
              var deleteHTML = '<a title="Delete" class="btn btn-danger btn-sm"   onclick="soft_delete('+row['id']+')"> <i class="fa fa-times"></i></a>';

              return infoHTML+editHTML+deleteHTML;
            },
          },
      ],
      language: {
            'loadingRecords': '&nbsp;',
            'processing': borderSpinnerSuccess_5x
        },
  });
 
  $('#sel_status').change(function(){
    estabDataTable.draw();
  });   

 
  $('#searchByValue').keyup(function(){
    estabDataTable.draw();
  });
  // Clear filter
  $('#clear_filter').click(function() {
  estabDataTable.search('').draw();
      $('#sel_status, #searchByValue').val('').trigger('change');
  });
  

  $("body").on("change","select#estab_status",function(){
    if (confirm("Press Ok button to update status!") == true) {
          var status = $(this).find('option:selected').val();  
          var id = $(this).data('id');
          $.post(base_url+"app/tl_member/change_status",
          {
            id : id,
            status : status,
          },
          function(data){
            console.log($(this).data('id'));
             $("#status_val"+id).val(status);
             toastr.success("Status Changed Successfully");
           
          });
     } else {
       $(".estab-statuses"+$(this).data('id')).val($("#status_val"+$(this).data('id')).val());
     }
  });

  });


function soft_delete(id){
   let text = "Are you sure want to delete?";
    if (confirm(text) == true) {
      var des_url = base_url+"app/tl_member/soft_delete/"+id;
      location.replace(des_url);
    }
}
