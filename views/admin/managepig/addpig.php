
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
    $db2=new DB();

    $sql = "SELECT * FROM `pf_stall`";
    $db->query($sql);

    $sqltype = "SELECT * FROM `pf_typepig`";
    $db2->query($sqltype);

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
       <option value="<?php echo $stall['Id_sl']; ?>"><?php echo $stall['name_sl']; ?></option>
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
    <select class="form-control" name="typepig" id="typepig">
      <option value="">ระบุ</option>
      <?php
       while ($typepig = $db2->fetch_assoc()){
       ?>
       <option value="<?php echo $typepig['Id_tp']; ?>"><?php echo $typepig['name_tp']; ?></option>
       <?php
       } 
       ?>
    </select>
  </div>

  <button class="btn btn-primary" type="submit">เพิ่ม</button>
</form>
