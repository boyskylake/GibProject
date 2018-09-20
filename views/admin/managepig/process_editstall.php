<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$sql = "UPDATE `pf_stall` SET `name_sl`='".$_POST['name']."'  WHERE `Id_sl`='".$_POST['id']."' ";
	$db->query($sql);
?>

<script>
	window.location = 'managepig.php?v=stall';
</script>