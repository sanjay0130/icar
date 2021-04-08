var tObj={};
  function loginContent(page) {
  chk_sess();
  var xhttp;

  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();

    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      //alert(xhttp.responseText);
      $("#page-content-wrapper").load(xhttp.responseText);
      $("#load_js").html("<script src='js/"+page+".js'></script>");
    // console.log(page);
      
    }
  };
  // alert(page);
  xhttp.open("GET", "include/pages.php?page="+page, true);
  xhttp.send();
}  

$(function(){
  
  // chk_sess();
});

//below function is all about to check the session is on or not. if on then wht is the session user name
function chk_sess()
{
  //console.log('here is to get the session detail');
  var check_session={action:'check_session'};
    $.ajax({
    url: "../include/user_login.php",
    type : "POST",
    data: check_session,
    beforeSend: function(){
    //$('.loader').show();
    },
    success:function(response)
      {
         if(response.trim()=='admin')
        {
           
        }
        else
        {
          location.href='../';
          // document.getElementById('username').innerHTML=response+' <b class="caret"></b>';
        }
      }
    });
}


//Below section is to  destroy the session

function session_logout()
{
  //onsole.log('hello this s the session destroy part');
  //console.log('here is to get the session detail');
  var check_session={action:'session_out'};
    $.ajax({
    url: "../include/user_login.php",
    type : "POST",
    data: check_session,
    beforeSend: function(){
    //$('.loader').show();
    },
    success:function(response)
      {
        // console.log(response);
        if(response.trim()=='loged_out')
        {
           location.href='../';
        }
      }
    });
} 
// function for error_msg
function error_msg(msg,page)
{
   
    document.getElementById('err_adm').style.display = 'block';
    document.getElementById('err_add').innerHTML=msg;
    $('#err_adm').fadeIn().delay(2000).fadeOut();

}
// function for success_msg
function success_msg(msg,page)
{
   
    document.getElementById('scs_adm').style.display = 'block';
    document.getElementById('scs_add').innerHTML=msg;
    $('#scs_adm').fadeIn().delay(2000).fadeOut();

}

//Function redirect the page with message.

function loginWithMessage(page,val) {

  var xhttp;

  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();

    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      //alert(xhttp.responseText);
      $("#page_content").load(xhttp.responseText);

    }
  };
  
  xhttp.open("GET", "include/pages.php?page="+page+"&mid="+val, true);
  xhttp.send();
  success_message();
}



// Function used to fadeOut success message by mrutunjay date 30-01-2016

function success_message()
   {
    //alert("hiii");
    
    //--------Flash message javascript code start----------------
      setTimeout(function() 
        { 
          //jQuery('body>div.notice_msg').fadeOut('fast');
          jQuery('.notice_msg').fadeOut('fast');
        }, 5500);
      
      //--------Flash message code end------------------
   } 
function confirm_box_show()
{
  $("#deletemod").modal("show");
}
function confirm_box_hide()
{
  $("#deletemod").modal("hide");
}

function confirm_box(data)
{
  // confirm_box_show();
  
  var datata= get_return_confirm(data);
  if(datata==true)
  {
    return true;
  }
  else if(datata==false)
  {
    return false;
  }
  //console.log(datata);

}

function get_return_confirm(get_data)
{
  if(get_data==1)
  {
    return true;
  }
  else if(get_data==0){
    return false;
  }
  
}
function errorBoxAlert1(x){
    $('.myErrorAlrt1').removeClass('fade in myErrorAlrt1Show');
    $('.myErrorAlrt1').addClass('fade in myErrorAlrt1Show');
    $('#success_msg').html(x);
    timer = setTimeout(function(){fadeErrorBox1();}, 2000);
}

function fadeErrorBox1() 
{
    $('.myErrorAlrt1').removeClass('myErrorAlrt1Show');
}
function errorBoxAlert2(x){
    $('.myErrorAlrt2').removeClass('fade in myErrorAlrt2Show');
    $('.myErrorAlrt2').addClass('fade in myErrorAlrt2Show');
    $('#error_insertion').html(x);
    timer = setTimeout(function(){fadeErrorBox2();}, 2000);
}

function fadeErrorBox2() 
{
    $('.myErrorAlrt2').removeClass('myErrorAlrt2Show');
}
function ActiveMenu(id){
  var d=document.getElementById(id);
  d.className += 'active';
}
// function dynamic_button
// {
//   var dyna="<button class='btn btn-sm btn-primary upp' onclick='loginContent(\'master-dashboard\');'><i class='fa fa-chevron-circle-left  icon_upp'></i>Back</button>";
// }
// var product_details_arr=[];
// function product_details()
// {
//   // console.log('call function');
//   var product_details={action:'view'};
//       $.ajax({
//         url: "include/manage_product_details.php",
//         type : "POST",
//         data: product_details,
//         async:false,
//         beforeSend: function(){
//         //$('.loader').show();
//         },
//         success:function(response)
//           {
//             // product_details=response;
//             // document.getElementById('prod_json_data').innerHTML=response;
//             product_details_arr.push(response);



            
//           }
//       });
// }
//             console.log(product_details_arr);
