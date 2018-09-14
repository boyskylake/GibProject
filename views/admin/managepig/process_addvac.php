<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$db2=new DB();
	$db3=new DB();

	$sql = "INSERT INTO pf_vaccine VALUES (NULL, '".$_POST['id_pig']."', '".$_POST['vaccine']."', '".$_POST['date']."')";
	$db->query($sql);

	$sqlvac = "SELECT COUNT(`id_pig`) AS vac FROM `pf_vaccine` WHERE `id_pig` = '".$_POST['id_pig']."'";
	$db2->query($sqlvac);
	$resvac = $db2->fetch_assoc();
	$vac = $resvac['vac'];

	$sqladdvac = "UPDATE `pf_pig` SET `vaccine`= '$vac' WHERE `Id` = '".$_POST['id_pig']."'";
	$db3->query($sqladdvac);
?>

<script>
	window.location = 'managepig.php?v=vaccine';
</script>