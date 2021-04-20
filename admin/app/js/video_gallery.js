function create_video() {
  	  var ids=['v_link'];
  var validation_type=[["blank"]];
  var messeges=[["<span style='color:red;'>Link cannot be blank</span>"]];
  var msg=validate(ids,validation_type,'err_msg',messeges);
  if(msg == undefined)
  { 
      var formData = new FormData(video_form);
      formData.append("action", "create_video");
      $.ajax({
        url: "include/video_gallery.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function () {
          $(".loader").show();
        },

        success: function (response) {

          $(".loader").hide();
            
          var get_availability = $("div").hasClass("div_err_msg");
          if (get_availability == true) {
            $(".div_err_msg").remove();
          }
          if (response.trim() == "success") {
            errorBoxAlert1("Added successfully..");
          } else {
            errorBoxAlert2("Error in Adding..");
          }
          loginContent("video_gallery");
        },
      });
  }
  else{
  	return false;
  }
    
}



function get_video_info()
{
  
  var data={action:'get_video_info'};
    // ajax call
    //to send a request to the php page 
    //and after processing it will get the response
    $.ajax({
      url: "include/video_gallery.php",
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
          var status=jsonobj[i]['status'];
          var id=jsonobj[i]["id"];
          tag += "<tr>";
            tag += "<td>" + counter + "</td>";
            tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['label1']+"</td>"; 
            tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['v_link']+"</td>";
                      
            // //code for view all user details
            var edit_array_view={
            "id":jsonobj[i]['id'],
            "label1":jsonobj[i]['label1'],
            "v_link":jsonobj[i]['v_link'],
            "status":jsonobj[i]['status']
            };
            var edit_json_view=JSON.stringify(edit_array_view);
            if(status==1)
            {
              tag+="<td> <span onclick='active_inactive("+edit_json_view+");'><button type='button' class='btn btn-success d-md-inline-block text-white'>Active</button></span></td>";
            }  
            else
            {
              tag+="<td> <span onclick='active_inactive("+edit_json_view+");'><button type='button' class='btn btn-danger d-md-inline-block text-white'>Inactive</button></span></td>";
            }
            // edit button
            tag+="<td><span  data-toggle='modal' data-target='#exampleModal' class='button' title='Edit' onclick='edit_video("+edit_json_view+");'><i style='color: #36a907;' class='mdi mdi-lead-pencil mx-0'></i></span></td>";
             
            // delete button
            tag+="<td> <span onclick='delete_video("+edit_json_view+");'><i style='color: red;' class='mdi mdi-delete-forever mx-0'></i></span></td>";
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



function active_inactive(active_inactive_data)
{
  var x =confirm("Are you sure that you want to change Status?");
  // console.log(x);
  if(x == true){
    var id = active_inactive_data['id'];
    // console.log(id);
    // return false;
    var status = active_inactive_data['status'];
    var data={id:id,status:status,action:'change_status'};
      $.ajax({
        url: "include/video_gallery.php",
        type : "POST",
        data: data,
        beforeSend: function(){
          $('.loader').show();
          },
        
        success:function(response)
          {
            loginContent('video_gallery');
            $('.loader').hide();
            if(response.trim()=="success")
            {
              errorBoxAlert1('Status Changed Successfully');
            }
            else{
              errorBoxAlert2('Error While Status Changed..');
            }
            get_video_info();
             //loginContent('customer_info');
          }
      });
    }else{
      return false;
    }
}



function delete_video(get_update_data)
{
  var x =confirm("Are you sure that you want to parmanently  delete the item ?");
  if(x == true){
  var id = get_update_data['id'];
  var data={id:id,action:'delete_video'};
    $.ajax({
      url: "include/video_gallery.php",
      type : "POST",
      data: data,
      beforeSend: function(){
        $('.loader').show();
        },
      
      success:function(response)
        {
          loginContent('video_gallery');
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

function edit_video(get_product_data) {

 
  document.getElementById("label1_up").value = get_product_data["label1"];
  document.getElementById("v_link_up").value = get_product_data["v_link"];
  document.getElementById("hide_id").value = get_product_data["id"];
}
  
function upd_video() {

  var id = document.getElementById("hide_id").value;
  var formData = new FormData(video_info_update);
  formData.append('id',id);
  formData.append("action", "upd_video");
  // var data={id:id,action:'update_advertisement'};
  $.ajax({
    url: "include/video_gallery.php",
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
      loginContent("video_gallery");
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


function excel_download()
 {
     var id_arr=[];
     $.each($("input[name='sport']:checked"), function(){
         id_arr.push($(this).val());
     });
    //window.open('include/uemployee.php?action=DOWNLOAD_EXCEL&id='+id_arr,"newqwin","toolbar=0,status=0,menubar=0,scrollbars=1,resizable=0,width=1200,height=750").focus();
    window.location = "include/video_gallery.php?action=DOWNLOAD_EXCEL&id="+id_arr;
}
function pdf_download()
{
  var id_arr=[];
    $.each($("input[name='sport']:checked"), function(){
        id_arr.push($(this).val());
    });
  window.open("include/video_gallery.php?action=DOWNLOAD_PDF&id="+id_arr);
}

