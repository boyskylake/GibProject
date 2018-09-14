<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$db2=new DB();
	$db3=new DB();

	$sql = "DELETE FROM `pf_vaccine` WHERE `Id`='".$_GET['id']."' ";
	$db->query($sql);




	$sqlvac = "SELECT COUNT(`id_pig`) AS vac FROM `pf_vaccine` WHERE `id_pig` = '".$_GET['id_pig']."'";
	$db2->query($sqlvac);
	$resvac = $db2->fetch_assoc();
	$vac = $resvac['vac'];

	$sqladdvac = "UPDATE `pf_pig` SET `vaccine`= '$vac' WHERE `Id` = '".$_GET['id_pig']."'";
	$db3->query($sqladdvac);
?>

<script>
	window.location = 'managepig.php?v=vaccine';
</script>