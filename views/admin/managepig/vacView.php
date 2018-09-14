<?php
	require_once ('lib/DB.php');
	require_once ('lib/Account.php');

	$AC=new Account();
	$db=new DB();
	$db2=new DB();

	$id = $_GET['id'];
	$sql = "SELECT * FROM `pf_vaccine` WHERE `id_pig` = '".$id."'";
	$db->query($sql);

	$sql = "SELECT * FROM `pf_pig` WHERE `Id` = '".$id."'";
	$db2->query($sql);
	$rspig = $db2->fetch_assoc();
?>

<div class="panel panel-primary">
	<div class="panel-body">
		<div style="font-size: 35px;">
			<div class="alert alert-info">
				<div align="center">
					<?php 
						echo "เลขที่สุกร ".$rspig['No'];
					 ?>
				</div>
			</div>
		</div>
		<div class="btn-primary" style="padding: 2px;"></div> 
		<br>

		<?php foreach ($db->fetch_array() as $rs) { ?>
		<blockquote class="btn-default">
			<div style="font-size: 25px">
		  		<p style="font-size: 25px"><strong>ชื่อวัคซีน : <?php echo $rs['vaccine']; ?></strong></p>
		  		<p>วันที่ <?php echo date('d/m/Y',strtotime($rs['date'])); ?> </p>
			</div>

		</blockquote>
		<?php } ?>

	</div>
</div>