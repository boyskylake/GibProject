<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$db2=new DB();

$name = $_POST['name'];

$strSQL1 = "SELECT * FROM pf_stall where name_sl = '".$name."' ";
$db->query($strSQL1);
$res =  $db->fetch_assoc();

  if ($name == $res['name_sl']) {

        echo "<script>";
        echo "window.alert('มีข้อมูลนี้แล้ว');";
        echo "window.location = 'managepig.php?v=stall';";
        echo "</script>";
        die();
  }
  else 
  {
	$sql = "INSERT INTO pf_stall VALUES (NULL, '".$_POST['name']."')";
	$db2->query($sql);
  }


?>

<script>
	window.alert('เพิ่มสำเร็จ');
	window.location = 'managepig.php?v=stall';
	
</script>