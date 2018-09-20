<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$db2=new DB();
	// $db3=new DB();

		$strSQL1 = "SELECT * FROM pf_pig where No = '".$_POST['No']."' AND status = 'อยู่' ";
		$db2->query($strSQL1);
		$res =  $db2->fetch_assoc();

		  if ($_POST['No'] == $res['No']) {

		        echo "<script>";
		        echo "window.alert('มีข้อมูลนี้แล้ว');";
		        echo "window.location = 'managepig.php?v=pig';";
		        echo "</script>";
		        die();
		  }
		  else 
		  {
	$sql = "INSERT INTO pf_pig VALUES (NULL, '".$_POST['No']."', '".$_POST['stall']."', '".$_POST['typepig']."', '".$_POST['date']."', 'อยู่')";
	$db->query($sql);
		}

	// $sqlpig = "SELECT COUNT(`id_stall`) AS pig FROM `pf_pig` WHERE `id_stall` = '".$_POST['stall']."'";
	// $db2->query($sqlpig);
	// $respig = $db2->fetch_assoc();
	// $pig = $respig['pig'];

	// $sqladdpig = "UPDATE `pf_stall` SET `amount`= '$pig' WHERE `Id_sl` = '".$_POST['stall']."'";
	// $db3->query($sqladdpig);
?>

<script>
	window.location = 'managepig.php?v=pig';
</script>