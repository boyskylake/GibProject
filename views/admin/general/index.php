<?php
	require_once ('lib/DB.php');
	require_once ('lib/Account.php');

	$AC=new Account();
	$db1=new DB();
	$db2=new DB();

	$sql1 = "SELECT COUNT(`id_act`) AS apt FROM `activity` WHERE `status_act` = 1 UNION ALL SELECT COUNT(`id_act`) AS aptn FROM `activity` WHERE `status_act` = 0";
	$sql2 = "SELECT * FROM `td_team`";

	$db1->query($sql1);

	$db2->query($sql2);
	$numstaff = $db2->num_rows();
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3>
  			<span class="glyphicon glyphicon-stats"></span>
  			<strong>ข้อมูลทั่วไป</strong>
  		</h3>
	</div>

	<div class="panel-body">
		<table class="table"  align="center">
			<tr class="active">
				<th colspan="2"><h4><strong class="alert alert-info">กิจกรรม </strong></h4></th>
			</tr>
			
			<?php 
			$i=0;
			foreach ($db1->fetch_array() as $rs) {
				$i++;
				if ($i == '1') {
				?>
			<tr>
				<td width="100px"><?php echo 'กิจกรรมที่เผยแพร่'; ?></td>
				<td width="100px"><?php echo $rs['apt']; ?></td>
			</tr>
		<?php }
		if ($i == '2') { ?>
			<tr>
				<td width="100px"><?php echo "กิจกรรมที่ไม่เผยแพร่"; ?></td>
				<td width="100px"><?php echo  $rs['apt']; ?></td>
			</tr>
		<?php
			 }
			} 
			?>
			

			<tr class="active">
				<td colspan="2"><h4><strong class="alert alert-info">บุคลากร</strong></h4></td>
			</tr>
			<tr>
				<td><?php echo "จำนวนบุคลากร"; ?></td>
				<td><?php echo $numstaff." คน"; ?></td>
			</tr>
			<!-- <tr>
				<td>
					<div align="right">
					<strong>จำนวนสุกรทั้งหมด</strong>&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				</td>
				<td>
					<strong><?php echo $numpig; ?></strong></td>
			</tr> -->

		</table>
	</div>
</div>