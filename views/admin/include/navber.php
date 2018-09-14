<div class="navbar-header">
	<h1><a href="admin.php"><i class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></i>&nbsp;ฟาร์มสุกร</a></h1></div>
                    
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left">
						<?php 
							if ($_SESSION['pages'] == '/gip/views/admin/admin.php') {
								echo "<li><a href='admin.php' class='btn w3ls-hover active'>หน้าแรก</a></li>
									<li><a href='account.php' class='btn w3ls-hover'>รายรับ-รายจ่าย</a></li>
									<li><a href='general.php' class='btn w3ls-hover'>จัดการข้อมูลทั่วไป</a></li>
									<li><a href='managepig.php' class='btn w3ls-hover'>จัดการสุกร</a></li>
									<li><a href='controller/logout.php' class='btn w3ls-hover'>ออกจากระบบ</a></li>";
							}
							elseif ($_SESSION['pages'] == '/gip/views/admin/account.php') {
								echo "<li><a href='admin.php' class='btn w3ls-hover '>หน้าแรก</a></li>
									<li><a href='account.php' class='btn w3ls-hover active'>รายรับ-รายจ่าย</a></li>   
									<li><a href='general.php' class='btn w3ls-hover'>จัดการข้อมูลทั่วไป</a></li>
									<li><a href='managepig.php' class='btn w3ls-hover'>จัดการสุกร</a></li>
									<li><a href='controller/logout.php' class='btn w3ls-hover'>ออกจากระบบ</a></li>";
								}
							elseif ($_SESSION['pages'] == '/gip/views/admin/general.php' || $_SESSION['pages'] == '/gip/views/admin/activity.php') {
								echo "<li><a href='admin.php' class='btn w3ls-hover '>หน้าแรก</a></li>
									<li><a href='account.php' class='btn w3ls-hover'>รายรับ-รายจ่าย</a></li>   
									<li><a href='general.php' class='btn w3ls-hover active'>จัดการข้อมูลทั่วไป</a></li>
									<li><a href='managepig.php' class='btn w3ls-hover'>จัดการสุกร</a></li>
									<li><a href='controller/logout.php' class='btn w3ls-hover'>ออกจากระบบ</a></li>";
							}
							elseif ($_SESSION['pages'] == '/gip/views/admin/managepig.php') {
								echo "<li><a href='admin.php' class='btn w3ls-hover '>หน้าแรก</a></li>
									<li><a href='account.php' class='btn w3ls-hover'>รายรับ-รายจ่าย</a></li>   
									<li><a href='general.php' class='btn w3ls-hover'>จัดการข้อมูลทั่วไป</a></li>
									<li><a href='managepig.php' class='btn w3ls-hover active'>จัดการสุกร</a></li>
									<li><a href='controller/logout.php' class='btn w3ls-hover'>ออกจากระบบ</a></li>";
							}

						?>
						</ul>

					<!-- 	<div class="social-icon">
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>  
						</div>  -->
						<div class="clearfix"> </div>
					</div><!-- //navbar-collapse --> 