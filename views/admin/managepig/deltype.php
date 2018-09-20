<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$db2=new DB();

	$sqltype = "SELECT COUNT(`id_typepig`) AS sumtype FROM pf_pig WHERE `id_typepig` = '".$_GET['id']."' and status = 'อยู่'";
	  			$db2->query($sqltype);
	  			$restype = $db2->fetch_assoc();

	if ($restype['sumtype'] > 0) {
		echo "<script>";
		echo "window.alert('ยังเหลือสุกร ชนิดนี้ อยู่');";
		echo "window.location = 'managepig.php?v=typepig';";
		echo "</script>";
		die();
	}
	else
	{
		
	$sql = "DELETE FROM `pf_typepig` WHERE `Id_tp`='".$_GET['id']."' ";
	$db->query($sql);
	}
?>

<script>
	window.location = 'managepig.php?v=typepig';
</script>