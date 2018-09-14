<?php
 require_once ('lib/DB.php');

    $db=new DB();

    $sql = "SELECT * FROM `td_contect` ORDER BY `Id` DESC";
    $db->query($sql);

 ?>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ที่</th>
	      <th scope="col">ชื่อ</th>
	      <th scope="col">E-mail</th>
	      <th scope="col">เบอร์โทร</th>
	      <th scope="col">ข้อความ</th>
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
	      <td><?php echo $result['name']; ?></td>
	      <td><?php echo $result['email']; ?></td>
	      <td><?php echo $result['phone']; ?></td>
	      <td><?php echo $result['message']; ?></td>
	      <td><a href="general.php?v=delcontect&id=<?php echo $result['Id']; ?>" onClick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="btn btn-danger">ลบ</button></a></td>
	    </tr>
	    <?php 
	    $num++;
    	}
	     ?>
	  </tbody>
	</table>