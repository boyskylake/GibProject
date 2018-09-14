<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$db2=new DB();
	$db3=new DB();

	$sql = "INSERT INTO pf_pig VALUES (NULL, '".$_POST['No']."', '".$_POST['stall']."', '".$_POST['date']."', '', '', '".$_POST['typepig']."', 'อยู่')";
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