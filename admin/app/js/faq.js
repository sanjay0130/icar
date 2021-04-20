// -------------- get  Data  from Form and insert ---------------

function create_faq()
{
   var ids=['label_1','desc'];
  var validation_type=[["blank"],["blank"]];
  var messeges=[["<span style='color:red;'>Label cannot be blank</span>"],["<span style='color:red;'>Description cannot be blank</span>"]];
  var msg=validate(ids,validation_type,'err_msg',messeges);
  if(msg == undefined)
  { 
  var formData = new FormData(faq_name_form);
    formData.append('action','create_faq');
    $.ajax({
      url: "include/faq.php",
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
          loginContent('faq');
        }
    });
  }else{
    return false;
  }
}
// // ------------- show data in table -----------

function get_faq_details()
{
  var data={action:'get_faq_details'};
    // ajax call
    //to send a request to the php page 
    //and after processing it will get the response
    $.ajax({
      url: "include/faq.php",
      type : "POST",
      data: data,
      beforeSend: function(){
        $('.loader').show();
        },
      
      success:function(response)
        {
          $('.loader').hide();
          
          var jsonobj=JSON.parse(response);
          // console.log(jsonobj);
          //  return false;
          var tag ="";
    //     // // //loop to create and display the table rows
        for(var i=0;i<jsonobj.length;i++){
          var counter  = i+1;
          tag+="<tr>";
            tag+="<td>"+counter+"</td>";
            tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['title']+"</td>";
            tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['description']+"</td>";
    //         // tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['label2']+"</td>"; 

    //         // tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['label3']+"</td>"; 

    //     //     // //code for view all user details
            var edit_array_view={"id":jsonobj[i]['id'],"label1":jsonobj[i]['title'],"desc":jsonobj[i]['description']};
            var edit_json_view=JSON.stringify(edit_array_view);
    //     //     // edit button
            tag+="<td><span  data-toggle='modal' data-target='#exampleModal' class='button' title='Edit' onclick='edit_faq("+edit_json_view+");'><i style='color: #36a907;' class='mdi mdi-lead-pencil mx-0'></i></span></td>";
    //     //     // delete button
            tag+="<td> <span onclick='delete_faq("+edit_json_view+");'><i style='color: red;' class='mdi mdi-delete-forever mx-0'></i></span></td>";
              tag+="</tr>";
        }
         document.getElementById('show_data').innerHTML=tag;
         if (!$.fn.DataTable.isDataTable('#myTable')) {
        $(document).ready(function () {
            $("#myTable").DataTable({
              dom: "Bfrtip",
              buttons: {
                buttons: [{ extend: "excel", className: "excelButton" }],
              },
            });
        });
      }
         
         
        }
    });
}

// // --------------- edit form ----------------------

function edit_faq(get_product_data){
  document.getElementById('label_1_up').value=get_product_data['label1'];
  document.getElementById('desc_up').value=get_product_data['desc'];
  // document.getElementById('label_3_up').value=get_product_data['label3'];
  document.getElementById('hide_id').value=get_product_data['id'];
}   

// --------- Update Form ------------

function upd_faq()
{
  var id = document.getElementById('hide_id').value;
  var formData = new FormData(modal_form_update);
 
  formData.append('id',id);
  formData.append('action','upd_faq');
    $.ajax({
      url: "include/faq.php",
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
                 
          loginContent('faq');
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

function delete_faq(get_update_data)
{
var x =confirm("Are you sure that you want to permanently  delete the item ?");
// console.log(x);
if(x == true){
  var id = get_update_data['id'];
  // console.log(id);
  var data={id:id,action:'delete_faq'};
    $.ajax({
      url: "include/faq.php",
      type : "POST",
      data: data,
      beforeSend: function(){
        $('.loader').show();
        },
      
      success:function(response)
        {
          loginContent('faq');
          $('.loader').hide();
          if(response.trim()=="success")
          {
            errorBoxAlert1('Data Deleted successfully');
          }
          else{
            errorBoxAlert2('Error in Deletion..');
          }
        }
    });
  }else{
    return false;
  }
}




