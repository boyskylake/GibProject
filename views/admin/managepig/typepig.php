<h3>
  <a href="managepig.php?v=addtpye"><button type="button" class="btn btn-primary">เพิ่มชนิดสุกร</button></a>
</h3><br>

<?php
 require_once ('lib/DB.php');

    $db=new DB();
    $db2=new DB();

    $sql = "SELECT * FROM `pf_typepig`";
    $db->query($sql);

 ?>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ที่</th>
	      <th scope="col">ชื่อชนิด</th>
	      <th scope="col" align="center">จำนวนสุกร</th>
	      <th scope="col">แก้ไข</th>
	      <th scope="col">ลบ</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 
	  		$num = 1;
	  		foreach ($db->fetch_array() as $result) {
	  			$sqltype = "SELECT COUNT(`id_typepig`) AS sumtype FROM pf_pig WHERE `id_typepig` = '".$result['Id_tp']."' and status = 'อยู่'";
	  			$db2->query($sqltype);
	  			$restype = $db2->fetch_assoc();
	  	 ?>
	    <tr>
	      <th scope="row"><?php echo $num ?></th>
	      <td><?php echo $result['name_tp']; ?></td>
	      <td><?php echo $restype['sumtype']; ?> ตัว <br><a href="managepig.php?v=typeView&id=<?php echo $result['Id_tp']; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a>
	  					&nbsp;</td>
	      <td><a href="managepig.php?v=edittype&id=<?php echo $result['Id_tp']; ?>"><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
	      <td><a href="managepig.php?v=deltype&id=<?php echo $result['Id_tp']; ?>" onClick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="btn btn-danger">ลบ</button></a></td>
	    </tr>
	    <?php 
	    $num++;
    	}
	     ?>
	  </tbody>
	</table>