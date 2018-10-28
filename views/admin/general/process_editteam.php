<?php 
	require_once ('lib/DB.php');

	$db=new DB();

	$namepic = $_POST['picname'];

	$upload=$_FILES['Picture']["name"];
	if($upload != "")
		{
			if ($namepic != "") {
					unlink("../../images/".$namepic);
				}
				
			if(move_uploaded_file($_FILES["Picture"]["tmp_name"],"../../images/".$upload))
			{

				$sql = "UPDATE `td_team` SET `name`='".$_POST['name']."',`position`='".$_POST['pst']."',`facebook`='".$_POST['facebook']."',`twitter`='".$_POST['twitter']."',`rss`='".$_POST['rss']."',`pic_file`='".$upload."' WHERE `Id`='".$_POST['id']."' ";			}
				$db->query($sql);
		}
		else
		{
			$sql = "UPDATE `td_team` SET `name`='".$_POST['name']."',`position`='".$_POST['pst']."',`facebook`='".$_POST['facebook']."',`twitter`='".$_POST['twitter']."',`rss`='".$_POST['rss']."' WHERE `Id`='".$_POST['id']."' ";
			$db->query($sql);
		}
?>

<script>
	window.location = 'general.php?v=team';
</script>