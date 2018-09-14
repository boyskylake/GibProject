<?php 
	require_once ('lib/DB.php');

	$db=new DB();

	$sql = "INSERT INTO td_service VALUES (NULL, '".$_POST['topic']."', '".$_POST['des']."')";
	$db->query($sql);
?>

<script>
	window.location = 'general.php?v=service';
</script>