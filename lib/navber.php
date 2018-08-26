<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="index.php"><i class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></i>&nbsp;ฟาร์มสุกร</a></h1>
					</div>
                    
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left">
							<?php 
							if ($_SESSION['pages'] == '/gip/views/index.php') {
								echo "<li><a href='index.php' class='btn w3ls-hover active'>หน้าแรก</a></li>
									<li><a href='about.php' class='btn w3ls-hover'>เกี่ยวกับเรา</a></li>   
									<li><a href='activity.php' class='btn w3ls-hover'>กิจกรรม</a></li>
									<li><a href='contact.php' class='btn w3ls-hover'>ติดต่อเรา</a></li>";
							}
							elseif ($_SESSION['pages'] == '/gip/views/about.php') {
								echo "<li><a href='index.php' class='btn w3ls-hover '>หน้าแรก</a></li>
									<li><a href='about.php' class='btn w3ls-hover active'>เกี่ยวกับเรา</a></li>   
									<li><a href='activity.php' class='btn w3ls-hover'>กิจกรรม</a></li>
									<li><a href='contact.php' class='btn w3ls-hover'>ติดต่อเรา</a></li>";
							}
							elseif ($_SESSION['pages'] == '/gip/views/activity.php') {
								echo "<li><a href='index.php' class='btn w3ls-hover '>หน้าแรก</a></li>
									<li><a href='about.php' class='btn w3ls-hover'>เกี่ยวกับเรา</a></li>   
									<li><a href='activity.php' class='btn w3ls-hover active'>กิจกรรม</a></li>
									<li><a href='contact.php' class='btn w3ls-hover'>ติดต่อเรา</a></li>";
							}
							elseif ($_SESSION['pages'] == '/gip/views/contact.php') {
								echo "<li><a href='index.php' class='btn w3ls-hover '>หน้าแรก</a></li>
									<li><a href='about.php' class='btn w3ls-hover'>เกี่ยวกับเรา</a></li>   
									<li><a href='activity.php' class='btn w3ls-hover'>กิจกรรม</a></li>
									<li><a href='contact.php' class='btn w3ls-hover active'>ติดต่อเรา</a></li>";
							}

							 ?>
							<!-- <li><a href='index.php' class='btn w3ls-hover active'>หน้าแรก</a></li>
							<li><a href='about.php' class='btn w3ls-hover'>เกี่ยวกับเรา</a></li>   
							<li><a href='activity.php' class='btn w3ls-hover'>กิจกรรม</a></li>
							<li><a href='contact.php' class='btn w3ls-hover'>ติดต่อเรา</a></li> -->
							<!-- <li><a href="#" class="dropdown-toggle btn w3ls-hover" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="icons.php">Web Icons</a></li>
									<li><a href="codes.php">Short Codes</a></li>     
								</ul>
							</li>   -->
						</ul>

						<div class="social-icon">
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>  
						</div> 
						<div class="clearfix"> </div>
					</div><!-- //navbar-collapse --> 