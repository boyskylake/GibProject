<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$sql = "UPDATE `td_service` SET `Topic`='".$_POST['topic']."',`Description`='".$_POST['des']."' WHERE `Id`='".$_POST['id']."' ";
	$db->query($sql);
?>

<script>
	window.location = 'general.php?v=service';
</script>