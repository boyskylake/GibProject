<?php 
    session_unset();
    session_start();
    $_SESSION['pages'] = $_SERVER['SCRIPT_NAME'];

    require_once ('../lib/DB.php');
    $db=new DB();
    $db2=new DB();
    $db3=new DB();
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
					<?php 
						$sql = "SELECT * FROM `activity` WHERE `status_act`= '1'";
					      $db->query($sql);
					      $Num_Rows = $db->num_rows();

						    $Per_Page = 3;
						    if (isset($_GET["Page"])) {
						      $Page = $_GET["Page"];
						    }

						    if(!isset($_GET["Page"]))
						    {
						      $Page=1;
						    }

						    $Prev_Page = $Page-1;
						    $Next_Page = $Page+1;

						    $Page_Start = (($Per_Page*$Page)-$Per_Page);
						    if($Num_Rows<=$Per_Page)
						    {
						      $Num_Pages =1;
						    }
						    else if(($Num_Rows % $Per_Page)==0)
						    {
						      $Num_Pages =($Num_Rows/$Per_Page) ;
						    }
						    else
						    {
						      $Num_Pages =($Num_Rows/$Per_Page)+1;
						      $Num_Pages = (int)$Num_Pages;
						    }

							$sql.=" order  by id_act desc";
						    $db3->query($sql);
						    
						    echo "<div class='col-md-4 agileinfo_portfolio_grid'>";
						   $intRows = 0;
						   foreach ($db3->fetch_array() as $rs) {
						   	$intRows++;
						 ?>
						<div class="w3_agile_portfolio_grid1">
							<a href="view_act.php?id_act=<?php echo $rs['id_act']; ?>" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Industry">
								<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
									<div class="w3layouts_port_head">
										<h3><?php echo $rs['name_act']; ?></h3>
									</div>
									<?php 
										$strSQL = "SELECT * FROM act_photo where id_photo='".$rs['id_photo']."' ";
			                            $db2->query($strSQL);
			                            $f1 = $db2->fetch_assoc();
			                            $photo = $f1['name_photo'];
									 ?>
									<img src="admin/activity/myphoto/<?php echo $photo; ?>" alt="" class="img-responsive" />
								</div>
							</a>
						</div>
						<?php
							if(($intRows)%3==0)
						      {
						        echo"</div>";
						        
						        echo "<div class='col-md-4 agileinfo_portfolio_grid'>";

						        // $intRows = 0;
						      } 
						      // echo "</div>";
						}
						 ?>
						<!-- </div> -->
						<?php
							// echo "<br>";
		    	// 			echo "<div align='center'>";
						 //    if($Prev_Page)
						 //    {
						 //      echo "";
						 //      echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page' title='กลับ'><< Back</a> ";
						 //    }

						 //    for($i=1; $i<=$Num_Pages; $i++){
						 //      if($i != $Page)
						 //      {
						 //          echo "";
						 //        echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i' >$i</a> ]";
						 //      }
						 //      else
						 //      {
						 //          echo "";
						 //        echo "<b> หน้า $i </b>";
						 //      }
						 //    }
						 //    if($Page!=$Num_Pages)
						 //    {
						 //      echo "";
						 //      echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page' title='ถัดไป'>Next>></a> ";
							// }
						 //    echo "</div>";
					    ?>

						
					

					
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- portfolio -->
	<!-- footer start here --> 
	<?php require_once '../lib/footer.php'; ?>
</body>
</html>