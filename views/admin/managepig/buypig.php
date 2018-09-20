<?php 
$id = $_GET['id'];
require_once ('lib/DB.php');

    $db=new DB();
    $db2=new DB();

    $sql = "SELECT * FROM `pf_pig` WHERE `Id` = '".$id."' ";
    $db->query($sql);
    $res = $db->fetch_assoc();

 ?>

  <script language="JavaScript" type="text/javascript">
  function checkma()
  {
    d=document.form1
    if(d.from.value=="")
    {
    alert("กรุณากรอก รายการ");
    d.from.focus();
    return false;
    }else if (d.money.value=="") {
      alert("กรุณากรอก ราคา");
      d.money.focus();
      return false;
    }else if (d.kk.value=="") {
      alert("กรุณากรอก น้ำหนัก");
      d.kk.focus();
      return false;
    }
  else
    {
      return true;
    }
  }
</script>

	<script type="text/javascript">
  			
  			    function changkk(){

				   var kk = document.getElementById('kk').value;
				   var sum = kk * 55;

				   document.getElementById('money').value = sum;
				    }
  		</script>
<div class="panel panel-default">
  	<div class="panel-heading">
  		<h3>
  			<span class="glyphicon glyphicon-calendar"></span>
  			<strong>บันทึกรายรับขาย สุกร</strong>
  		</h3>
  	</div>
  	<div class="panel-body">
  		<form class="form-horizontal" action="managepig.php?v=process_buypig" method="POST" entype="multipart/data" name="form1" id="form1" onsubmit="return checkma()">
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
		    			<input name="from" id="from" type="text" class="form-control input-lg" value="<?php echo 'ขายสุกรเลขที่ '.$res['No']; ?>" />
		  			</div>
		  			<input hidden type="id" name="id" value="<?php echo $id; ?>">
		  		</div>
		  		<div class="form-group">
	  				<label class="col-sm-2 control-label" for="kk">น้ำหนัก</label>
	  				<div class="col-xs-2">
	    				<input name="kk" id="kk" min="0" type="number" class="form-control input-lg" value="0" onchange="changkk()" />
	    			</div>
	    			<label class="control-label" for="kk">กิโลกรัม.</label>
	  			</div>
	  			<div class="form-group">
	  				<label class="col-sm-2 control-label" for="money">ราคา</label>
	  				<div class="col-xs-2">
	    				<input readonly name="money" id="money" min="0" type="number" class="form-control input-lg" value="0" onchange="changkk()" />
	    			</div>
	    			<label class="control-label" for="money">บาท.</label>
	  			</div>
	  			<span id="mySpan"></span>
	  		</div>
  		</form>

  	</div>
</div>