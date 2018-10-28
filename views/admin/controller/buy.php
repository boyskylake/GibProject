<?php 
	require_once ('../lib/DB.php');
    $date = date("Y-m-d h:i:s");
	$db=new DB();
    echo $date;
    // $sql = "INSERT INTO buy VALUES (NULL, '".$_POST['date']."', '".$_POST['list']."', '".$_POST['money']."','$date')";
    $sql = "INSERT INTO `buy`(`id`, `date`, `list`, `b_money`, `created_date`) VALUES (NULL,'".$_POST['date']."','".$_POST['list']."','".$_POST['money']."','$date')";
	$db->query($sql);
?>

<script>
	window.location = '../account.php?v=CreateBuy';
</script>
