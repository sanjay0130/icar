function create_photo_gallery() {

  var formData = new FormData(photo_gallery_name_form);
  
  var image = $('#image')[0].files;
  formData.append('image',image);
  formData.append("action", "create_photo_gallery");
        
     $.ajax({
       url: "include/photo_gallery.php",
       type: "POST",
       data:formData,
     contentType: false, 
     processData: false, 
      success: function (response) {
        // console.log(response);
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
        // loginContent('create_job_post');
        loginContent("photo_gallery");
      },
    });
    
  }

  function get_photo_gallery_details() {
    var data = { action: "get_photo_gallery_details" };
    // ajax call
    //to send a request to the php page
    //and after processing it will get the response
    $.ajax({
      url: "include/photo_gallery.php",
      type: "POST",
      data: data,
      beforeSend: function () {
        $(".loader").show();
      },
  
      success: function (response) {
        // console.log(response);
        $(".loader").hide();
       
        var jsonobj = JSON.parse(response);
        var tag = "";
        // //loop to create and display the table rows
        for (var i = 0; i < jsonobj.length; i++) {
          var counter = i + 1;
          tag += "<tr>";
          tag += "<td>" + counter + "</td>";
          var image_path=jsonobj[i]["image"];
          var base_url = window.location.origin;
          // var image_path =base_url+"/rpid/img/banner/"+image_path;
         tag += '<td> <img src="../../img/photo_gallery/'+image_path+'" width="50" height="30" /> </td>';
      var edit_array_view = {
          id: jsonobj[i]["id"],
          image: jsonobj[i]["image"]
         
      };
          var edit_json_view = JSON.stringify(edit_array_view);
             
          tag+="<td><span onclick='delete_photo_gallery("+edit_json_view+");'><i style='color: red;' class='mdi mdi-delete-forever mx-0'></i></span></td>";
          tag += "</tr>";
       }
        document.getElementById("show_data").innerHTML = tag;
        if (!$.fn.DataTable.isDataTable('#myTable')) {
          $(document).ready(function() {$('#myTable').DataTable()});
          }
      },
    });
  }
  
    function delete_photo_gallery(get_update_data) {
    // alert("test");
    var id = get_update_data["id"];
    var data = { id: id, action: "delete_photo_gallery" };
    $.ajax({
      url: "include/photo_gallery.php",
      type: "POST",
      data: data,
      beforeSend: function () {
        $(".loader").show();
      },
  
      success: function (response) {
        loginContent("photo_gallery");
        $(".loader").hide();
        if (response.trim() == "success") {
          errorBoxAlert1("Data Deleted successfully");
        } else {
          errorBoxAlert2("Error in Deletion..");
        }
      },
    });
  }