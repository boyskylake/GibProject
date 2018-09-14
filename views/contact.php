<?php
session_unset();
    session_start();
    $_SESSION['pages'] = $_SERVER['SCRIPT_NAME'];

    if (isset($_POST['form'])) {

		require_once ('../lib/DB.php');

		$db=new DB();

		$sql = "INSERT INTO td_contect VALUES (NULL, '".$_POST['Name']."', '".$_POST['Email']."', '".$_POST['Phone']."', '".$_POST['Message']."')";
		$db->query($sql);
		echo "<script>";
		echo "alert('Send Successfully');";
		echo "window.location = 'contact.php';";
		echo "</script>";
	}
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
						<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
							<h4>ชื่อ*</h4>
							<input type="text" name="Name" placeholder="Name..." required="">
							<h4>อีเมล*</h4>
							<input type="email" name="Email" placeholder="Email..." required="">
							<h4>เบอร์โทร*</h4>
							<input type="text" name="Phone" placeholder="Phone..." required="">
							<h4>ข้อความ*</h4>
							<textarea placeholder="Message..." name="Message"></textarea>
							<input hidden type="text" name="form" value="res">
							<input type="submit" value="ส่ง">
						</form>
					</div>
					<div class="col-md-5 agileits_mail_grid_right">
						<div class="agile-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d953.114914733138!2d104.12801032917358!3d17.147836999263916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313cf2c15cb802f5%3A0x9f016c2a34b8d059!2z4LiV4Liw4Lin4Lix4LiZ4LmB4LiU4LiH4Liq4Liy4LiU4LmB4Liq4LiH4LmA4LiU4Li34Lit4LiZIOC4quC4geC4peC4meC4hOC4ow!5e0!3m2!1sth!2sth!4v1536822978193" allowfullscreen></iframe>
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