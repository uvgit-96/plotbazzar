$(document).ready(function(){
  var estabDataTable = $('#internal_datatable').DataTable({
      'processing': true,
      'serverSide': true,
      "paging"    : true,
      "pageLength": 10,
      'serverMethod': 'post',
      'searching': false, // Remove default Search Control
      'ajax': {
        "url": base_url+"app/locations/talukaList",
        'data': function(data){
            data.districtValue = $('#district').val();
            data.searchbyValue = $('#searchbyValue').val();
         }
      },
      'columns': [
          {
            targets: 0,
            data: 'sr',
          },
          {
            targets: 1,
            data: 'd_name'
          },
           {
            targets: 2,
            data: 't_name'
          },
           {
            targets: 4,
            data: 'id',
            render: function ( data, type, row ) {
              var editHTML =  '<a title="Edit" class="update btn btn-sm btn-outline-success  mr-1"  href="'+base_url+'app/locations/edit_taluka/'+row['t_id']+'"> <i class="fas fa-pencil-alt"></i></a>';
              return editHTML;
            },
          },
      ],
      language: {
            'loadingRecords': '&nbsp;',
            'processing': borderSpinnerSuccess_5x
        },
  });
 
  $('#searchbyValue').keyup(function(){
    estabDataTable.draw();
  });
  
   $('#district').on("change",function(){
     estabDataTable.draw();
  });
  
  // Clear filter
  $('#clear_filter').click(function() {
      $('#district,#searchbyValue').val('').trigger('change');
      estabDataTable.search('').draw();
  });
  
  });