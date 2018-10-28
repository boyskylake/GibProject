<h3>
  <a href="managepig.php?v=addvac"><button type="button" class="btn btn-primary">ซื้อวัคซีน</button></a>
</h3><br>

<?php
 require_once ('lib/DB.php');

    $db=new DB();
    $db2=new DB();

    $sql = "SELECT * FROM 
pf_buyvac as bv, 
buy as b 
WHERE bv.id_buy = b.id AND bv.status = 'มี'";
    $db->query($sql);

 ?>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ที่</th>
	      <th scope="col">ชื่อหวัดซีน</th>
	      <th scope="col">เวลาซื้อ</th>
	      <th scope="col">จำนวน</th>
	      <th scope="col">ราคา</th>
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
	      <td><?php echo $result['name']; ?></td>
	      <td><?php echo date('d/m/Y',strtotime($result['date_buy'])); ?></td>
	      <td><?php echo $result['amount']; ?></td>
	      <td><?php echo $result['b_money']; ?></td>
	      <td><a href="managepig.php?v=editvac&id=<?php echo $result['Id']; ?>"><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
	      <td><a href="managepig.php?v=delvac&id=<?php echo $result['Id']; ?>&idbuy=<?php echo $result['id_buy']; ?>" onClick="return confirm('ต้องการลบข้อมูล?')"><button type="button" class="btn btn-danger">ลบ</button></a></td>
	    </tr>
	    <?php 
	    $num++;
    	}
	     ?>
	  </tbody>
	</table>