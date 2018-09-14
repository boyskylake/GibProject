<h3>
  <a href="managepig.php?v=addvac"><button type="button" class="btn btn-primary">เพิ่มวัคซีน</button></a>
</h3><br>

<?php
 require_once ('lib/DB.php');

    $db=new DB();
    $db2=new DB();

    $sql = "SELECT * FROM `pf_vaccine`";
    $db->query($sql);

 ?>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ที่</th>
	      <th scope="col">เลขที่หมู</th>
	      <th scope="col">ชื่อ วัคซีน</th>
	      <th scope="col">วันที่ฉีด</th>
	      <th scope="col">แก้ไข</th>
	      <th scope="col">ลบ</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php

	  		$num = 1;
	  		foreach ($db->fetch_array() as $result) {
	  			$sqlstall = "SELECT * FROM `pf_pig` WHERE Id = '".$result['id_pig']."'";
	  			$db2->query($sqlstall);
	  			$resstall = $db2->fetch_assoc();
	  	 ?>
	    <tr>
	      <th scope="row"><?php echo $num ?></th>
	      <td><?php echo $resstall['No']; ?></td>
	      <td><?php echo $result['vaccine']; ?></td>
	      <td><?php echo date('d/m/Y',strtotime($result['date'])); ?></td>
	      <td><a href="managepig.php?v=editvac&id=<?php echo $result['Id']; ?>"><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
	      <td><a href="managepig.php?v=delvac&id=<?php echo $result['Id']; ?>&id_pig=<?php echo $result['id_pig']; ?>" onClick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="btn btn-danger">ลบ</button></a></td>
	    </tr>
	    <?php 
	    $num++;
    	}
	     ?>
	  </tbody>
	</table>