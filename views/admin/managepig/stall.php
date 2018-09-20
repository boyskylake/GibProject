<h3>
  <a href="managepig.php?v=addstall"><button type="button" class="btn btn-primary">เพิ่มคอก</button></a>
</h3><br>

<?php
 require_once ('lib/DB.php');

    $db=new DB();
    $db2=new DB();

    $sql = "SELECT * FROM `pf_stall`";
    $db->query($sql);

 ?>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ที่</th>
	      <th scope="col">ชื่อคอก</th>
	      <th scope="col" align="center">จำนวนสุกร</th>
	      <th scope="col">แก้ไข</th>
	      <th scope="col">ลบ</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 
	  		$num = 1;
	  		foreach ($db->fetch_array() as $result) {
	  			$sqlstall = "SELECT COUNT(`id_stall`) AS sumstall FROM pf_pig WHERE `id_stall` = '".$result['Id_sl']."' and status = 'อยู่'";
	  			$db2->query($sqlstall);
	  			$resstall = $db2->fetch_assoc();
	  	 ?>
	    <tr>
	      <th scope="row"><?php echo $num ?></th>
	      <td><?php echo $result['name_sl']; ?></td>
	      <td><?php echo $resstall['sumstall']; ?> ตัว<br><a href="managepig.php?v=stlView&id=<?php echo $result['Id_sl']; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a>
	  					&nbsp;</td>
	      <td><a href="managepig.php?v=editstall&id=<?php echo $result['Id_sl']; ?>"><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
	      <td><a href="managepig.php?v=delstall&id=<?php echo $result['Id_sl']; ?>" onClick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="btn btn-danger">ลบ</button></a></td>
	    </tr>
	    <?php 
	    $num++;
    	}
	     ?>
	  </tbody>
	</table>