function get_admin_details() {
  var data={action:'get_admin_details'};
  $.ajax({
    url: "include/header.php",
    type: "POST",
    data: data,
    beforeSend: function () {},

    success: function (response) {
      var jsonobj = JSON.parse(response);

      // //loop to create and display the table rows
      for (var i = 0; i < jsonobj.length; i++) {
        document.getElementById("password").value = jsonobj[i]["password"];
        document.getElementById("hide_id").value = jsonobj[i]["id_admin"];
        // document.getElementById("ad_photo").value = jsonobj[i]["ad_photo"];
      }
    },
  });
}


  



