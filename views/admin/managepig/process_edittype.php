<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$sql = "UPDATE `pf_typepig` SET `name_tp`='".$_POST['name']."'  WHERE `Id_tp`='".$_POST['id']."' ";
	$db->query($sql);
?>

<script>
	window.location = 'managepig.php?v=typepig';
</script>