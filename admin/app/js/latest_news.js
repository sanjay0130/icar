// -------------- get  Data  from Form and insert ---------------

function create_latest_news()
{
  
  var formData = new FormData(latest_news_form);
    formData.append('action','create_latest_news');
    $.ajax({
      url: "include/latest_news.php",
      type : "POST",
      data: formData,
      contentType: false,
      processData: false,
      beforeSend: function(){
        $('.loader').show();
        },
      
      success:function(response)
        {
          // console.log(response);  
          $('.loader').hide();
          var get_availability = $('div').hasClass('div_err_msg');       
          if(get_availability==true)
          {
            $( ".div_err_msg" ).remove();
          }     
          if(response.trim() =='success'){
            errorBoxAlert1('Added successfully..');
          }
          else{
            errorBoxAlert2('Error in Adding..');
          }
          // loginContent('create_job_post');
          loginContent('latest_news');
        }
    });
}
// // ------------- show data in table -----------

function get_latest_news_details()
{
  
  var data={action:'get_latest_news_details'};
    // ajax call
    //to send a request to the php page 
    //and after processing it will get the response
    $.ajax({
      url: "include/latest_news.php",
      type : "POST",
      data: data,
      beforeSend: function(){
        $('.loader').show();
        },
      
      success:function(response)
        {
          $('.loader').hide();
          
          var jsonobj=JSON.parse(response);
        //   // console.log(jsonobj);
        //   //  return false;
          var tag ="";
        // // //loop to create and display the table rows
        for(var i=0;i<jsonobj.length;i++){
          var counter  = i+1;
          tag+="<tr>";
            tag+="<td>"+counter+"</td>";
            tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['news']+"</td>";
           
        //     // //code for view all user details
            var edit_array_view={"id":jsonobj[i]['id'],"news":jsonobj[i]['news']};
            var edit_json_view=JSON.stringify(edit_array_view);
        
            tag+="<td><span  data-toggle='modal' data-target='#exampleModal' class='button' title='Edit' onclick='edit_lattest_news("+edit_json_view+");'><i style='color: #36a907;' class='mdi mdi-lead-pencil mx-0'></i></span></td>";
        //     // delete button
            tag+="<td> <span onclick='delete_latest_news("+edit_json_view+");'><i style='color: red;' class='mdi mdi-delete-forever mx-0'></i></span></td>";
              tag+="</tr>";
        }
         document.getElementById('show_data').innerHTML=tag;
         if (!$.fn.DataTable.isDataTable('#myTable')) {
          $(document).ready(function() {$('#myTable').DataTable()});
          }
         
         
        }
    });
}

// // --------------- edit form ----------------------

function edit_lattest_news(get_product_data){
  document.getElementById('latest_news_up').value=get_product_data['news'];
  
  document.getElementById('hide_id').value=get_product_data['id'];
}   

// --------- Update Form ------------

function upd_latest_news()
{
  var id = document.getElementById('hide_id').value;
  var formData = new FormData(modal_form_update);
 
  formData.append('id',id);
  formData.append('action','upd_latest_news');
    $.ajax({
      url: "include/latest_news.php",
      type : "POST",
      contentType: false,
      processData: false,
      data: formData,
      beforeSend: function(){
        $('.loader').show();
        },
      
      success:function(response)
        {
          $('.loader').hide(); 
                 
          loginContent('latest_news');
          $(".modal-backdrop").remove();
          $("body").removeClass("modal-open");
          var get_availability = $("div").hasClass("div_err_msg");
          if (get_availability == true) {
            $(".div_err_msg").remove();
          }
          if(response.trim()=="success")
          {
            errorBoxAlert1('Data Updated successfully');
          }
          else{
            errorBoxAlert2('Error in update..');
          }
          
        }
    });
}

// ------------- delete row ---------------------

function delete_latest_news(get_update_data)
{
var x =confirm("Are you sure that you want to permanently  delete the item ?");
// console.log(x);
if(x == true){
  var id = get_update_data['id'];
  // console.log(id);
  var data={id:id,action:'delete_latest_news'};
    $.ajax({
      url: "include/latest_news.php",
      type : "POST",
      data: data,
      beforeSend: function(){
        $('.loader').show();
        },
      
      success:function(response)
        {
          loginContent('latest_news');
          $('.loader').hide();
          if(response.trim()=="success")
          {
            errorBoxAlert1('Data Deleted successfully');
          }
          else{
            errorBoxAlert2('Error in Deletion..');
          }
           loginContent('latest_news');
        }
    });
  }else{
    return false;
  }
}




