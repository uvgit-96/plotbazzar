$(document).ready(function(){
  var estabDataTable = $('#internal_datatable').DataTable({
      'processing': true,
      'serverSide': true,
      "paging"    : true,
      "pageLength": 10,
      'serverMethod': 'post',
      'searching': false, // Remove default Search Control
      'ajax': {
        "url": base_url+"app/agents/internalList",
        'data': function(data){
            data.searchStatus = $('#sel_status').val();
            data.searchbyValue = $('#searchByValue').val();
         }
      },
      'columns': [
          {
            targets: 0,
            data: 'sr',
          },
          {
            targets: 1,
            data: 'profle_img',
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
            data: 'status'
          },
          {
            targets: 6,
            data: 'id',
            render: function ( data, type, row ) {
              var postPropertyHTML = '<a title="View" class="view btn btn-sm btn-outline-info  mr-1" href="'+base_url+'app/agents/post_property/'+row['id']+'"> <i class="fa fa-plus"></i></a>';    
              var infoHTML = '<a title="View" class="view btn btn-sm btn-outline-info  mr-1" href="'+base_url+'app/agents/view_details/'+row['id']+'"> <i class="fa fa-eye"></i></a>';
              var editHTML = '<a title="Edit" class="update btn btn-sm btn-outline-warning  mr-1"  href="'+base_url+'app/agents/edit/'+row['id']+'"> <i class="fas fa-pencil-alt"></i></a>';
              var deleteHTML = '<a title="Delete" class="btn btn-danger btn-sm"   onclick="soft_delete('+row['id']+')"> <i class="fa fa-times"></i></a>';

              return postPropertyHTML+infoHTML+editHTML+deleteHTML;
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
          $.post(base_url+"app/agents/change_status",
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
      var des_url = base_url+"app/agents/soft_delete/"+id;
      location.replace(des_url);
    }
}
