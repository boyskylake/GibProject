<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$db3=new DB();
        $name = $_POST['name'];
        $amount = $_POST['amount'];
		  	$sum = $_POST['price'] * $_POST['amount'];
		  	$sqlbuy = "UPDATE `buy` SET `list` = 'ซื้อหวัดซีน $name จำนวน $amount',`b_money` = '$sum' WHERE `id` = '".$_POST['idbuy']."' ";
			$db3->query($sqlbuy);

			$sql = "UPDATE `pf_buyvac` SET `name`= '".$_POST['name']."',`date_buy`='".$_POST['date']."',`amount`='".$_POST['amount']."',`price`='".$_POST['price']."' WHERE `Id` = '".$_POST['id']."'";
			$db->query($sql);
?>

<script>
	window.location = 'managepig.php?v=vaccine';
</script>