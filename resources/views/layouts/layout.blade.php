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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
<body class="bg-body">
	<nav class="navbar navbar-expand-md navbar-light bg-green shadow-md">
		<div class="container">
			
			<ul class="nav navbar-nav">
				<li><a href="#"><span class="fa fa-facebook social"></span></a></li>
				<li><a href="#"><span class="fa fa-twitter social"></span></a></li>
				<li><a href="#"><span class="fa fa-google social"></span></a></li>
				
				</ul>
				<div class="phone">
					<span class="fa fa-phone social"></span>
					<span class="text-white">+254-722-397-744</span>
				</div>
				<ul class="nav navbar-nav navbar-right login">
				<li ><a class="nav-link" href="login">Staff Portal</a></li>
				<li><a class="nav-link" href="#">Alumni</a></li>
			
			</ul>
		</div>
	</nav>
	
	<nav class="navbar navbar-expand-md navbar-light bg-light bg-white logo">
		<div class="container d-flex justify-content-center align-content-center">
			<a class="navbar-brand">
				<img style="max-width:150px" src="/images/logo2.PNG" class="img-responsive">
			</a>
			<div class="nav-text text-green">
			<h1 class="text-uppercase">ST. JOSEPH'S chepterit GIRLS</h1>
			<h6 class="text-uppercase">"In God We Excel."</h6>

          </div>

      </div>
	</nav>
	<nav class="navbar navbar-expand-md navbar-light bg-green sticky-top main-menu ">
		<button class="navbar-toggler" data-toggle="collapse" data-target="#main-menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="main-menu">
		<div class="container">
			<ul class="navbar-nav navigation">
				<li nav-item><a class="nav-link" href="/">HOME</a></li>
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
			<p>email:info@chepterithigh.com</p>
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

</div>
	<div class="row border-top border-gray d-flex justify-content-center align-items-center copy">
		<p>&copy;Copyright 2021 st.chepterit high school by <a href="#" class="uppercase">Bora techlife CO.</a></p>
	</div>
</footer>



@section('script')
@show

</body>
</html>