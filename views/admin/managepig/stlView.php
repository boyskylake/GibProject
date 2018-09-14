<?php
	require_once ('lib/DB.php');

	$db=new DB();
	$db2=new DB();

	$id = $_GET['id'];
	$sql = "SELECT * FROM `pf_pig` WHERE `id_stall` = '".$id."' && `status` = 'อยู่'";
	$db->query($sql);
	$num = $db->num_rows();

	$sqlstall = "SELECT * FROM `pf_stall` WHERE `Id` = '".$id."'";
	$db2->query($sqlstall);
	$rsstall = $db2->fetch_assoc();
?>

<div class="panel panel-primary">
	<div class="panel-body">
		<div style="font-size: 35px;">
			<div class="alert alert-info">
				<div align="center">
					<?php 
						echo "ชื่อคอก ".$rsstall['name'];
					 ?>
				</div>
				<div align="right"><?php echo "จำนวนสุกร ".$num." ตัว"; ?></div>
			</div>
		</div>
		<div class="btn-primary" style="padding: 2px;"></div> 
		<br>

		<?php foreach ($db->fetch_array() as $rs) { ?>
		<blockquote class="btn-default">
			<div style="font-size: 25px">
		  		<p style="font-size: 25px"><strong>เลขที่สุกร : <?php echo $rs['No']; ?></strong></p>
		  		<p>วันที่เกิด <?php echo date('d/m/Y',strtotime($rs['bdate'])); ?> </p>
		  		<p>ชนิด <?php echo $rs['typepig']; ?> </p>
			</div>

		</blockquote>
		<?php } ?>

	</div>
</div>