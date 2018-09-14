
  <script language="JavaScript" type="text/javascript">
  function checkma()
  {
    d=document.form1
    if(d.id_pig.value=="")
    {
    alert("กรุณากรอก เลขที่หมู");
    d.id_pig.focus();
    return false;
    }else if (d.date.value=="") {
      alert("กรุณาเลือกวันที่เกิด");
      d.date.focus();
      return false;
    }else if (d.vaccine.value=="") {
      alert("กรุณากรอก ชื่อวัคซีน");
      d.vaccine.focus();
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

    $sql = "SELECT * FROM `pf_pig`";
    $db->query($sql);

 ?>

<form id="form1" name="form1" method="POST" action="managepig.php?v=process_addvac" onsubmit="return checkma()">
  <div class="form-group">
    <label for="exampleFormControlInput1">เลือกเลขที่หมู</label>
    <select class="form-control" name="id_pig" id="id_pig">
      <option value="">ระบุ</option>
      <?php
       while ($pig = $db->fetch_assoc()){
       ?>
       <option value="<?php echo $pig['Id']; ?>"><?php echo $pig['No']; ?></option>
       <?php
       } 
       ?>
    </select>
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">ชื่อ วัคซีน</label>
    <input type="text" class="form-control" id="vaccine" name="vaccine">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">วันที่ฉีด</label>
    <input type="date" class="form-control" id="date" name="date">
  </div>

  <button class="btn btn-primary" type="submit">เพิ่ม</button>
</form>
