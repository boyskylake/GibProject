<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$db2=new DB();
	

	$sql = "DELETE FROM `pf_buyvac` WHERE `Id`='".$_GET['id']."' ";
	$db->query($sql);

	$sqlbuy = "DELETE FROM buy WHERE id = '".$_GET['idbuy']."'";
	$db2->query($sqlbuy);

?>

<script>
	window.location = 'managepig.php?v=vaccine';
</script>