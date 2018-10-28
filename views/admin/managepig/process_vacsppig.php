<?php 
	require_once ('lib/DB.php');

	$db=new DB();
  $db2=new DB();
  $db3=new DB();
  $db4=new DB();
	$db5=new DB();

$id = $_POST['id'];
$vac = $_POST['vac'];
$date = $_POST['date'];

  $strSQL1 = "SELECT `amount` FROM `pf_buyvac` WHERE `Id` = '".$vac."' ";
  $db->query($strSQL1);
  $res =  $db->fetch_assoc();
  $sumvac = $res['amount'] - 1;

    $strsumvac = "UPDATE `pf_buyvac` SET `amount`= '".$sumvac."' WHERE `Id` = '".$vac."'";
    $db3->query($strsumvac);


    $strvaccount = "SELECT `amount` FROM `pf_buyvac` WHERE `Id` = '".$vac."' ";
    $db4->query($strvaccount);
    $rescount =  $db4->fetch_assoc();
  if ($rescount['amount'] == 0) {
        $strsta = "UPDATE `pf_buyvac` SET `status` = 'หมด' WHERE `Id` = '".$vac."' ";
        $db5->query($strsta);
    }

	$sql = "INSERT INTO `pf_vaccine`(`Id`, `id_pig`, `id_vacbuy`, `date`) VALUES (NULL,'".$id."','".$vac."','".$date."')";
	$db2->query($sql);



  
?>

<script>
	window.alert('เพิ่มสำเร็จ');
	window.location = 'managepig.php?v=pig';
	
</script>