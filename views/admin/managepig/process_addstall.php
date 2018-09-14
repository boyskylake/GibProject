<?php 
	require_once ('lib/DB.php');

	$db=new DB();

	$sql = "INSERT INTO pf_stall VALUES (NULL, '".$_POST['name']."')";
	$db->query($sql);
?>

<script>
	window.location = 'managepig.php?v=stall';
</script>