<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RPID</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet" />
  <!--<link rel="shortcut icon" href="./images/s.png" />-->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
    }

    .wave {
      position: fixed;
      height: 100%;
      left: 0;
      bottom: 0;
      z-index: -1;
    }

    .container {
      width: 100vw;
      height: 100vh;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 7rem;
      padding: 0 2rem;
    }

    .img {
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    .img img {
      width: 500px;
    }

    .login_container {
      display: flex;
      align-items: center;
      text-align: center;
    }

    form {
      width: 360px;
    }

    .avtar {
      width: 150px;
    }

    form h2 {
      text-transform: uppercase;
      font-size: 2.9rem;
      margin: 15px 0;
      color: #333;
    }

    .input_div {
      position: relative;
      display: grid;
      grid-template-columns: 7% 93%;
      margin: 25px 0;
      /* padding: 5px 0; */
      border-bottom: 2px solid #d9d9d9;
    }

    .in_width {
      width: 360px;
    }

    .in_width1 {
      width: 150px;
    }

    .input_div:after,
    .input_div:before {
      content: "";
      position: absolute;
      bottom: -2px;
      width: 0;
      height: 2px;
      background-color: #57C7D4;
      transition: 0.3s;
    }

    .input_div:after {
      right: 50%;
    }

    .input_div:before {
      left: 50%;
    }

    .input_div.focus .i i {
      color: #57C7D4;
    }

    .input_div.focus div h5 {
      top: -5px;
      font-size: 15px;
    }

    .input_div.focus:after,
    .input_div.focus:before {
      width: 50%;
    }

    .input_div.one {
      margin-top: 0;
    }

    .input_div.two {
      margin-bottom: 4px;
    }

    .i {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .i i {
      color: #d9d9d9;
      transition: 0.3s;
    }

    .refresh {
      border-bottom: none;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #57C7D4;
    }

    .input_div>div {
      position: relative;
      height: 45px;
    }

    .input_div>div h5 {
      position: absolute;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      color: #999;
      font-size: 18px;
      /* display: none; */
      transition: 0.3s;
    }

    .input {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      border: none;
      outline: none;
      background: none;
      padding: 0.5rem 0.7rem;
      font-size: 1.2rem;
      color: #555;
      font-family: "Poppins", sans-serif;
    }

    .btn {
      display: block;
      width: 100%;
      height: 50px;
      border-radius: 25px;
      margin: 1rem 0;
      font-size: 1.2rem;
      text-transform: uppercase;
      font-family: "Poppins", sans-serif;
      outline: none;
      border: none;
      cursor: pointer;
      background-image: linear-gradient(to right, #9bedf5, #57C7D4, #9bedf5);
      background-size: 200%;
      transition: 0.5s;
    }

    .btn:hover {
      background-position: right;
    }

    #error_msg {
      color: red;
      text-align: center;
    }

    @media screen and (max-width: 1050px) {
      .container {
        grid-gap: 5rem;
      }
    }

    @media screen and (max-width: 1000px) {
      form {
        width: 290px;
      }

      .in_width {
        width: 290px;
      }

      .in_width1 {
        width: 120px;
      }

      form h2 {
        font-size: 2.4rem;
        margin: 8px 0;
      }

      .input_div>div h5 {
        font-size: 14px;
      }

      .input_div.focus div h5 {
        top: -5px;
        font-size: 13px;
      }

      .img img {
        width: 400px;
      }
    }

    @media screen and (max-width: 900px) {
      .img {
        display: none;
      }

      .container {
        grid-template-columns: 1fr;
      }

      .wave {
        display: none;
      }

      .login_container {
        justify-content: center;
      }
    }
  </style>
</head>

<body>
  <img src="./images/wave.png" alt="" class="wave" />
  <div class="container">
    <div class="img">
      <img src="./images/nrri.png" alt="" />
    </div>
    <div class="login_container">
      <form action="">
        <img src="./images/undraw_finance_0bdk.svg" alt="" class="avtar" />
        <h2>Welcome</h2>
        <div class="input_div in_width one">
          <div class="i">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
          <div>
            <h5>Username</h5>
            <input type="text" class="input" id="user_name" autocomplete="off" />
          </div>
        </div>

        <div class="input_div in_width two">
          <div class="i">
            <i class="fa fa-lock"></i>
          </div>
          <div>
            <h5>Password</h5>
            <input type="password" class="input" id="pwd" autocomplete="off" />
          </div>
        </div>
        <div style="display: flex;justify-content: space-between;">
          <div class="input_div in_width1 two">
            <div>

            </div>
            <div>
              <input type="text" id="txtCaptcha" readonly="true" class="input" />
            </div>
          </div>
          <div class="input_div in_width1 two">
            <div class="i">

            </div>
            <div>
              <h5>Enter Captch</h5>
              <input type="text" id="txtInput" name="prof" onpaste="return false;" ondrop="return false;" class="input" />
              <input type="hidden" id="captcha_add" name="captcha_add">
            </div>
          </div>
          <div class="input_div two" style="border-bottom:none">
            <div class="refresh"> <i class="fa  fa-refresh" style="font-size: 25px;" onclick="DrawCaptcha();"></i> </div>
          </div>
        </div>
        <input type="button" class="btn" value="Login" onclick="user_validate();" />
        <div id="error_msg"></div>
      </form>
    </div>
  </div>
  <script type="text/javascript">
    const inputs = document.querySelectorAll(".input");

    function focusFun() {
      let parent = this.parentNode.parentNode;
      parent.classList.add("focus");
    }

    function blurFun() {
      let parent = this.parentNode.parentNode;
      if (this.value == "") {
        parent.classList.remove("focus");
      }
    }

    inputs.forEach((input) => {
      input.addEventListener("focus", focusFun);
      input.addEventListener("blur", blurFun);
    });
  </script>

  <script src="js/jquery-3.4.0.min.js"></script>
  <script type="text/javascript" src="js/validate.js"></script>
  <script type="text/javascript">
    DrawCaptcha();

    function DrawCaptcha() {
      var a = Math.ceil(Math.random() * 10);
      var b = Math.ceil(Math.random() * 10);
      var add = parseInt(a) + parseInt(b);
      var code = a + ' + ' + b;
      document.getElementById("txtCaptcha").value = code;
      document.getElementById("captcha_add").value = add;

    }
    $(document).keypress(function(e) {
      if (e.which == 13) {
        // alert('enter key is pressed');
        var u_name = $('#user_name').value;
        var pwd = $('#pwd').value;
        if (u_name != '' || pwd != '') {
          user_validate();
          // DrawCaptcha();
        }
      }
    });
  </script>
</body>

</html>