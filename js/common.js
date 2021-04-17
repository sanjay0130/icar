// // ------------- show achievement in table -----------
$(document).ready(function(){
 
  $('#icarPhotos').lightGallery({
          selector: '#icarPhotos .photoBox'
  });     
  $('#icarVideos').lightGallery({
    selector: '#icarVideos .vidBox'
});           
});
function view_achievement_details()
{
  
  var data={action:'get_achievement_details'};
    // ajax call
    //to send a request to the php page 
    //and after processing it will get the response
    $.ajax({
      url: "include/achievements.php",
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
         
          tag+="<tr>";
            
            tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['label1']+"</td>";
            // tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['label2']+"</td>"; 

            // tag+="<td style='text-transform: capitalize;'>"+jsonobj[i]['label3']+"</td>"; 

              tag+="</tr>";
        }
         document.getElementById('show_achievements_table').innerHTML=tag;
         
         
         
        }
    });
}

/***********************************************************************************************
  Name: Mrutunjay Pani
  Date-8/04/21
  Details-The below function is for Banner Details .
 ***********************************************************************************************/
function get_banner_details() {


    var data = { action: "get_banner_details" };
    // ajax call
    //to send a request to the php page
    //and after processing it will get the response
    $.ajax({
      url: "include/banner.php",
      type: "POST",
      data: data,
      beforeSend: function () {
        $(".loader").show();
      },
  
      success: function (response) {
        // console.log(response);
        $(".loader").hide();
       
        var jsonobj = JSON.parse(response);
        var tag = '';
        // //loop to create and display the table rows
        for (var i = 0; i < jsonobj.length; i++) {
          var counter = i + 1;
          
          var image_path=jsonobj[i]["image"];
          // var base_url = window.location.origin;
          // var base_url = window.location.pathname.split("/").filter(function(c) { return c.length;}).pop();
          // if()
          var image_path ='img/banner/'+image_path;
          tag+='<div class="carousel-item ';
          if(i==0){
            tag+=' active';
          }
          tag+='"><img src="'+image_path+'"></div>';
       }
        document.getElementById("view_slider_banner").innerHTML = tag;
        
      },
    });
  }

  // // ------------- show data in table -----------

function get_latest_news_details()
{
  // document.getElementById('latest_news_ul').innerHTML="<li><p>kjfjhfhg</p><a href='#'> More...</a></li>";
  // return false;
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
          // console.log(jsonobj);
          //  return false;
          var tag ="";
        // // //loop to create and display the table rows
        for(let i=0;i<jsonobj.length;i++){
        
            tag+="<li><p>"+jsonobj[i]['news']+"</p><a href='#'>More...</a></li>";
        
        }
         document.getElementById('xyz').innerHTML=tag;
         
        }
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
        $(".loader").hide();
       
        var jsonobj = JSON.parse(response);
        var tag = "";
        var image_path=jsonobj[0]["image"];
          // var base_url = window.location.origin;
          // var image_path =base_url+"/rpid/img/news/"+image_path;
          var base_url ='img/news/'+image_path;
          tag += '<figure class="smImg"><img src="'+base_url+'" alt=""></figure><a href="#" class="moreBtn">More</a>';
          
       
        document.getElementById("news_updates_div").innerHTML = tag;
       
      },
    });
  }


/***********************************************************************************************
  Name: Mrutunjay Pani
  Date-8/04/21
  Details-The below function is for Banner Details .
 ***********************************************************************************************/
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
          console.log("");
          tag += `<div class="col-sm-4">
                            <div class="vidBox">
                                <iframe width="100%" height="236" src="`+jsonobj[i]['v_link']+`" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>`;
            
        }
         document.getElementById('icarVideos').innerHTML=tag;
        
        }
    });
}

/***********************************************************************************************
  Name: Mrutunjay Pani
  Date-8/04/21
  Details-The below function is for team Details .
 ***********************************************************************************************/
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
          tag += `<div class="col-sm-4">
          <div class="teamBoy">
            <figure><img src="uploads/`+jsonobj[i]['member_photo']+`" alt=""></figure>
            <div class="tyBody">
              <h4>`+jsonobj[i]['team_member_name']+`<small>`+jsonobj[i]['member_designation']+`</small></h4>
            </div>
          </div>
        </div>`;
                       
        }
         document.getElementById('team_member_id').innerHTML=tag;
        
        }
    });
}


function create_contact() {
     var formData = new FormData(contact_us_form);
      formData.append("action", "create_contact");
      $.ajax({
        url: "include/contact_us.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function () {
        },

        success: function (response) {
          if (response.trim() == "success") {
            alert("your request send successfully..");
            location.reload();
          } else {
            alert("Please check your Details..");
          }
        },
      });    
}


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
          
          tag += "<span>"+jsonobj[i]['aboutus']+"</span>";
           
        }
         document.getElementById('about_content').innerHTML=tag;
        
        }
    });
}