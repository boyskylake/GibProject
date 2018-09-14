

<?php
include("../includes/config.php");    
    $strSQL = "SELECT * FROM nt_photo where id_act='$id_act' and id_photo='$id_photo' ";
    $objQuery = mysqli_query($conn,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    if($objResult)
	{
	echo "<img src='myphoto/$objResult['name_photo']' >";
	}
	else
	{	
	echo"ผิดพลาด";
	}
    ?>
