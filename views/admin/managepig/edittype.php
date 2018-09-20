
  <script language="JavaScript" type="text/javascript">
  function checkma()
  {
    d=document.form1
    if(d.name.value=="")
    {
    alert("กรุณากรอก ชนิดสุกร");
    d.name.focus();
    return false;
    }
  else
    {
      return true;
    }
  }
</script>

<h3>แก้ไข ชนิดสุกร</h3>
<br>
<?php 
  $id = $_GET['id'];
  require_once ('lib/DB.php');

    $db=new DB();

    $sql = "SELECT * FROM `pf_typepig` WHERE `Id_tp` = '".$id."'";
    $db->query($sql);
    $res = $db->fetch_assoc();


 ?>

<form id="form1" name="form1" method="POST" action="managepig.php?v=process_edittype" onsubmit="return checkma()">
  <div class="form-group">
    <label for="exampleFormControlInput1">ชนิดสุกร</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $res['name_tp']; ?>">
  </div>
  
  <input hidden type="text" name="id" id="id" value="<?php echo $res['Id_tp']; ?>">
  <button class="btn btn-primary" type="submit">เพิ่ม</button>
</form>
