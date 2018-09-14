<?php
	require_once ('lib/DB.php');
	require_once ('lib/Account.php');

	$AC=new Account();
	$db=new DB();
	$db2=new DB();

	$sql = "SELECT * FROM `pf_pig` WHERE `status` = 'ขายแล้ว' ORDER BY `Id` DESC";
	$db->query($sql);
?>

<div class="panel panel-primary">
	<div class="panel-body">
		<div style="font-size: 35px;">
			<div class="alert alert-info">
				<div align="center">
					<?php 
						echo "สุกร ที่จำหน่ายออกแล้ว";
					 ?>
				</div>
			</div>
		</div>
		<div class="btn-primary" style="padding: 2px;"></div> 
		<br>
			<table class="table">
		  <thead>
		    <tr>
		      <th scope="col" width="1">ที่</th>
		      <th scope="col">เลขที่หมู</th>
		      <th scope="col">ชื่อคอก</th>
		      <th scope="col">วันเกิด</th>
		      <th scope="col" width="10" align="center">วัคซีน (ครั้ง)</th>
		      <th scope="col">ชนิด</th>
		    </tr>
		  </thead>
		  <tbody>
	
	  	<?php

	  		$num = 1;
	  		foreach ($db->fetch_array() as $result) {
	  			$sqlstall = "SELECT * FROM `pf_stall` WHERE Id = '".$result['id_stall']."'";
	  			$db2->query($sqlstall);
	  			$resstall = $db2->fetch_assoc();
	  	 ?>
	    <tr>
	      <th scope="row"><?php echo $num ?></th>
	      <td><?php echo $result['No']; ?></td>
	      <td><?php echo $resstall['name']; ?></td>
	      <td><?php echo date('d/m/Y',strtotime($result['bdate'])); ?></td>
	      <td align="center"><?php echo $result['vaccine']; ?> <a href="managepig.php?v=vacView&id=<?php echo $result['Id']; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a>
	  					&nbsp;</td>
	      <td><?php echo $result['typepig']; ?></td>
	    </tr>
	    <?php 
	    $num++;
    	}
	     ?>
	  </tbody>
	</table>

	</div>
</div>