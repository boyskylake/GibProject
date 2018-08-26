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
						
					</div><!-- //navbar-collapse --> 
				
			</nav>
		</div><!-- //header -->	
		
	</div>
	<!-- //banner --> 
<!-- portfolio -->
		<div class="banner-bottom">
			<div class="container">
			<div class="w3ls-heading">
				<h2 class="h-two">กิจกรรม</h2>
				<!-- <p class="sub two">Morbi in dui pretium, finibus sapien vel.</p> -->
			</div>
				<div class="w3ls_portfolio_grids">
					<div class="col-md-4 agileinfo_portfolio_grid">
						<div class="w3_agile_portfolio_grid1">
							<a href="images/g1.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Growing</h3>
									</div>
									<img src="images/g1.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
						<div class="w3_agile_portfolio_grid1">
							<a href="images/g2.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Growing</h3>
									</div>
									<img src="images/g2.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
						<div class="w3_agile_portfolio_grid1">
							<a href="images/g3.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Growing</h3>
									</div>
									<img src="images/g3.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 agileinfo_portfolio_grid">
						<div class="w3_agile_portfolio_grid1">
							<a href="images/g4.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Growing</h3>
									</div>
									<img src="images/g4.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
						<div class="w3_agile_portfolio_grid1">
							<a href="images/g5.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Growing</h3>
									</div>
									<img src="images/g5.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
						<div class="w3_agile_portfolio_grid1">
							<a href="images/g6.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Growing</h3>
									</div>
									<img src="images/g6.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 agileinfo_portfolio_grid">
						<div class="w3_agile_portfolio_grid1">
							<a href="images/g7.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Growing</h3>
									</div>
									<img src="images/g7.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
						<div class="w3_agile_portfolio_grid1">
							<a href="images/g8.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Growing</h3>
									</div>
									<img src="images/g8.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
						<div class="w3_agile_portfolio_grid1">
							<a href="images/g9.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3>Growing</h3>
									</div>
									<img src="images/g9.jpg" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- portfolio -->
	<!-- footer start here --> 
	<?php require_once '../lib/footer.php'; ?>
</body>
</html>