<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once '../lib/header.php';
session_unset();
    session_start();
    $_SESSION['pages'] = $_SERVER['SCRIPT_NAME'];

    require_once ('../lib/DB.php');
    $db=new DB();
    $db2=new DB();
    $db_service=new DB();

     ?>
</head>
<body>
<!-- banner -->
	<div class="banner">  
		<div class="header agileinfo-header">
			<nav class="navbar navbar-default">
				<div class="container">
					<?php include_once '../lib/navber.php'; ?>
				</div>
			</nav>
		</div>
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
			</div>
		<div class="w3-agile-top-info">	
		<?php 
			$sql = "SELECT * FROM `activity` WHERE `status_act`= '1' ";
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

		    $sql.=" order  by id_act desc LIMIT $Page_Start , $Per_Page";
		    $db->query($sql);

		    $intRows = 0;
		    foreach ($db->fetch_array() as $rs) {
		    $intRows++;
		    	if ($rs['id_act']%2 == 0) {
		    ?>
			    <div class="w3-welcome-grids">
					<div class="col-md-7 w3-welcome-left">
						<h5><?php echo $rs['name_act']; ?></h5>
						<p><?php echo $rs['detail_act']; ?></p>
						<a href="view_act.php?id_act=<?php echo $rs['id_act']; ?>"  title="ดูรายละเอียด" >ดูรายละเอียด...</a>
					</div>
					<div class="col-md-5 w3ls-welcome-img1">
						<?php 
							$strSQL = "SELECT * FROM act_photo where id_photo='".$rs['id_photo']."' ";
                            $db2->query($strSQL);
                            $f1 = $db2->fetch_assoc();
                            $photo = $f1['name_photo'];
						 ?>
						<img width="300px" height="300px" src="admin/activity/myphoto/<?php echo $photo; ?>" alt="" />
					</div>
					<div class="clearfix"> </div>
				</div>
		    <?php 
		    	}
		    	else
		    	{
		     ?>
				<div class="w3-welcome-grids w3-welcome-bottom">
					<div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2">
						<?php 
							$strSQL = "SELECT * FROM act_photo where id_photo='".$rs['id_photo']."' ";
                            $db2->query($strSQL);
                            $f1 = $db2->fetch_assoc();
                            $photo = $f1['name_photo'];
						 ?>
						<img width="300px" height="300px" src="admin/activity/myphoto/<?php echo $photo; ?>" alt="" />
					</div>
					<div class="col-md-7 w3-welcome-left">
						<h5><?php echo $rs['name_act']; ?></h5>
						<p><?php echo $rs['detail_act']; ?></p>
						<a href="view_act.php?id_act=<?php echo $rs['id_act']; ?>"  title="ดูรายละเอียด" >ดูรายละเอียด...</a>

					</div>
					<div class="clearfix"> </div>
				</div>
				<br>
			<?php 
		    	}
		    }
		    echo "<br>";
		    echo "<div align='center'>";
		    if($Prev_Page)
			    {
			      echo "";
			      echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page' title='กลับ'><< Back</a> ";
			    }

			    for($i=1; $i<=$Num_Pages; $i++){
			      if($i != $Page)
			      {
			          echo "";
			        echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i' >$i</a> ]";
			      }
			      else
			      {
			          echo "";
			        echo "<b> หน้า $i </b>";
			      }
			    }
			    if($Page!=$Num_Pages)
			    {
			      echo "";
			      echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page' title='ถัดไป'>Next>></a> ";
			}
			echo "</div>";
			 ?>
		</div>
	</div>
</div>

	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="w3ls-heading">
				<h3 class="h-two">บริการของฟาร์มสุกร</h3>
				<!-- <p class="sub two">Morbi in dui pretium, finibus sapien vel.</p> -->
			</div>
			<div class="w3-agileits-services-grids">
				<?php 
					$sql_service="SELECT * FROM `td_service` ORDER BY `Id` DESC";
		    		$db_service->query($sql_service);

		    		foreach ($db_service->fetch_array() as $value) {
		    		
				 ?>
				<h3><?php echo $value['Topic'] ?></h3>
			<p><?php echo $value['Description'] ?></p>
			<br>

			<?php 
		    	}
			 ?>

					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

<!-- //bootstrap-pop-up -->
	<?php include_once '../lib/footer.php'; ?>
</body>
</html>