$(document).ready(function(){
  var estabDataTable = $('#internal_datatable').DataTable({
      'processing': true,
      'serverSide': true,
      "paging"    : true,
      "pageLength": 10,
      'serverMethod': 'post',
      'searching': false, // Remove default Search Control
      'ajax': {
        "url": base_url+"app/admin/internalList",
        'data': function(data){
            data.searchStatus = $('#sel_status').val();
            data.searchRoles = $('#searchRoles').val();
            data.searchbyValue = $('#searchByValue').val();
         }
      },
      'columns': [
          {
            targets: 0,
            data: 'admin_id',
          },
          {
            targets: 1,
            data: 'username'
          },
          {
            targets: 2,
            data: 'email'
          },
           {
            targets: 3,
            data: 'mobile_no'
          },
           {
            targets: 4,
            data: 'admin_role_title'
          },
          {
            targets: 5,
            data: 'status',
            render: function ( data, type, row ) {
               var status0 =  (row['status'] == 'pending approval')?'selected':'';
               var status1 =  (row['status'] == 'active')?'selected':'';
               var status2 =  (row['status'] == 'inactive')?'selected':'';
               var status3 =  (row['status'] == 'reject')?'selected':'';
          
              var statusHTML = '<select data-id="'+row['admin_id']+'" data-status="'+row['status']+'" id="estab_status" class="form-control form-control-sm estab-statuses'+row['admin_id']+' "><option value="pending approval" '+status0+'>pending approval</option><option value="active" '+status1+'>active</option><option value="inactive" '+status2+'>inactive</option><option value="reject" '+status3+'>reject</option></select>';
              var old_status = '<input type="hidden" id="status_val'+row['admin_id']+'" value="'+row['status']+'" >';
              return statusHTML + old_status;
              },
          },
          {
            targets: 6,
            data: 'id',
            render: function ( data, type, row ) {
              //var infoHTML = '<a title="View" class="view btn btn-sm btn-outline-info  mr-1" href="'+base_url+'app/admin/cand_view/'+row['candidate_id']+'"> <i class="fa fa-eye"></i></a>';
              var editHTML = '<a title="Edit" class="update btn btn-sm btn-outline-warning  mr-1"  href="'+base_url+'app/admin/edit/'+row['admin_id']+'"> <i class="fas fa-pencil-alt"></i></a>';
              return  editHTML;
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

  $('#searchRoles').change(function(){
    estabDataTable.draw();
  });
  $('#searchByValue').keyup(function(){
    estabDataTable.draw();
  });
  // Clear filter
  $('#clear_filter').click(function() {
  estabDataTable.search('').draw();
      $('#searchRoles, #searchByValue').val('').trigger('change');
  });
  

  $("body").on("change","select#estab_status",function(){
    if (confirm("Press Ok button to update status!") == true) {
          var status = $(this).find('option:selected').val();  
          var id = $(this).data('id');
          $.post(base_url+"app/admin/change_status",
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
