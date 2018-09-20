
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
    $db3=new DB();

    $sqlpig = "SELECT * FROM `pf_pig` WHERE `Id` = '".$id."'";
    $db2->query($sqlpig);
    $res = $db2->fetch_assoc();

    $sql = "SELECT * FROM `pf_stall`";
    $db->query($sql);

    $sqltype = "SELECT * FROM `pf_typepig`";
    $db3->query($sqltype);

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
          if($res['id_stall'] == $stall['Id_sl']){
              echo $stall['Id_sl'].'" selected';
          }else{
              echo $stall['Id_sl'].'"';
          }
        echo '>'.$stall['name_sl'].'</option>';
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
    <select class="form-control" name="typepig" id="typepig">
      <option value="">ระบุ</option>
    <?php
      while ($typepig = $db3->fetch_assoc()){
        echo '<option value="';
          if($res['id_typepig'] == $typepig['Id_tp']){
              echo $typepig['Id_tp'].'" selected';
          }else{
              echo $typepig['Id_tp'].'"';
          }
        echo '>'.$typepig['name_tp'].'</option>';
      }
    ?>
    </select>
  </div>

  <input hidden type="text" id="id" name="id" value="<?php echo $res['Id']; ?>">
  <button class="btn btn-primary" type="submit">เพิ่ม</button>
</form>
