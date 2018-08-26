<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once '../lib/header.php';
session_unset();
    session_start();
    $_SESSION['pages'] = $_SERVER['SCRIPT_NAME'];
     ?>
</head>
<body>
<!-- banner -->
	<div class="banner">  
		<div class="header agileinfo-header"><!-- header -->
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<!-- Collect the nav links, forms, and other content for toggling -->
					<?php include_once '../lib/navber.php'; ?>
				</div><!-- //container-fluid -->
			</nav>
		</div><!-- //header -->	
		<!-- banner-text -->
		<div class="banner-text"> 
			<div class="container">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-w3lstext">
								<h3>สไลด์โชว์1</h3>
								<p>ภาพสไลด์โชว์1</p>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<h3>สไลด์โชว์2</h3>
								<p>ภาพสไลด์โชว์2</p>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<h3>สไลด์โชว์3</h3>
								<p>ภาพสไลด์โชว์3</p>
							</div>
						</li>
					</ul> 
				</div> 	 
			</div>
		</div>
		<!-- //banner-text -->    
	</div>
	<!-- //banner --> 
<!-- welcome -->
	<div class="features">
		<div class="container">
			<div class="w3ls-heading">
				<h2 class="h-two">กิจกรรม</h2>
				<!-- <p class="sub two">Morbi in dui pretium, finibus sapien vel.</p> -->
			</div>
		<div class="w3-agile-top-info">	
			<div class="w3-welcome-grids">
				<div class="col-md-7 w3-welcome-left">
					<h5>หัวข้อ</h5>
					<p>รายละเอียด</p>
				</div>
				<div class="col-md-5 w3ls-welcome-img1">
					<img src="../images/user.png" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3-welcome-grids w3-welcome-bottom">
				<div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2">
					<img src="../images/user.png" alt="" />
				</div>
				<div class="col-md-7 w3-welcome-left">
					<h5>หัวข้อ</h5>
					<p>รายละเอียด</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
	<!-- //welcome -->
	<!-- testimonials -->
	<!-- <div class="testimonials">
	   <div class="test_agile_info">
		<div class="container">
			<ul id="flexiselDemo1">			
				<li>
					<div class="wthree_testimonials_grid_main">
						<div class="wthree_testimonials_grid">
							<h4>What Client say</h4>
							<p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa,
								eu aliquet massa. Suspendisse lacinia rutrum tincidunt. Integer id erat porta, 
								convallis tortor.</p>
								<h5>Mark Henry</h5>
							<div class="wthree_testimonials_grid_pos">
								<img src="images/t11.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
					
					</div>
				</li>
				<li>
					<div class="wthree_testimonials_grid_main">
						<div class="wthree_testimonials_grid">
							<h4>What Client say</h4>
							<p>Lorem laoreet eu purus eu viverra. Vestibulum sed convallis massa,
								eu aliquet massa. Suspendisse lacinia rutrum tincidunt. Integer id erat porta, 
								convallis tortor.</p>
								<h5>Linda Carl</h5>
							<div class="wthree_testimonials_grid_pos">
								<img src="images/t21.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
					
					</div>
				</li>
				<li>
					<div class="wthree_testimonials_grid_main">
						<div class="wthree_testimonials_grid">
							<h4>What Client say</h4>
							<p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa,
								eu aliquet massa. Suspendisse lacinia rutrum tincidunt. Integer id erat porta, 
								convallis tortor.</p>
								
								<h5>Michael Paul</h5>
							<div class="wthree_testimonials_grid_pos">
								<img src="images/t31.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
						
					</div>
				</li>
			</ul>
		</div>
	</div>
</div> -->
<!-- //testimonials -->

	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="w3ls-heading">
				<h3 class="h-two">บริการของฟาร์มสุกร</h3>
				<!-- <p class="sub two">Morbi in dui pretium, finibus sapien vel.</p> -->
			</div>
			<div class="w3-agileits-services-grids"> 
				<h3>หัวข้อ</h3>
			<p>ข้อมูล</p>
				<!-- <div class="col-md-6 w3-agileits-services-right">
					<div class="services-right-grids">
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-anchor" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Phasellus suscipit</h5>
							</div>
						</div>
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-line-chart" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Phasellus suscipit</h5>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-right-grids">
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-check-square-o" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Phasellus suscipit</h5>
							</div>
						</div>
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-ship" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Phasellus suscipit</h5>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-right-grids">
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
							<i class="fa fa-truck" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Phasellus suscipit</h5>
							</div>
						</div>
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-plane" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Phasellus suscipit</h5>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div> -->

<!-- 				<div class="col-md-6 w3-agileits-services-left">
					
				</div> -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<br>
		<div class="w3ls-heading">
				<h2 class="h-two">เกี่ยวกับฟาร์มสุกร</h2>
			</div>
		<!-- <div class="col-md-6 agile_banner_bottom1_left">
			<img src="../images/s3.jpg" alt=" " class="img-responsive" />
		</div> -->
		<div class="col-md-6 agile_banner_bottom1_right">
			<h3>หัวข้อ</h3>
			<p>ข้อมูล</p>
			<div class="details">
				<a href="#" data-toggle="modal" data-target="#myModal">รายละเอียด</a>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- banner-bottom1 -->
	<!-- newsletter -->
	<!-- <div class="newsletter">
		<div class="container">
			<div class="w3ls-heading">
				<h3 class="h-two">Newsletter</h3>
				<p class="sub two">Morbi in dui pretium, finibus sapien vel.</p>
			</div>
			<form action="#" method="post"> 
				<input type="text" name="email" placeholder="Enter your Email..." required="">
				<input type="submit" value="Subscribe">
				<div class="clearfix"> </div> 
			</form> 
		</div> 
	</div> -->
	<!-- //newsletter -->
	<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<i class="" aria-hidden="true"></i>เกี่ยวกับเรา
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<!-- <img src="../images/s1.jpg" alt=" " class="img-responsive" /> -->
						<p>ข้อมูล</p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
	<?php include_once '../lib/footer.php'; ?>
</body>
</html>