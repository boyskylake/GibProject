<?php 
	require_once ('lib/DB.php');

	$db=new DB();

	$upload=$_FILES['Picture']["name"];
	if($upload != "")
		{
			if(move_uploaded_file($_FILES["Picture"]["tmp_name"],"../../images/".$upload))
			{
				//*** Insert Record ***//
				$sql = "INSERT INTO `td_team`(`Id`, `name`, `position`, `facebook`, `twitter`, `rss`, `pic_file`) 
				VALUES (null,'".$_POST['name']."','".$_POST['pst']."','".$_POST['facebook']."','".$_POST['twitter']."','".$_POST['rss']."','".$upload."')";
			}
				$db->query($sql);
		}
		else
		{

			$sql = "INSERT INTO td_team VALUES (NULL, '".$_POST['name']."', '".$_POST['pst']."', '".$_POST['facebook']."', '".$_POST['twitter']."', '".$_POST['rss']."')";
			$db->query($sql);

		}


?>

<script>
	window.location = 'general.php?v=team';
</script>