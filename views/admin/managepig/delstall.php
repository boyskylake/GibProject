<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$sql = "DELETE FROM `pf_stall` WHERE `Id`='".$_GET['id']."' ";
	$db->query($sql);
?>

<script>
	window.location = 'managepig.php?v=stall';
</script>