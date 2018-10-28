<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$db2=new DB();
    $datetime = date("Y-m-d h:i:s");
	$sql = "INSERT INTO recieve VALUES (NULL, '".$_POST['date']."', '".$_POST['from']."', '".$_POST['money']."', '$datetime')";
	$db->query($sql);

	$sqlpigsts = "UPDATE `pf_pig` SET `status`= 'ขายแล้ว' WHERE `Id`= '".$_POST['id']."' ";
	$db2->query($sqlpigsts);
?>

<script>
	window.location = 'managepig.php?v=pig';
</script>