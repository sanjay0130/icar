function get_about_info()
{
  
  var data={action:'get_about_info'};
    // ajax call
    //to send a request to the php page 
    //and after processing it will get the response
    $.ajax({
      url: "include/about_us.php",
      type : "POST",
      data: data,
      beforeSend: function(){
        $('.loader').show();
        },
      
      success:function(response)
        {
          $('.loader').hide();
         //  return false;
          var jsonobj=JSON.parse(response);
          // console.log(jsonobj);
          //  return false;
          var tag ="";
        // //loop to create and display the table rows
        for(var i=0;i<jsonobj.length;i++){
          var counter  = i+1;
          
          tag += "<tr>";
            tag += "<td>" + counter + "</td>";
            tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['title']+"</td>"; 
            tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['aboutus']+"</td>";
                      
            // //code for view all user details
            var edit_array_view={
            "id":jsonobj[i]['id'],
            "title":jsonobj[i]['title'],
            "aboutus":jsonobj[i]['aboutus'],
            "status":jsonobj[i]['status']
            };
            var edit_json_view=JSON.stringify(edit_array_view);
            
            // edit button
            tag+="<td><span  data-toggle='modal' data-target='#exampleModal' class='button' title='Edit' onclick='edit_about("+edit_json_view+");'><i style='color: #36a907;' class='mdi mdi-lead-pencil mx-0'></i></span></td>";
             
            
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



function edit_about(get_product_data) {

 
  document.getElementById("label1_up").value = get_product_data["title"];
  document.getElementById("v_link_up").value = get_product_data["aboutus"];
  document.getElementById("hide_id").value = get_product_data["id"];
}
  
function upd_about() {

  var id = document.getElementById("hide_id").value;
  var formData = new FormData(about_info_update);
  formData.append('id',id);
  formData.append("action", "upd_about");
  // var data={id:id,action:'update_advertisement'};
  $.ajax({
    url: "include/about_us.php",
    type: "POST",
    contentType: false,
    processData: false,
    data: formData,
    beforeSend: function () {
      $(".loader").show();
    },

    success: function (response) {
      $(".loader").hide();
        
      $(".modal-backdrop").remove();
      $("body").removeClass("modal-open");
      loginContent("about_us");
      var get_availability = $("div").hasClass("div_err_msg");
      if (get_availability == true) {
        $(".div_err_msg").remove();
      }
      if (response.trim() == "success") {
        errorBoxAlert1("Data Updated successfully");
      } else {
        errorBoxAlert2("Error in update..");
      }
    },
  });
}