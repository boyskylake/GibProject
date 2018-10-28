
  <script language="JavaScript" type="text/javascript">
  function checkma()
  {
    d=document.form1
    if(d.topic.value=="")
    {
    alert("กรุณากรอก หัวข้อ");
    d.topic.focus();
    return false;
    }
    else if (d.des.value=="") {
       alert("กรุณากรอก รายละเอียด");
    d.topic.focus();
    return false;
    }
   
  else
    {
      return true;
    }
  }
</script>

<h3>แก้ไขบริการของฟาร์มสุกร</h3>
<br>
<?php 
  $id = $_GET['id'];
  require_once ('lib/DB.php');

    $db=new DB();

    $sql = "SELECT * FROM `td_service` WHERE `Id` = '".$id."'";
    $db->query($sql);
    $res = $db->fetch_assoc();


 ?>
<form id="form1" name="form1" method="POST" action="general.php?v=process_editservice" onsubmit="return checkma()">
  <div class="form-group">
    <label for="exampleFormControlInput1">หัวข้อ</label>
    <input type="text" class="form-control" id="topic" name="topic" value="<?php echo $res['Topic']; ?>">
  </div>
  <input hidden type="text" name="id" id="id" value="<?php echo $res['Id']; ?>">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">รายละเอียด</label>
    <textarea class="form-control" rows="6" name="des" id="des" ><?php echo $res['Description']; ?></textarea>
  </div>
  <button class="btn btn-primary" type="submit">เพิ่ม</button>
</form>
