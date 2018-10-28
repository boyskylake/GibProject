<?php 
	require_once ('lib/DB.php');

	$db=new DB();
	$db2=new DB();

	$sqlstall = "SELECT COUNT(`id_stall`) AS sumstall FROM pf_pig WHERE `id_stall` = '".$_GET['id']."' and status = 'อยู่'";
	  			$db2->query($sqlstall);
	  			$resstall = $db2->fetch_assoc();
	  			echo $resstall['sumstall'];
	if ($resstall['sumstall'] > 0) {
		echo $resstall['sumstall'];
		echo "<script>";
		echo "window.alert('สุกรในคอกยังเหลืออยู่');";
		echo "window.location = 'managepig.php?v=stall';";
		echo "</script>";
		die();
	}
	else{
		$sql = "DELETE FROM `pf_stall` WHERE `Id_sl`='".$_GET['id']."' ";
		$db->query($sql);
	}
?>

<script>
	window.location = 'managepig.php?v=stall';
</script>