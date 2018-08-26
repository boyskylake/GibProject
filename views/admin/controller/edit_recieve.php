<?php
	require_once ('../lib/DB.php');
	$db=new DB();

	for($i=0; $i<COUNT($_POST['money']); $i++){

		$F = $_POST['by'][$i];
		// echo $F;
		$MN = $_POST['money'][$i];
		$ID = $_POST['id'][$i];

		$db->query("UPDATE recieve SET `from`='$F', r_money = '$MN' WHERE id = '$ID'");
	}
?>

<script>
	window.location='../index.php?v=ManageRecieve';
</script>