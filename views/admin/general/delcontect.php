<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$sql = "DELETE FROM `td_contect` WHERE `Id`='".$_GET['id']."' ";
	$db->query($sql);
?>

<script>
	window.location = 'general.php?v=Contact';
</script>