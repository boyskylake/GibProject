
  <script language="JavaScript" type="text/javascript">
  function checkma()
  {
    d=document.form1
    if(d.name.value=="")
    {
    alert("กรุณากรอก ชื่อ");
    d.name.focus();
    return false;
    }
    else if (d.pst.value=="") {
       alert("กรุณากรอก ตำแหน่ง");
    d.pst.focus();
    return false;
    }
   
  else
    {
      return true;
    }
  }
</script>

<h3>เพิ่มข้อมูลเกี่ยวกับเรา</h3>
<br>
<?php 
  $id = $_GET['id'];
  require_once ('lib/DB.php');

    $db=new DB();

    $sql = "SELECT * FROM `td_team` WHERE `Id` = '".$id."'";
    $db->query($sql);
    $res = $db->fetch_assoc();


 ?>
<form id="form1" name="form1" method="POST" action="general.php?v=process_editteam" enctype="multipart/form-data" onsubmit="return checkma()">
  <div class="form-group">
    <label for="exampleFormControlInput1">ชื่อ</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $res['name']; ?>">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">ตำแหน่ง</label>
    <input type="text" class="form-control" id="pst" name="pst" value="<?php echo $res['position']; ?>">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">facebook</label>
    <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $res['facebook']; ?>">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">twitter</label>
    <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo $res['twitter']; ?>">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">rss</label>
    <input type="text" class="form-control" id="rss" name="rss" value="<?php echo $res['rss']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">รูป</label>
    <input type="file" class="form-control" id="Picture" name="Picture">
    <label for="pic"><img src="../../images/<?php echo $res['pic_file']; ?>" width="100"></label>
  </div>

  <input hidden type="text" name="id" id="id" value="<?php echo $res['Id']; ?>">
  <input hidden type="text" name="picname" id="picname" value="<?php echo $res['pic_file']; ?>">

  <button class="btn btn-primary" type="submit">เพิ่ม</button>
</form>
