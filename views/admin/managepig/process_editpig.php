<?php 
	require_once ('lib/DB.php');

	$db=new DB();

	$sql = "UPDATE `pf_pig` SET `No`='".$_POST['No']."', `id_stall`='".$_POST['stall']."', `bdate`='".$_POST['date']."', `id_typepig`='".$_POST['typepig']."' WHERE `Id` = '".$_POST['id']."' ";
	$db->query($sql);


?>

<script>
	window.location = 'managepig.php?v=pig';
</script>