<?php
	require_once ('lib/DB.php');
	require_once ('lib/Account.php');

	$AC=new Account();
	$db1=new DB();
	$db2=new DB();
	$db3=new DB();
	$db4=new DB();

	$sql1 = "SELECT * FROM `pf_stall`";
	$sql2 = "SELECT bdate, COUNT(`Id`) AS amount FROM pf_pig WHERE `status` = 'อยู่' GROUP BY MONTH(bdate)";
	$sql3 = "SELECT * FROM pf_pig WHERE `status` = 'อยู่'";

	$db1->query($sql1);
	$db2->query($sql2);
	$db3->query($sql3);

	$numpig = $db3->num_rows();
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3>
  			<span class="glyphicon glyphicon-stats"></span>
  			<strong>สรุป การจัดการสุกร</strong>
  		</h3>
	</div>

	<div class="panel-body">
		<table class="table"  align="center">
			<tr class="active">
				<th colspan="2"><h4><strong class="alert alert-info">สรุปคอกสุกร </strong></h4></th>
			</tr>
			<?php foreach ($db1->fetch_array() as $rs) {
				$sqlstall = "SELECT COUNT(`id_stall`) AS sumstall FROM pf_pig WHERE `id_stall` = '".$rs['Id_sl']."' and status = 'อยู่'";
	  			$db4->query($sqlstall);
	  			$resstall = $db4->fetch_assoc();
			 ?>

			<tr>
				<td width="100px"><?php echo ($rs['name_sl']); ?></td>
				<td width="100px"><?php echo "จำนวนสุกร  ".$resstall['sumstall']."  ตัว"; ?></td>
			</tr>
			
			<?php } ?>

			<tr class="active">
				<td colspan="2"><h4><strong class="alert alert-info">สรุปสุกร</strong></h4></td>
			</tr>
			<?php foreach ($db2->fetch_array() as $rs2) { ?>
			<tr>
				<td><?php echo "จำนวนสุกรที่เกิดเดือน &nbsp;&nbsp;&nbsp;".$AC->convertMonth($rs2['bdate']); ?></td>
				<td><?php echo $rs2['amount']."  &nbsp;&nbsp; ตัว"; ?></td>
			</tr>
			<?php 
				} 
			?>
			<tr>
				<td>
					<div align="right">
					<strong>จำนวนสุกรทั้งหมด</strong>&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				</td>
				<td>
					<strong><?php echo $numpig; ?></strong></td>
			</tr>

		</table>
	</div>
</div>