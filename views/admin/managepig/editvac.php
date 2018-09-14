
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
  $id = $_GET['id'];
 require_once ('lib/DB.php');

    $db=new DB();
    $db2=new DB();
    $sqlvac = "SELECT * FROM `pf_vaccine` WHERE `Id` = '".$id."'";
    $db->query($sqlvac);
    $res = $db->fetch_assoc();



    $sql = "SELECT * FROM `pf_pig` where `Id` = '".$res['id_pig']."'";
    $db2->query($sql);
    $pig = $db2->fetch_assoc();

 ?>

<form id="form1" name="form1" method="POST" action="managepig.php?v=process_editvac" onsubmit="return checkma()">
  <div class="form-group">
    <label for="disabledSelect">เลขที่หมู</label>
    <input readonly type="text" class="form-control" name="pigid" id="pigid" value="<?php echo $pig['No']; ?>">
  </div>
   <div class="form-group">
    <label re for="exampleFormControlInput1">ชื่อ วัคซีน</label>
    <input type="text" class="form-control" id="vaccine" name="vaccine" value="<?php echo $res['vaccine']; ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">วันที่ฉีด</label>
    <input type="date" class="form-control" id="date" name="date" value="<?php echo $res['date']; ?>">
  </div>
  <input hidden type="text" name="id" id="id" value="<?php echo $res['Id']; ?>">
  <button class="btn btn-primary" type="submit">เพิ่ม</button>
</form>
