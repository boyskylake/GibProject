<h3>
  <a href="general.php?v=addabout"><button type="button" class="btn btn-primary">เพิ่มหัวข้อเกี่ยวกับเรา</button></a>
</h3><br>

<?php
 require_once ('lib/DB.php');

    $db=new DB();

    $sql = "SELECT * FROM `td_about` ORDER BY `Id` DESC";
    $db->query($sql);

 ?>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ที่</th>
	      <th scope="col">หัวข้อ</th>
	      <th scope="col">รายละเอียด</th>
	      <th scope="col">แก้ไข</th>
	      <th scope="col">ลบ</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 
	  		$num = 1;
	  		foreach ($db->fetch_array() as $result) {
	  	 ?>
	    <tr>
	      <th scope="row"><?php echo $num ?></th>
	      <td><?php echo $result['Topic']; ?></td>
	      <td><?php echo $result['Description']; ?></td>
	      <td><a href="general.php?v=editabout&id=<?php echo $result['Id']; ?>"><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
	      <td><a href="general.php?v=delabout&id=<?php echo $result['Id']; ?>" onClick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="btn btn-danger">ลบ</button></a></td>
	    </tr>
	    <?php 
	    $num++;
    	}
	     ?>
	  </tbody>
	</table>