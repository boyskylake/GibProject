<?php 
$id = $_GET['id'];
require_once ('lib/DB.php');

    $db=new DB();
    $db2=new DB();

    $sql = "SELECT * FROM `pf_pig` WHERE `Id` = '".$id."' ";
    $db->query($sql);
    $res = $db->fetch_assoc();

 ?>

<div class="panel panel-default">
  	<div class="panel-heading">
  		<h3>
  			<span class="glyphicon glyphicon-calendar"></span>
  			<strong>บันทึกรายรับขาย สุกร</strong>
  		</h3>
  	</div>
  	<div class="panel-body">
  		<form class="form-horizontal" action="managepig.php?v=process_buypig" method="POST" entype="multipart/data">
  			<div align="right">
	  			<button type="submit" class="btn btn-success btn-lg">
	  				<span class="glyphicon glyphicon-floppy-disk"></span>
	  				&nbsp;บันทึก
	  			</button>
	  			<hr></hr>
  			</div>
  			
	  		<div class="alert alert-info">
				<div class="form-group">
					<label class="col-sm-2 control-label" for="date">เวลา</label>
		    		<div class="col-xs-4">
		    			<?php $today = getdate(); ?>
		    			<input value="<?php echo date("Y-m-d"); ?>" name="date" placeholder="ปปปป-ดด-วว" type="text" class="form-control input-lg"/>
		  			</div>
	  			</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="list">รายการ</label>
		  			<div class="col-xs-6">
		    			<input name="from" type="text" class="form-control input-lg" value="<?php echo 'ขายสุกรเลขที่ '.$res['No']; ?>" />
		  			</div>
		  			<input hidden type="id" name="id" value="<?php echo $id; ?>">
		  		</div>
	  			<div class="form-group">
	  				<label class="col-sm-2 control-label" for="money">ราคา</label>
	  				<div class="col-xs-2">
	    				<input name="money" type="text" class="form-control input-lg" />
	    			</div>
	    			<label class="control-label" for="money">บาท.</label>
	  			</div>
	  			<span id="mySpan"></span>
	  		</div>
  		</form>
  	</div>
</div>