function create_team() {
     var formData = new FormData(team_form);
      formData.append("action", "create_team");
      $.ajax({
        url: "include/team_member.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function () {
          $(".loader").show();
        },

        success: function (response) {

          $(".loader").hide();
            // console.log(response);return false;
          var get_availability = $("div").hasClass("div_err_msg");
          if (get_availability == true) {
            $(".div_err_msg").remove();
          }
          if (response.trim() == "success") {
            errorBoxAlert1("Added successfully..");
          } else {
            errorBoxAlert2("Error in Adding..");
          }
          loginContent("team_member");
        },
      });    
}



function get_team_info()
{
  
  var data={action:'get_team_info'};
    // ajax call
    //to send a request to the php page 
    //and after processing it will get the response
    $.ajax({
      url: "include/team_member.php",
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
            tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['team_member_name']+"</td>"; 
            tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['member_designation']+"</td>";
            var base_url = window.location;
            var photo_path_temp='../../uploads/'+jsonobj[i]['member_photo'];
            tag += '<td> <img src="'+photo_path_temp+'" width="50" height="30" /> </td>';
           
            // //code for view all user details
            var edit_array_view={
            "id":jsonobj[i]['id'],
            "team_member_name":jsonobj[i]['team_member_name'],
            "member_designation":jsonobj[i]['member_designation'],
            "image":jsonobj[i]['member_photo'],
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
            tag+="<td><span  data-toggle='modal' data-target='#exampleModal' class='button' title='Edit' onclick='edit_team("+edit_json_view+");'><i style='color: #36a907;' class='mdi mdi-lead-pencil mx-0'></i></span></td>";
             
            // delete button
            tag+="<td> <span onclick='delete_team("+edit_json_view+");'><i style='color: red;' class='mdi mdi-delete-forever mx-0'></i></span></td>";
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
        url: "include/team_member.php",
        type : "POST",
        data: data,
        beforeSend: function(){
          $('.loader').show();
          },
        
        success:function(response)
          {
            loginContent('team_member');
            $('.loader').hide();
            if(response.trim()=="success")
            {
              errorBoxAlert1('Status Changed Successfully');
            }
            else{
              errorBoxAlert2('Error While Status Changed..');
            }
            get_team_info();
             //loginContent('customer_info');
          }
      });
    }else{
      return false;
    }
}



function delete_team(get_update_data)
{
  var x =confirm("Are you sure that you want to parmanently  delete the item ?");
  if(x == true){
  var id = get_update_data['id'];
  var data={id:id,action:'delete_team'};
    $.ajax({
      url: "include/team_member.php",
      type : "POST",
      data: data,
      beforeSend: function(){
        $('.loader').show();
        },
      
      success:function(response)
        {
          loginContent('team_member');
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

function edit_team(get_product_data) {

  var base_url = window.location;  
  var photo_path_temp = get_product_data["image"];
  var photo_path_temp ='../../uploads/'+photo_path_temp;

  document.getElementById("name_up").value = get_product_data["team_member_name"];
  document.getElementById("designation_up").value = get_product_data["member_designation"];
  $("#show_image1_photo").html('<img src="'+photo_path_temp+'" width="50" height="50" />');
  document.getElementById("hide_id").value = get_product_data["id"];
}
  
function upd_team() {

  var id = document.getElementById("hide_id").value;
  var formData = new FormData(team_info_update);
  formData.append('id',id);
  formData.append("action", "upd_team");
  // var data={id:id,action:'update_advertisement'};
  $.ajax({
    url: "include/team_member.php",
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
      loginContent("team_member");
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


// function excel_download()
//  {
//      var id_arr=[];
//      $.each($("input[name='sport']:checked"), function(){
//          id_arr.push($(this).val());
//      });
//     //window.open('include/uemployee.php?action=DOWNLOAD_EXCEL&id='+id_arr,"newqwin","toolbar=0,status=0,menubar=0,scrollbars=1,resizable=0,width=1200,height=750").focus();
//     window.location = "include/brand.php?action=DOWNLOAD_EXCEL&id="+id_arr;
// }
// function pdf_download()
// {
//   var id_arr=[];
//     $.each($("input[name='sport']:checked"), function(){
//         id_arr.push($(this).val());
//     });
//   window.open("include/brand.php?action=DOWNLOAD_PDF&id="+id_arr);
// }

