<?php
	
	require_once ('../lib/DB.php');
	
	$amount = $_POST['amount'];
	$db=new DB();
	
	$sql = "UPDATE `pf_amount` SET `amount`= '$amount' WHERE `id_an`= '1'";
		$db->query($sql);
	
	
	?>