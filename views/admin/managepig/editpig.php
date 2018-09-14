
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
  $id = $_GET['id'];
 require_once ('lib/DB.php');

    $db=new DB();
    $db2=new DB();

    $sqlpig = "SELECT * FROM `pf_pig` WHERE `Id` = '".$id."'";
    $db2->query($sqlpig);
    $res = $db2->fetch_assoc();

    $sql = "SELECT * FROM `pf_stall`";
    $db->query($sql);

 ?>

<form id="form1" name="form1" method="POST" action="managepig.php?v=process_editpig" onsubmit="return checkma()">
  <div class="form-group">
    <label for="exampleFormControlInput1">เลขที่หมู</label>
    <input type="text" class="form-control" id="No" name="No" value="<?php echo $res['No']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">เลือกคอก</label>
    <select class="form-control" name="stall" id="stall">
      <option value="">ระบุ</option>
    <?php
      while ($stall = $db->fetch_assoc()){
        echo '<option value="';
          if($res['id_stall'] == $stall['Id']){
              echo $stall['Id'].'" selected';
          }else{
              echo $stall['Id'].'"';
          }
        echo '>'.$stall['name'].'</option>';
      }
    ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">วันที่เกิด</label>
    <input type="date" class="form-control" id="date" name="date" value="<?php echo $res['bdate']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">ชนิดหมู</label>
    <input type="text" class="form-control" id="typepig" name="typepig" value="<?php echo $res['typepig']; ?>">
  </div>

  <input hidden type="text" id="id" name="id" value="<?php echo $res['Id']; ?>">
  <button class="btn btn-primary" type="submit">เพิ่ม</button>
</form>
