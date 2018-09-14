
  <script language="JavaScript" type="text/javascript">
  function checkma()
  {
    d=document.form1
    if(d.name.value=="")
    {
    alert("กรุณากรอก หัวข้อ");
    d.name.focus();
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

    $sql = "SELECT * FROM `pf_stall` WHERE `Id` = '".$id."'";
    $db->query($sql);
    $res = $db->fetch_assoc();


 ?>

<form id="form1" name="form1" method="POST" action="managepig.php?v=process_editstall" onsubmit="return checkma()">
  <div class="form-group">
    <label for="exampleFormControlInput1">ชื่อคอก</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $res['name']; ?>">
  </div>
  
  <input hidden type="text" name="id" id="id" value="<?php echo $res['Id']; ?>">
  <button class="btn btn-primary" type="submit">เพิ่ม</button>
</form>
