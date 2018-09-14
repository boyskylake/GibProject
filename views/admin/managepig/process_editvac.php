<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$sql = "UPDATE `pf_vaccine` SET `vaccine`='".$_POST['vaccine']."', `date`='".$_POST['date']."'  WHERE `Id`='".$_POST['id']."' ";
	$db->query($sql);
?>

<script>
	window.location = 'managepig.php?v=vaccine';
</script>