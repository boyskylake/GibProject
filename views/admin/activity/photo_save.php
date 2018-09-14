    <?php
     require_once ('lib/DB.php');

        $db=new DB();
        
    $id_act = $_POST['id_act']; 

	for($i=0;$i<count($_FILES["filUpload"]["name"]);$i++)
	{
		if($_FILES["filUpload"]["name"][$i] != "")
		{
			if(move_uploaded_file($_FILES["filUpload"]["tmp_name"][$i],"activity/myphoto/".$_FILES["filUpload"]["name"][$i]))
			{
				//*** Insert Record ***//
				$strSQL = "INSERT INTO act_photo ";
				$strSQL .="(name_photo,id_act) VALUES ('".$_FILES["filUpload"]["name"][$i]."','".$_POST["id_act"]."')";
				$db->query($strSQL);
			}
		}
	}
	echo "<img src='images/icon_approve.png' width='16' height='16' />  sssssssssssss<br>";
	echo "<meta http-equiv=refresh content=0;URL=activity.php?v=photo_act&id_act=$id_act";
?>
