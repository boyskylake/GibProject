<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$sql = "UPDATE `pf_stall` SET `name`='".$_POST['name']."'  WHERE `Id`='".$_POST['id']."' ";
	$db->query($sql);
?>

<script>
	window.location = 'managepig.php?v=stall';
</script>