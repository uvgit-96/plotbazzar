$(document).ready(function(){
  var estabDataTable = $('#internal_datatable').DataTable({
      'processing': true,
      'serverSide': true,
      "paging"    : true,
      "pageLength": 10,
      'serverMethod': 'post',
      'searching': false, // Remove default Search Control
      'ajax': {
        "url": base_url+"app/property/propertyList",
        'data': function(data){
            data.agent = $('#agent').val();
            data.state = $('#state').val();
            data.district = $('#district').val();
            data.taluka = $('#taluka').val();
            data.Status = $('#status').val();
         }
      },
      'columns': [
          {
            targets: 0,
            data: 'sr',
          },
          {
            targets: 1,
            data: 'name'
          },
           {
            targets: 2,
            data: 'state'
          },
           {
            targets: 3,
            data: 'district'
          },
          {
            targets: 4,
            data: 'taluka',
          },
          {
            targets: 5,
            data: 'ownership_type'
          },
           {
            targets: 6,
            data: 'property_type'
          },
           {
            targets: 7,
            data: 'cover_photo'
          },
          {
            targets: 8,
            data: 'status',
          },
          {
            targets: 9,
            data: 'id',
            render: function ( data, type, row ) {
              var editHTML = '<a title="Edit" class="update btn btn-sm btn-outline-warning  mr-1"  href="'+base_url+'app/agents/edit_post_property/'+row['property_id']+'"> <i class="fas fa-pencil-alt"></i></a>';
             
              return editHTML;
            },
          },
      ],
      language: {
            'loadingRecords': '&nbsp;',
            'processing': borderSpinnerSuccess_5x
        },
  });
 
  $('#agent,#state,#district,#taluka,#status').change(function(){
    estabDataTable.draw();
  }); 
  
   $('#clear_filter').click(function() {
  estabDataTable.search('').draw();
      $('#agent,#state,#district,#taluka,#status').val('').trigger('change');
  });

  });
 
  



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
