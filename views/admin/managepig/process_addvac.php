<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$db2=new DB();
    $db3=new DB();
    
    $datetime = date("Y-m-d h:i:s");
	$data = date("Y-m-d");

		$strSQL1 = "SELECT * FROM pf_buyvac where name = '".$_POST['name']."' AND status = 'มี' ";
		$db2->query($strSQL1);
		$res =  $db2->fetch_assoc();

		  if ($_POST['name'] == $res['name']) {

		  	echo $_POST['name'];

		        echo "<script>";
		        echo "window.alert('มีข้อมูลนี้แล้ว');";
		        echo "window.location = 'managepig.php?v=vaccine';";
		        echo "</script>";
		        die();
		  }
		  else 
		  {
		   $sum = $_POST['price'] * $_POST['amount'];
            $name = $_POST['name'];
            $amonut = $_POST['amount'];
		   $sqlbuy = "INSERT INTO buy VALUES (NULL, '$data', 'ซื้อหวัดซีน $name จำนวน $amonut', '$sum', '$datetime')";
			$db3->query($sqlbuy);
			$idbuy = $db3->insert_id();

			$sql = "INSERT INTO pf_buyvac (`Id`, `id_buy`, `name`, `date_buy`, `amount`, `price`)  VALUES  (NULL , '".$idbuy."', '".$_POST['name']."', '".$_POST['date']."', '".$_POST['amount']."', '".$_POST['price']."')";
			$db->query($sql);
			

		  }

?>

<script>
	window.location = 'managepig.php?v=vaccine';
</script>