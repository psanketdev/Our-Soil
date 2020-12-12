<!DOCTYPE html>
<!-- If multi-language site, reconsider usage of html lang declaration here. -->

<html lang="en">
<head>
  <meta charset="utf-8" />

  <title>soil</title>

  <!-- Place favicon.ico in the root directory: mathiasbynens.be/notes/touch-icons -->
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" type="text/css" href="assets/vendor/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/slick/slick-theme.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>


<body>

<header>
    <nav class="navbar navbar-expand-lg text-white p-0">
        <div class="container-fluid">
            <a class="navbar-brand brand p-0" href="index.php">Our Soil</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex align-items-center flex-wrap "
                id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item mr-2" role="presentation">
                        <a class="nav-link text-white" href="#!">About Us</a>
                    </li>
                    <li class="nav-item mr-2" role="presentation">
                        <a class="nav-link text-white" href="#!">Contact Us</a>
                    </li>
                    <!-- <li class="nav-item mr-3" role="presentation"></li> -->
                    <li class="nav-item dropdown megamenu mr-2">
                        <a class="dropdown-toggle nav-link text-white" data-toggle="dropdown" aria-expanded="false" href="#!">Mega Menu</a>
                        <div class="dropdown-menu animate slideIn" role="menu" style="background-color:#fff;">
                            <div class="container" style="padding: 30px 0">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h1>Title</h1>
                                        <hr style="background-color: #e4e4e4;">
                                        <h5 class="pb-2">Title 1</h5>
                                        <h5 class="pb-2">Title 2</h5>
                                        <h5 class="pb-2">Title 3</h5>
                                        <h5 class="pb-2">Title 4</h5>
                                        <h5 class="pb-2">Title 5</h5>
                                        <h5 class="pb-2">Title 6</h5>
                                        <h5 class="pb-2">Title 7</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h1>Title</h1>
                                        <hr style="background-color: #e4e4e4;">
                                        <h5 class="pb-2">Title 1</h5>
                                        <h5 class="pb-2">Title 2</h5>
                                        <h5 class="pb-2">Title 3</h5>
                                        <h5 class="pb-2">Title 4</h5>
                                        <h5 class="pb-2">Title 5</h5>
                                        <h5 class="pb-2">Title 6</h5>
                                        <h5 class="pb-2">Title 7</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h1>Title</h1>
                                        <hr style="background-color: #e4e4e4;"><img class="img-fluid" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#FIXME" class="dropdown-toggle nav-link text-white" data-toggle="dropdown" aria-expanded="false" href="#!">Dropdown</a>
                        <div class="dropdown-menu animate slideIn mt-3" role="menu">
                            <a class="dropdown-item" role="presentation" href="#!">First Item</a>
                            <a class="dropdown-item" role="presentation" href="#!">Second Item</a>
                            <a class="dropdown-item" role="presentation" href="#!">Third Item</a>
                        </div>
                    </li>
                </ul>
                <!--<div class="dropdown"><button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown Baby</button>
                    <div class="dropdown-menu"><input type="text" class="form-control dropdown-search-input" placeholder="Search.."><a class="dropdown-item" href="#">Angular</a><a class="dropdown-item" href="#">Java</a><a class="dropdown-item" href="#">JavaScript</a></div>
                </div>-->
                <ul class="nav-right nav navbar-nav ml-auto  align-items-center flex-wrap m-0">
                    <li class="nav-item mr-2">
                        <span class="navbar-text actions cart">
                             <a class="login nav-link text-white" href="shoppingcart.php">
                                 <i class="fa fa-shopping-cart "></i>
                                 <span class="badge cart-item p-0  m-0 " style="font-size: 14px; font-weight: 500;color: #ffb142">1</span>
                            </a>
                        </span>
                    </li>
                    <li class="nav-item mr-2">
                        <a href="login.php" class="login text-white nav-link" href="login.php">Log In</a>
                    </li>
                    <li class="nav-item mr-2">
                        <a href="register.php" class="py-1 text-white nav-link" role="button">Sign Up</a></span>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#FIXME" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" aria-expanded="false" style="cursor: pointer">
                            <i class="fa fa-user-o pr-1 text-success" aria-hidden="true"></i>Onkar Kumbhar
                        </a>
                        <div class="dropdown-menu animate slideIn mt-3" role="menu">
                            <a href="myprofile.php" class="dropdown-item" role="presentation">My Profile</a>
                            <a href="myorders.php" class="dropdown-item" role="presentation" >My Orders</a>
                            <a href="settings.php" class="dropdown-item" role="presentation">Settings</a>
                        </div>
                    </li>
                </ul>      
            </div>
        </div>
    </nav>
</header>


<div class="forMobile-icons stickey-icons py-2 w-100 b-shadow d-lg-none d-sm-block">
    <div class="container">
        <div class="row text-center">
            <div class="col-3">
                <a href="#!" class="active">
                    <i class="fa fa-home  d-block" aria-hidden="true"></i>
                     <span class="d-block fs-14">Home</span>
                </a>
            </div>
             <div class="col-3">
                <a href="#!">
                    <i class="fa fa-window-restore  d-block" aria-hidden="true"></i>
                    <span class="d-block fs-14">Categories</span>
                </a>
            </div>
             <div class="col-3">
                <a href="#!">
                    <i class="fa fa-cart-plus  d-block" aria-hidden="true"></i>
                    <span class="d-block fs-14">Cart</span>
                </a>
            </div>
             <div class="col-3">
                <a href="#!">
                    <i class="fa fa-user  d-block" aria-hidden="true"></i>
                    <span class="d-block fs-14">Profile</span>
                </a>
            </div>
        </div>
    </div>
</div>


       

