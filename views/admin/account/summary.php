<?php
	require_once ('lib/DB.php');
	require_once ('lib/Account.php');

	$AC=new Account();
	$db1=new DB();
	$db2=new DB();
	$db3=new DB();
	$db4=new DB();

	$sql1 = "SELECT date, SUM(r_money) AS s_recieve FROM recieve GROUP BY MONTH(date)";
	$sql2 = "SELECT date, SUM(b_money) AS s_buy FROM buy GROUP BY MONTH(date)";
	$sql3 = "SELECT date, SUM(r_money) AS y_recieve FROM recieve GROUP BY YEAR(date)";
	$sql4 = "SELECT date, SUM(b_money) AS y_buy FROM buy GROUP BY YEAR(date)";



	$db1->query($sql1);
	$db2->query($sql2);
	$db3->query($sql3);
	$db4->query($sql4);

	//SUM RECIEVE MONTH
	foreach ($db1->fetch_array() as $f1) {
		$balance1 = $f1['s_recieve'];
	}
	//SUM BUY MONTH
	foreach ($db2->fetch_array() as $f2) { 
		$balance2 = $f2['s_buy']; 
	}
	//RESULT BALANCE MONTH
	$balanceMONTH = $balance1-$balance2;

	//SUM RECIEVE YEAR
	foreach ($db3->fetch_array() as $f3) {
		$balance3 = $f3['y_recieve'];
	}
	//SUM BUY YEAR
	foreach ($db4->fetch_array() as $f4) { 
		$balance4 = $f4['y_buy']; 
	}

	//RESULT BALANCE YEAR
	$balanceYEAR = $balance3-$balance4;
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3>
  			<span class="glyphicon glyphicon-stats"></span>
  			<strong>สรุป รายรับ-รายจ่าย</strong>
  		</h3>
	</div>

	<div class="panel-body">
		<div class="alert alert-info">
			<h3 align="center">รายรับ-รายจ่าย ต่อเดือน</h3><br>
			<h3 align="right"><strong>
				ยอดเงินคงเหลือปัจจุบัน&nbsp;&nbsp;
				<span class="label label-primary"><?php echo $AC->putComma($balanceMONTH); ?></span>
				&nbsp;&nbsp;บาท
			</strong></h3>
		</div>
		<table class="table"  align="center">
			<tr class="active">
				<td colspan="2"><h4><strong>รายรับ</strong></h4></td>
			</tr>
			<?php foreach ($db1->fetch_array() as $rs) { ?>
			<tr>
				<td width="600px"><?php echo $AC->convertMonth($rs['date']); ?></td>
				<td width="100px"><?php echo $s1 = $rs['s_recieve']; ?></td>
			</tr>
			<?php } ?>
			<tr>
				<td>
					<div align="right">
					<strong>TOTAL</strong>&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				</td>
				<td><strong><?php echo $AC->putComma((string)$s1); ?></strong></td>
			</tr>

			<tr class="active">
				<td colspan="2"><h4><strong>รายจ่าย</strong></h4></td>
			</tr>
			<?php foreach ($db2->fetch_array() as $rs2) { ?>
			<tr>
				<td><?php echo $AC->convertMonth($rs2['date']); ?></td>
				<td><?php echo $rs2['s_buy']; $s2 = $rs2['s_buy']; ?></td>
			</tr>
			<?php } ?>
			<tr>
				<td>
					<div align="right">
					<strong>TOTAL</strong>&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				</td>
				<td>
					<strong><?php echo $AC->putComma((string)$s2); ?></strong></td>
			</tr>


		</table>
	</div>

	<div class="panel-body">
		<div class="alert alert-info">
			<h3 align="center">รายรับ-รายจ่าย ต่อปี</h3><br>
			<h3 align="right"><strong>
				ยอดเงินคงเหลือปัจจุบัน&nbsp;&nbsp;
				<span class="label label-primary"><?php echo $AC->putComma($balanceYEAR); ?></span>
				&nbsp;&nbsp;บาท
			</strong></h3>
		</div>
		<table class="table"  align="center">
			<tr class="active">
				<td colspan="2"><h4><strong>รายรับ</strong></h4></td>
			</tr>
			<?php foreach ($db3->fetch_array() as $rs3) { ?>
			<tr>
				<td width="600px"><?php $time = strtotime($rs3['date']); echo date('Y', $time); ?></td>
				<td width="100px"><?php echo $y1 = $rs3['y_recieve']; ?></td>
			</tr>
			<?php } ?>
			<tr>
				<td>
					<div align="right">
					<strong>TOTAL</strong>&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				</td>
				<td><strong><?php echo $AC->putComma((string)$y1); ?></strong></td>
			</tr>

			<tr class="active">
				<td colspan="2"><h4><strong>รายจ่าย</strong></h4></td>
			</tr>
			<?php foreach ($db4->fetch_array() as $rs4) { ?>
			<tr>
				<td><?php $time2 = strtotime($rs4['date']); echo date('Y', $time2); ?></td>
				<td><?php echo $rs4['y_buy']; $y2 = $rs4['y_buy']; ?></td>
			</tr>
			<?php } ?>
			<tr>
				<td>
					<div align="right">
					<strong>TOTAL</strong>&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				</td>
				<td>
					<strong><?php echo $AC->putComma((string)$y2); ?></strong></td>
			</tr>


		</table>
	</div>
</div>