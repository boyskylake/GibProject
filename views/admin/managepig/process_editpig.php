<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$db2=new DB();
	$db3=new DB();

	$sql = "UPDATE `pf_pig` SET `No`='".$_POST['No']."', `id_stall`='".$_POST['stall']."', `bdate`='".$_POST['date']."', `typepig`='".$_POST['typepig']."' WHERE `Id` = '".$_POST['id']."' ";
	$db->query($sql);

	$sqlpig = "SELECT COUNT(`id_stall`) AS pig FROM `pf_pig` WHERE `id_stall` = '".$_POST['stall']."'";
	$db2->query($sqlpig);
	$respig = $db2->fetch_assoc();
	$pig = $respig['pig'];

	$sqladdpig = "UPDATE `pf_stall` SET `amount`= '$pig' WHERE `Id` = '".$_POST['stall']."'";
	$db3->query($sqladdpig);
?>

<script>
	window.location = 'managepig.php?v=pig';
</script>