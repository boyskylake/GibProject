
  <script language="JavaScript" type="text/javascript">
  function checkma()
  {
    d=document.form1
    if(d.vac.value=="")
    {
    alert("กรุณากรอก ชื่อ วัคซีน");
    d.vac.focus();
    return false;
    }else if (d.date.value=="") {
      alert("กรุณาเลือกวันที่ ฉีด");
      d.date.focus();
      return false;
    }
  else
    {
      return true;
    }
  }
</script>
<?php
 require_once ('lib/DB.php');

    $db=new DB();
    $db2=new DB();

    $sql = "SELECT * FROM `pf_pig` WHERE `Id` = '".$_GET['id']."'";
    $db->query($sql);
    $res = $db->fetch_assoc();

    $sqlvac = "SELECT * FROM `pf_buyvac` WHERE `status` = 'มี'";
    $db2->query($sqlvac);

 ?>

<h3>ฉีดหวัดซีน สุกรที่ <?php echo $res['No']; ?></h3>
<br>


<form id="form1" name="form1" method="POST" action="managepig.php?v=process_vacsppig" onsubmit="return checkma()">
  <div class="form-group">
    <label for="exampleFormControlInput1">เลขที่สุกร</label>
    <input readonly type="text" class="form-control" id="name" name="name" value="<?php echo $res['No']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">หวัดซีน</label>
    <!-- <input type="date" class="form-control" id="date" name="date"> -->
    <select class="form-control" name="vac" id="vac">
      <option value="">ระบุ</option>
      <?php
       while ($vac = $db2->fetch_assoc()){
       ?>
       <option value="<?php echo $vac['Id']; ?>"><?php echo $vac['name']; ?></option>
       <?php
       } 
       ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">วันที่ฉีด</label>
    <input type="date" class="form-control" id="date" name="date">
  </div>
<input hidden type="text" name="id" id="id" value="<?php echo $res['Id']; ?>">

  <button class="btn btn-primary" type="submit">ฉีด</button>
</form>
