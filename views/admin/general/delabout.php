<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$sql = "DELETE FROM `td_about` WHERE `Id`='".$_GET['id']."' ";
	$db->query($sql);
?>

<script>
	window.location = 'general.php?v=about';
</script>