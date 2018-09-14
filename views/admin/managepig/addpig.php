
  <script language="JavaScript" type="text/javascript">
  function checkma()
  {
    d=document.form1
    if(d.No.value=="")
    {
    alert("กรุณากรอก เลขที่หมู");
    d.No.focus();
    return false;
    }else if (d.stall.value=="") {
      alert("กรุณาเลือกคอก");
      d.stall.focus();
      return false;
    }else if (d.date.value=="") {
      alert("กรุณาเลือกวันที่เกิด");
      d.date.focus();
      return false;
    }else if (d.typepig.value=="") {
      alert("กรุณากรอก ชนิดหมู");
      d.typepig.focus();
      return false;
    }
  else
    {
      return true;
    }
  }
</script>

<h3>เพิ่มคอกหูม</h3>
<br>
<?php
 require_once ('lib/DB.php');

    $db=new DB();

    $sql = "SELECT * FROM `pf_stall`";
    $db->query($sql);

 ?>

<form id="form1" name="form1" method="POST" action="managepig.php?v=process_addpig" onsubmit="return checkma()">
  <div class="form-group">
    <label for="exampleFormControlInput1">เลขที่หมู</label>
    <input type="text" class="form-control" id="No" name="No">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">เลือกคอก</label>
    <select class="form-control" name="stall" id="stall">
      <option value="">ระบุ</option>
      <?php
       while ($stall = $db->fetch_assoc()){
       ?>
       <option value="<?php echo $stall['Id']; ?>"><?php echo $stall['name']; ?></option>
       <?php
       } 
       ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">วันที่เกิด</label>
    <input type="date" class="form-control" id="date" name="date">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">ชนิดหมู</label>
    <input type="text" class="form-control" id="typepig" name="typepig">
  </div>

  <button class="btn btn-primary" type="submit">เพิ่ม</button>
</form>
