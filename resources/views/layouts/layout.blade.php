<!DOCTYPE html>
<html>
<head>
	<title>@yield('titile')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content ="width=device-width,initial-scale=1.0">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script  src="js/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<style type="text/css">
	@media screen and (max-width: 480px){
		.gallery{

			margin-top: 450px;
		}

		

}
.gallery img{

	min-height: 200px;
	max-height: 200px;
	
}

.gallery h1 {
	text-align: center;
	background: green;
	width: 300px;
	height: auto;
	margin:auto;
	margin-bottom: -10px;
	border-radius:10px 10px 0px 0px;
	margin-top:10px;
	color: white;
	font-family: times; 
}


.login1 {
	margin-left: 30%;
	margin-top: 50px;
	height:400px;

}
.login1 input[type=text] {
	width: 100%;
}
	
	</style>
	
	
	
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-success">
		<div class="container">
			
			<ul class="nav navbar-nav">
				<li><a href="#"><span class="fa fa-facebook social"></span></a></li>
				<li><a href="#"><span class="fa fa-twitter social"></span></a></li>
				<li><a href="#"><span class="fa fa-google social"></span></a></li>
				
				</ul>
				<div class="phone">
					<span class="fa fa-phone social"></span>+254-722-397-744</a>
				</div>
				<ul class="nav navbar-nav navbar-right login">
				<li class="active"><a class="nav-link" href="login">Login</a></li>
				<li><a class="nav-link" href="#">Signup</a></li>
			
			</ul>
		</div>
	</nav>
	
	<nav class="navbar navbar-expand-md navbar-light bg-light bg-white logo">
		<div class="container">
			<a class="navbar-brand">
				<img style="max-width:150px" src="images/logoGreen.jpg" class="img-responsive">
			</a>
			<div class="nav-text">
			<h1>WARENG HIGH SCHOOL</h1>
			<h6>"Elimu Ya Jenga."</h6>

          </div>

          <div class=" btn btn-success search">


          	<span class="fa fa-search  search-icon"></span>
          </div>
      </div>
	</nav>
	<nav class="navbar navbar-expand-md navbar-light bg-success sticky-top main-menu ">
		<button class="navbar-toggler" data-toggle="collapse" data-target="#main-menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="main-menu">
		<div class="container">
			<ul class="navbar-nav navigation">
				<li nav-item class="active"><a class="nav-link" href="/">HOME</a></li>
				<li nav-item><a class="nav-link" href="about">ABOUT US</a></li>
				<li nav-item><a class="nav-link" href="academic">ACADEMICS</a></li>
				<li nav-item><a class="nav-link" href="department">DEPARTMENTS</a></li>
				<li nav-item><a class="nav-link" href="/">NEWS & EVENTS</a></li>
				<li nav-item><a class="nav-link" href="tender">TENDERS</a></li>
				<li nav-item><a class="nav-link" href="assignment">ASSIGNMENTS</a></li>
				<li nav-item><a class="nav-link" href="contactus">CONTACT US</a></li>
			</ul>
		</div>
	</div>
	</nav>

	
	@yield('content')

	<footer>
	<div class="container">
	<div class="row footer-body">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<h4>CONTACTS</h4>
			<p>Tel:020-647-7376 </p>
			<p>Phone: +254-799-0124</p>
			<p>email:info@warenghigh.com</p>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			
			<h4>QUICK LINKS</h4>
			<p><span class="fa fa-angle-double-right"></span><a href="academic#fees">school fees</a> </p>
			<p><span class="fa fa-angle-double-right"></span><a href="academic#uniform">school uniform</a> </p>
			<p><span class="fa fa-angle-double-right"></span><a href="assignment">Assignments</a> </p>
			<p><span class="fa fa-angle-double-right"></span><a href="tender">Tender</a> </p>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<h4>CONNECT WITH US</h4>
			<p><span class="fa fa-facebook"></span><a href="#">facebook</a> </p>
			<p><span class="fa fa-twitter"></span><a href="#">twitter</a> </p>
			<p><span class="fa fa-google"></span><a href="#">google+</a> </p>
			
		</div>
	</div>
	<div class="row copy">
		<p>&copy;Copyright 2018 wareng high school by <a href="#" class="uppercase">Bora techlife CO.</a></p>
	</div>
</div>
</footer>



@section('script')
@show

</body>
</html>