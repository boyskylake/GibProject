<?php
session_unset();
    session_start();
    $_SESSION['pages'] = $_SERVER['SCRIPT_NAME'];
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once '../lib/header.php'; ?>
</head>
<body>
<!-- banner -->
	<div class="banner-1">  
		<div class="header agileinfo-header"><!-- header -->
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<?php require_once '../lib/navber.php'; ?>
				</div><!-- //container-fluid -->
			</nav>
		</div><!-- //header -->	
		
	</div>
	<!-- //banner --> 
	<!-- contact -->
		<div class="mail">
			<div class="container">
				<div class="w3ls-heading">
					<h2 class="h-two">ติดต่อ</h2>
					<!-- <p class="sub two">Morbi in dui pretium, finibus sapien vel.</p> -->
				</div>
				<div class="agileits_mail_grids">
					<div class="col-md-7 agileits_mail_grid_left">
						<form action="#" method="post">
							<h4>ชื่อ*</h4>
							<input type="text" name="Name" placeholder="Name..." required="">
							<h4>อีเมล*</h4>
							<input type="email" name="Email" placeholder="Email..." required="">
							<h4>เบอร์โทร*</h4>
							<input type="text" name="Phone" placeholder="Phone..." required="">
							<h4>ข้อความ*</h4>
							<textarea placeholder="Message..." name="Message"></textarea>
							<input type="submit" value="ส่ง">
						</form>
					</div>
					<div class="col-md-5 agileits_mail_grid_right">
						<div class="agile-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26063.984716162606!2d144.9228869850419!3d-37.8295573872697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2sMelbourne+VIC+3004%2C+Australia!5e1!3m2!1sen!2sin!4v1479988489554" allowfullscreen></iframe>
						</div>
						<div class="left-agileits">
							<h3>ที่อยู่</h3>
								<ul>
									<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> ..............</li>
									<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">อีเมล@example.com</a></li>
									<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>0XXXXXXXXX</li>
								</ul>
						</div>
					</div>
						<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!-- //contact -->
	<!-- footer start here --> 
	<?php require_once '../lib/footer.php'; ?>
</body>
</html>