<!DOCTYPE html>
<html lang="en">
<head>
	  <link rel="stylesheet" href="admin/activity/css/lightbox.css" type="text/css" media="screen" />
	  <script src="admin/activity/js/prototype.js" type="text/javascript"></script>
	  <script src="admin/activity/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	  <script src="admin/activity/js/lightbox.js" type="text/javascript"></script>

<?php include_once '../lib/header.php';
session_unset();
    session_start();
    $_SESSION['pages'] = $_SERVER['SCRIPT_NAME'];

    require_once ('../lib/DB.php');
    $db=new DB();
    $db2=new DB();
    $db3=new DB();
    $db4=new DB();

     ?>
</head>
<body>
<!-- banner -->
	<div class="banner-1">  
		<div class="header agileinfo-header"><!-- header -->
			<nav class="navbar navbar-default">
				<div class="container">
					<?php include_once '../lib/navber.php'; ?>
				</div>
			</nav>
		</div>
		   
	</div>
	<!-- //banner --> 
<div class="main-textgrids">
   <div class="container">
	<div class="col-md-12">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <p class="active nav-link">รายละเอียดกิจกรรม</p>
            </li>
			<br>
			<br>
            <li>
      <?php                                      
      $sql = "SELECT * FROM  activity where id_act = ".$_GET['id_act']." ";
      $db->query($sql);
      $numrow= $db->num_rows();
      if($numrow > 0)
      {
      ?>
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="99%">
                <table width="100%"   border="0" cellpadding="1" cellspacing="0">
      <?php
      $i=1;
      while($i <= $numrow)
      {
      $result = $db->fetch_assoc();
      $id_act = $result['id_act'];
      $name_act = $result['name_act'];
      $date_act = $result['date_act'];
      $detail_act = $result['detail_act'];
      $id_photo = $result['id_photo'];
      $status_act = $result['status_act'];
      ?>
                  <tr>
                    <td>
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td>
                             
                             <p><b>ชื่อกิจกรรม : </b> <?php echo $name_act?> </p>
                             <p><b>เวลากิจกรรม : </b><?php echo $date_act?></p> 
                             <p><b>รายละเอียด : </b> <?php echo $detail_act?></p>
     
                            </td>
                          </tr>
                      </table>
                    </td >
                  </tr>
                  <?php
                    $i++;
                    }
                    ?>
              </table>
            </td>
            </tr>
          </table>

            </li>
        <?php
        }
        else
        ?>
            <li>
          <table width="100%" border="0" cellpadding="1" cellspacing="0">
            <tr>
              <td width="99%" height="60">
               <!-- <div align="left">
                  <span class="style37"> -->
              <?php
              $strSQL = "SELECT * FROM activity where id_act = ".$id_act." ";
              $db2->query($strSQL);
               $objResult = $db2->fetch_assoc();

                 echo"<p><b>ภาพกิจกรรม : </b>".$objResult['name_act']."</p>";
                 
                  $strSQL = "SELECT * FROM act_photo where id_act=".$id_act." ORDER BY id_photo ASC ";
                  $db3->query($strSQL);
                  $objResult = $db3->fetch_assoc();
                  if(!$objResult)
                {
                echo"<img src='admin/activity/images/9MNUSsbvD0i.png'  width='32' height='32' /><font color='#000000' face='Tahoma' size='1'> ยังไม่ได้เพิ่มรูปภาพใดๆ </font>";
                }
                else
                { 
                  $strSQL = "SELECT * FROM act_photo where id_act='$id_act' ORDER BY id_photo ASC ";
                  $db4->query($strSQL);
                  echo"<table border=\"0\"  cellspacing=\"1\" cellpadding=\"1\"><tr>";   
                  $intRows = 0;
                  while($objResult = $db4->fetch_assoc())
                  {
                 $intRows++;
                 echo "<td>";                                 
                 ?>
                <!-- </span> </div> -->
                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td valign="top">
                        <table id="Table_01" width="128" height="64" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td valign="top"><a href="admin/activity/myphoto/<?php echo $objResult["name_photo"];?>" rel="lightbox[roadtrip]"><img src="admin/activity/myphoto/<?php echo $objResult["name_photo"];?>" width="120" border="0" /></a></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                      </table>
                    </td>
                    </tr>
                  </table>
      <?php
        echo"</td>";
        if(($intRows)%5==0)
       {
        echo"</tr>";
        }
       else
       {
       echo "<td>";
        } 
      }
    echo "</tr></table>";
    }
    ?>
    </table>

      </li>
    </ul>
  </div>

    </div>
    </div>
<!-- //bootstrap-pop-up -->
	<?php include_once '../lib/footer.php'; ?>
</body>
</html>