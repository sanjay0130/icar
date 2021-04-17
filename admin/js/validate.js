
function user_validate(){
  // alert("hi");
  var uname,pwd;
  var text="";
  uname=document.getElementById('user_name').value;
  // alert(x);
  pwd=document.getElementById('pwd').value;
  // // alert(y);
  var captcha_image=document.getElementById('captcha_add').value;
    var captcha_input=document.getElementById('txtInput').value.trim();
    // alert(captcha_input+'    '+captcha_image);
 
  if(uname=="")
  {
    text+="Please enter valid user name";
    document.getElementById('error_msg').innerHTML=text;
    return false;
  }
  else if(pwd=="")
  {
    text+="Please enter your Password";
    document.getElementById('error_msg').innerHTML=text;
    return false;
  }
 else if(captcha_input=='')
    {
    
  document.getElementById('error_msg').innerHTML='Enter  Captcha.';
  
      $('#txtInput').focus();

   // setTimeout(function(){
   //   document.getElementById('error_msg').innerHTML='';
   // },3000);
  
       return false;
    }

   else if(captcha_image != captcha_input )
  {
      document.getElementById('error_msg').innerHTML='Invalid  Captcha.';
  
      $('#txtInput').focus();

   // setTimeout(function(){
   //   document.getElementById('error_msg').innerHTML='';
   // },3000);
  
       return false;
  }

  else{
  var data={username:uname,password:pwd,action:'admin_login'};
      
      $.ajax({
      url: "include/user_login.php",
      data:data,
      type: "POST",
      beforeSend: function(){
       
      },
      success: function(data){
       // console.log(data);
         if (data.trim() == "fail")
        {
        document.getElementById('error_msg').innerHTML='Enter Valid Username & Password.';
        DrawCaptcha();
        }
        else
        {
          if(data.trim() == 'admin')
          {
            $('#error_msg').html('');
           location.href='app/';

          }
        }
       
          }
        });
          
  }  
}