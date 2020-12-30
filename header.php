<!DOCTYPE html>
<!-- If multi-language site, reconsider usage of html lang declaration here. -->

<html lang="en">
<head>
  <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>soil</title>
	
  <!-- html5shiv aka html5 shim. Supporting HTML5 and CSS for IE browsers less than IE9. -->
  <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  <!-- Place favicon.ico in the root directory: mathiasbynens.be/notes/touch-icons -->
  <link rel="shortcut icon" href="favicon.ico" />

  <!--font-awesome link for icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
  <!-- Default style-sheet is for 'media' type screen (color computer display).  -->
  <link rel="stylesheet" type="text/css" href="assets/vendor/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/slick/slick-theme.css">
  <link rel="stylesheet" media="screen" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/Footer-Dark.css">
  <link rel="stylesheet" href="assets/css/Mega-Menu-Dropdown-100-Editable---Ambrodu.css">
	<link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
	<link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
	<link rel="stylesheet" href="assets/css/Contact-Form-Clean.css"> 
 <style>
body {
  font-family: 'Roboto', sans-serif;
}

a {text-decoration: none; font-size: 14px; font-weight: 300}

.items {
    width: 95%;
    margin: 0px auto;
    margin-top: 10px
}

.slick-slide {
    margin: 5px
}

.slick-slide img {
    width: 100%;
    border: 0px solid #fff
}

.nav-right li { list-style: none;}

.nav-right li a{
    color: #fff;
    font-size: 14px;
    text-decoration: none;
    }

.navbar-dark .navbar-brand {
    font-weight: 500;
    color: orange;
    font-size:25px;
}

</style>

</head>
<body>
<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg py-2 text-white" style="background-color: #197e00; box-shadow: 10px 2px 10px rgba(0,0,0,0.5);">
				<div class="container-fluid">
					<a class="navbar-brand brand p-0" href="index.php">Vegitable</a>
					<button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse d-flex align-items-center flex-wrap "id="navcol-1">
						<ul class="nav navbar-nav mr-auto">
								<li class="nav-item mr-2" role="presentation">
									<a class="nav-link text-white" href="#">About Us</a>
								</li>
								<li class="nav-item mr-2" role="presentation">
									<a class="nav-link text-white" href="#">Contact Us</a>
								</li>
								<!-- <li class="nav-item mr-3" role="presentation"></li> -->
								<li class="nav-item dropdown megamenu mr-2">
									<a class="dropdown-toggle nav-link text-white" data-toggle="dropdown" aria-expanded="false" href="#">Mega Menu</a>
									<div class="dropdown-menu animate slideIn" role="menu" style="background-color: #8ea7ff;">
										<div class="container" style="padding-top: 35px;padding-bottom: 35px;">
											<div class="row">
												<div class="col-md-4">
													<h1 class="text-white">Title</h1>
													<hr style="background-color: #ffffff;">
													<h5 class="text-white">Title 1</h5>
													<h5 class="text-white">Title 2</h5>
													<h5 class="text-white">Title 3</h5>
													<h5 class="text-white">Title 4</h5>
													<h5 class="text-white">Title 5</h5>
													<h5 class="text-white">Title 6</h5>
													<h5 class="text-white">Title 7</h5>
												</div>
												<div class="col-md-4">
													<h1 class="text-white">Title</h1>
													<hr style="background-color: #ffffff;">	
													<h5 class="text-white">Title 1</h5>
													<h5 class="text-white">Title 2</h5>
													<h5 class="text-white">Title 3</h5>
													<h5 class="text-white">Title 4</h5>
													<h5 class="text-white">Title 5</h5>
													<h5 class="text-white">Title 6</h5>
													<h5 class="text-white">Title 7</h5>
												</div>
												<div class="col-md-4">
													<h1 class="text-white">Title</h1>
													<hr style="background-color: #ffffff;"><img class="img-fluid" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80">
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a href="#FIXME" class="dropdown-toggle nav-link text-white" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown</a>
									<div class="dropdown-menu" role="menu">
										<a class="dropdown-item" role="presentation" href="#">First Item</a>
										<a class="dropdown-item" role="presentation" href="#">Second Item</a>
										<a class="dropdown-item" role="presentation" href="#">Third Item</a>
									</div>
								</li>
						</ul>
						<!--<div class="dropdown"><button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown Baby</button>
								<div class="dropdown-menu"><input type="text" class="form-control dropdown-search-input" placeholder="Search.."><a class="dropdown-item" href="#">Angular</a><a class="dropdown-item" href="#">Java</a><a class="dropdown-item" href="#">JavaScript</a></div>
						</div>-->
						<ul class="nav-right nav navbar-nav ml-auto  align-items-center flex-wrap m-0">
								<li class="nav-item mr-2">
										<span class="navbar-text actions cart">
													<a class="login nav-link text-white" href="cart.php">
															<i class="fa fa-shopping-cart "></i>
															<span class="badge cart-item p-0  m-0 " style="font-size: 14px; font-weight: 500;color: #ffb142">1</span>
												</a>
										</span>
								</li>
								<li class="nav-item mr-2">
										<a href="login.php" class="login text-white nav-link" href="login.php">Log In</a>
								</li>
								<li class="nav-item mr-2">
										<a href="register.php" class="py-1 text-white nav-link" role="button" href="register.php">Sign Up</a></span>
								</li>
								<li class="nav-item dropdown">
										<a href="#FIXME" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" aria-expanded="false" style="cursor: pointer">
												<i class="far fa-user text-success pr-1"></i>Onkar Kumbhar
										</a>
										<div class="dropdown-menu" role="menu">
												<a href="myprofile.php" class="dropdown-item" role="presentation">My Profile</a>
												<a href="myorders.php" class="dropdown-item" role="presentation" >My Orders</a>
												<a href="./settings.php" class="dropdown-item" role="presentation">Settings</a>
										</div>
								</li>
						</ul>      
					</div>
				</div>
			</nav>
		</div>
</header>

       

