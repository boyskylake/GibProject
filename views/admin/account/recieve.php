
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
    }
  else
    {
      return true;
    }
  }
</script>

<div class="panel panel-default">
  	<div class="panel-heading">
  		<h3>
  			<span class="glyphicon glyphicon-calendar"></span>
  			<strong>บันทึกรายรับประจำวัน</strong>
  		</h3>
  	</div>
  	<div class="panel-body">
  		<form class="form-horizontal" name="form1" id="form1" onsubmit="return checkma()" action="controller/recieve.php" method="POST" entype="multipart/data">
  			<div align="right">
	  			<button type="submit" class="btn btn-success btn-lg">
	  				<span class="glyphicon glyphicon-floppy-disk"></span>
	  				&nbsp;บันทึก
	  			</button>
	  			<hr></hr>
  			</div>
  			
	  		<div class="alert alert-info">
				<div class="form-group">
					<label class="col-sm-2 control-label" for="date">วันที่</label>
		    		<div class="col-xs-4">
		    			<?php $today = getdate(); ?>
		    			<input readonly value="<?php echo date("Y-m-d"); ?>" name="date" placeholder="ปปปป-ดด-วว" type="text" class="form-control input-lg"/>
		  			</div>
	  			</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="list">รายการ</label>
		  			<div class="col-xs-6">
		    			<input name="from" id="from" type="text" class="form-control input-lg"/>
		  			</div>
		  		</div>
	  			<div class="form-group">
	  				<label class="col-sm-2 control-label" for="money">ราคา</label>
	  				<div class="col-xs-2">
	    				<input name="money" id="money" type="number" min="0" class="form-control input-lg"/>
	    			</div>
	    			<label class="control-label" for="money">บาท.</label>
	  			</div>
	  			<span id="mySpan"></span>
	  		</div>
  		</form>
  	</div>
</div>