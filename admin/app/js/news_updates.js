function create_news_updates() {

  var formData = new FormData(banner_name_form);
  
  var image = $('#image')[0].files;
  formData.append('image',image);
  formData.append("action", "create_news_updates");
        
     $.ajax({
       url: "include/news_updates.php",
       type: "POST",
       data:formData,
       enctype:'multipart/form-data',
       cache:false,
     contentType: false, 
     processData: false, 
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
        // loginContent('create_job_post');
        loginContent("news_updates");
      },
    });
    
  }

  function get_news_updates_details() {
    var data = { action: "get_news_updates_details" };
    // ajax call
    //to send a request to the php page
    //and after processing it will get the response
    $.ajax({
      url: "include/news_updates.php",
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
          tag += "<td>" + jsonobj[i]["news_updates"] + "</td>";
          var image_path=jsonobj[i]["image"];
          var base_url = window.location.origin;
          var image_path ="../../img/news/"+image_path;
         tag += '<td> <img src="'+image_path+'" width="50" height="30" /> </td>';
      var edit_array_view = {
          id: jsonobj[i]["id"],
          image: jsonobj[i]["image"],
          label1: jsonobj[i]["news_updates"]
         
      };
          var edit_json_view = JSON.stringify(edit_array_view);
             
          tag+="<td><span onclick='delete_news_updates("+edit_json_view+");'><i style='color: red;' class='mdi mdi-delete-forever mx-0'></i></span></td>";
          tag += "</tr>";
       }
        document.getElementById("show_data").innerHTML = tag;
        if (!$.fn.DataTable.isDataTable('#myTable')) {
          $(document).ready(function() {$('#myTable').DataTable()});
          }
      },
    });
  }
  
    function delete_news_updates(get_update_data) {
    // alert("test");
    var id = get_update_data["id"];
    var data = { id: id, action: "delete_news_updates" };
    $.ajax({
      url: "include/news_updates.php",
      type: "POST",
      data: data,
      beforeSend: function () {
        $(".loader").show();
      },
  
      success: function (response) {
        loginContent("news_updates");
        $(".loader").hide();
        if (response.trim() == "success") {
          errorBoxAlert1("Data Deleted successfully");
        } else {
          errorBoxAlert2("Error in Deletion..");
        }
      },
    });
  }