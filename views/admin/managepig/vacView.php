<?php
	require_once ('lib/DB.php');
	require_once ('lib/Account.php');

	$AC=new Account();
	$db=new DB();
	$db2=new DB();

	$id = $_GET['id'];
	$sql = "SELECT pf_pig.Id,pf_pig.No,pf_vaccine.id_vacbuy,pf_vaccine.id_pig,pf_vaccine.date,pf_buyvac.Id,pf_buyvac.name FROM pf_pig 
LEFT JOIN pf_vaccine
ON pf_pig.Id = pf_vaccine.id_pig
LEFT JOIN pf_buyvac
ON pf_vaccine.id_vacbuy = pf_buyvac.Id
WHERE pf_vaccine.id_pig = '".$id."'";
	$db->query($sql);
	$db2->query($sql);
	$no = $db2->fetch_assoc();

?>

<div class="panel panel-primary">
	<div class="panel-body">
		<div style="font-size: 35px;">
			<div class="alert alert-info">
				<div align="center">
					<?php 
						echo "เลขที่สุกร ".$no['No'];
					 ?>
				</div>
			</div>
		</div>
		<div class="btn-primary" style="padding: 2px;"></div> 
		<br>

		<?php foreach ($db->fetch_array() as $rs) { ?>
		<blockquote class="btn-default">
			<div style="font-size: 25px">
		  		<p style="font-size: 25px"><strong>ชื่อวัคซีน : <?php echo $rs['name']; ?></strong></p>
		  		<p>วันที่ <?php echo date('d/m/Y',strtotime($rs['date'])); ?> </p>
			</div>

		</blockquote>
		<?php } ?>

	</div>
</div>