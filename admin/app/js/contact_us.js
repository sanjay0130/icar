function get_contact_info()
{
  
  var data={action:'get_contact_info'};
    // ajax call
    //to send a request to the php page 
    //and after processing it will get the response
    $.ajax({
      url: "include/contact_us.php",
      type : "POST",
      data: data,
      beforeSend: function(){
        $('.loader').show();
        },
      
      success:function(response)
        {
          $('.loader').hide();
          var jsonobj=JSON.parse(response);
          var tag ="";
        // //loop to create and display the table rows
        for(var i=0;i<jsonobj.length;i++){
          var counter  = i+1;
          tag += "<tr>";
          tag += "<td>" + counter + "</td>";
          tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['name']+"</td>"; 
          tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['mobile']+"</td>";
          tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['emailid']+"</td>";
          tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['message']+"</td>";
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