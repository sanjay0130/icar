// // ------------- show achievement in table -----------

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
          var base_url = window.location.origin;
          var image_path =base_url+'/rpid/img/banner/'+image_path;
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
         $('#vertical-ticker').vTicker({
                speed: 700,
                pause: 4000,
                showItems: 4,
                mousePause: true,
                animate: true,
                startPaused: false
            });
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
          var base_url = window.location.origin;
          var image_path =base_url+"/rpid/img/news/"+image_path;
          tag += '<figure class="smImg"><img src="'+image_path+'" alt=""></figure><a href="#" class="moreBtn">More</a>';
          
       
        document.getElementById("news_updates_div").innerHTML = tag;
       
      },
    });
  }