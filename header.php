<header class="siteHeader">
  <section class="topBar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 px-sm-0 my-auto text-center text-sm-left">
          <h5 id="datetime"></h5>
          <script>
	        var dt = new Date();
	        document.getElementById("datetime").innerHTML = (("0" + dt.getDate()).slice(-2)) + "." + ((
	            "0" + (dt.getMonth() + 1)).slice(-2)) + "." + (dt.getFullYear()) + " " + (("0" + dt
	            .getHours()).slice(-2)) + ":" + (("0" + dt.getMinutes()).slice(-2));
	    </script>
        </div>
        <div class="col-sm-3 my-auto text-center text-sm-left">
          <div class="fontSize"> <a href="#">Skip to main content</a>
            <ul>
              <li><a href="#">A-</a></li>
              <li><a href="#">A</a></li>
              <li><a href="#">A+</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4 my-auto text-center text-sm-left">
          <div class="adminArea">
            <ul>
              <li><a href="admin/" target="_blank">Admin Login</a></li>
              <li><a href="#">Sitemap</a></li>
              <li><a href="#">Translator</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-2 my-auto text-center text-sm-left">
          <div class="searchArea">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search Here">
              <div class="input-group-append"> <span class="input-group-text"><i class="fa fa-search"></i></span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mainHeader">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 px-0">
          <a href="./"><figure class="hdrImg"> <img src="img/rpmiHeader.png" alt=""> </figure></a>
        </div>
      </div>
    </div>
  </section>
  <section class="siteTopNav">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 px-sm-0">
          <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span> </button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown1" aria-controls="navbarNavDropdown"
                         aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span> </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active"> <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="about_us.php">About Us <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="our_team.php">Team <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Decision Support System </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="#">Another action</a> </li>
                    <li class="nav-item dropdown"> <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Decision Support System </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li class="nav-item"><a class="dropdown-item" href="#">Action</a> </li>
                        <li class="nav-item"><a class="dropdown-item" href="#">Another action</a></li>
                        <li class="nav-item dropdown"> <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Decision Support System </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="nav-item dropdown"> <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Decision Support System </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Another action</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item"> <a class="nav-link" href="#">Rice Pest Lab <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="help_faq.php">Help & Faq <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Citation <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="contact_us.php">Contact Us <span class="sr-only">(current)</span></a> </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
</header>
