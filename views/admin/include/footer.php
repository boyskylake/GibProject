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

	<div class="footer-agile">
		<div class="container">
			<div class="footer-agileinfo"> 
				<div class="col-md-5 col-sm-5 footer-wthree-grid"> 
					<div class="agileits-w3layouts-tweets">  
						<h5><a href="index.html"><i class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></i>ฟาร์มสุกร</a></h5> 
						<div class="social-icon footerw3ls">
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>  
						</div>
					</div>
					<!-- <p>Aenean vitae metus sit amet purus sodales blandit. Nullam ut dolor eu urna viverra semper. Mauris est odio, laoreet laoreet sapien non, sollicitudin bibendum nulla.</p> -->
				</div> 
				<div class="col-md-3 col-sm-3 footer-wthree-grid">
					<h3>ทางลัด</h3>
					<ul>
						<li><a href="admin.php"><span class="glyphicon glyphicon-menu-right"></span> หน้าแรก</a></li>
						<li><a href="account.php"><span class="glyphicon glyphicon-menu-right"></span> รายรับ-รายจ่าย</a></li> 
						<li><a href="general.php"><span class="glyphicon glyphicon-menu-right"></span> จัดการข้อมูลทั่วไป</a></li>
						<li><a href="managepig.php"><span class="glyphicon glyphicon-menu-right"></span> จัดการสุกร</a></li>
					</ul>
				</div> 	 
				<div class="col-md-4 col-sm-4 footer-wthree-grid">
					<h3>ข้อมูล ติดต่อ</h3>
					<ul>
						<li>ที่อยู่ : 130 หมู่ 2 ตำบลวาใหญ่ </li> 
						<li>อำเภออากาศอำนวย จังหวัดสกลนคร 47170</li>
						<li>โทร : 084 417 2967</li>
						<li><a href="mailto:info@example.com"> เมล@example.com</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>		
			</div>
			<div class="copy-right"> 
				<p>© 2017 . All rights reserved</p>
			</div>
		</div>
	</div>
<!-- //footer end here -->  
	<!-- FlexSlider --> 
	<script defer src="../../js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
		</script>
	<!-- End-slider-script --> 
<!-- Flexslider-js for-testimonials -->
<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:1,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:1
										},
										tablet: { 
											changePoint:768,
											visibleItems: 1
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="../../js/jquery.flexisel.js"></script>
<!-- //Flexslider-js for-testimonials -->


	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="../../js/move-top.js"></script>
	<script type="text/javascript" src="../../js/easing.js"></script>	
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- //end-smooth-scrolling   -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../js/bootstrap.js"></script>