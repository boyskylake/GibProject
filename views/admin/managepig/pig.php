<div>
<h3>
  <a href="managepig.php?v=addpig"><button type="button" class="btn btn-primary">เพิ่มหมู</button></a>
</h3>
<div align="right">
	
<h3>
  <a href="managepig.php?v=pigallbuy"><button type="button" class="btn btn-primary">สุกรที่ขายแล้ว</button></a>
</h3><br>
</div>
</div>
<?php
 require_once ('lib/DB.php');

    $db=new DB();
    $db2=new DB();

    $sql = "SELECT pf_pig.Id,pf_pig.No,pf_pig.id_stall,pf_pig.id_typepig,pf_pig.bdate,pf_pig.status,pf_stall.name_sl,pf_stall.Id_sl,pf_typepig.Id_tp,pf_typepig.name_tp
FROM pf_pig
LEFT JOIN pf_stall
ON pf_pig.id_stall = pf_stall.Id_sl
LEFT JOIN pf_typepig
ON pf_pig.id_typepig = pf_typepig.Id_tp WHERE pf_pig.status = 'อยู่'";
    $db->query($sql);

 ?>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col" width="1">ที่</th>
	      <th scope="col">เลขที่หมู</th>
	      <th scope="col">ชื่อคอก</th>
	      <th scope="col">วันเกิด</th>
	      <th scope="col" width="10" align="center">วัคซีน (ครั้ง)</th>
	      <th scope="col">ชนิด</th>
	      <th scope="col" width="10">ฉีดหวัดซีน</th>
	      <th scope="col" width="10">แก้ไข</th>
	      <th scope="col" width="10">ลบ</th>
	      <th scope="col" width="10">ขาย</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php

	  		$num = 1;
	  		foreach ($db->fetch_array() as $result) {
	  			$sqlstall = "SELECT COUNT(`id_pig`) AS sumvac FROM pf_vaccine WHERE `id_pig` = '".$result['Id']."'";
	  			$db2->query($sqlstall);
	  			$resstall = $db2->fetch_assoc();
	  	 ?>
	    <tr>
	      <th scope="row"><?php echo $num ?></th>
	      <td><?php echo $result['No']; ?></td>
	      <td><?php echo $result['name_sl']; ?></td>
	      <td><?php echo date('d/m/Y',strtotime($result['bdate'])); ?></td>
	      <td align="center"><?php echo $resstall['sumvac']; ?> <a href="managepig.php?v=vacView&id=<?php echo $result['Id']; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a>
	  					&nbsp;</td>
	      <td><?php echo $result['name_tp']; ?></td>
	      <td><a href="managepig.php?v=vacspping&id=<?php echo $result['Id']; ?>"><button type="button" class="btn btn-info">ฉีด</button></a></td>
	      <td><a href="managepig.php?v=editpig&id=<?php echo $result['Id']; ?>"><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
	      <td><a href="managepig.php?v=delpig&id=<?php echo $result['Id']; ?>" onClick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="btn btn-danger">ลบ</button></a></td>
	      <td><a href="managepig.php?v=buypig&id=<?php echo $result['Id']; ?>" onClick="return confirm('ต้องการขายข้อมูล?')"><button type="button" class="btn btn-active">ขาย</button></a></td>
	    </tr>
	    <?php 
	    $num++;
    	}
	     ?>
	  </tbody>
	</table>