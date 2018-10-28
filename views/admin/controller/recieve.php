<?php 
	require_once ('../lib/DB.php');
    $date = date("Y-m-d h:i:s");
	$db=new DB();

	$sql = "INSERT INTO recieve VALUES (NULL, '".$_POST['date']."', '".$_POST['from']."', '".$_POST['money']."', '$date')";
	$db->query($sql);
?>

<script>
	window.location = '../account.php?v=CreateRecieve';
</script>