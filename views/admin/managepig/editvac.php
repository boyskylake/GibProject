
  <script language="JavaScript" type="text/javascript">
  function checkma()
  {
    d=document.form1
    if(d.name.value=="")
    {
    alert("กรุณากรอก ชื่อ วัคซีน");
    d.name.focus();
    return false;
    }else if (d.date.value=="") {
      alert("กรุณาเลือกวันที่ซื้อ");
      d.date.focus();
      return false;
    }else if (d.amount.value=="") {
      alert("กรุณากรอก จำนวน");
      d.amount.focus();
      return false;
    }else if (d.price.value=="") {
      alert("กรุณากรอก ราคา");
      d.price.focus();
      return false;
    }
  else
    {
      return true;
    }
  }
</script>

<h3>ซื้อหวัดซีน แก้ไข</h3>
<br>
<?php
  $id = $_GET['id'];
 require_once ('lib/DB.php');

    $db=new DB();

    $sqlvac = "SELECT * FROM `pf_buyvac` WHERE `Id` = '".$id."'";
    $db->query($sqlvac);
    $pig = $db->fetch_assoc();

 ?>

<form id="form1" name="form1" method="POST" action="managepig.php?v=process_editvac" onsubmit="return checkma()">
   <div class="form-group">
    <label for="exampleFormControlInput1">ชื่อ วัคซีน</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $pig['name']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">วันที่ซื้อ</label>
    <input type="date" class="form-control" id="date" name="date" value="<?php echo $pig['date_buy']; ?>">
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">จำนวน</label>
    <input type="number" min="0" class="form-control" id="amount" name="amount" value="<?php echo $pig['amount']; ?>">
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">ราคา (ต่อหน่วย)</label>
    <input type="number" min="0" class="form-control" id="price" name="price" value="<?php echo $pig['price']; ?>">
  </div>

  <input hidden type="text" name="id" id="id" value="<?php echo $pig['Id']; ?>">
  <input hidden type="text" name="idbuy" id="idbuy" value="<?php echo $pig['id_buy']; ?>">
  <button class="btn btn-primary" type="submit">เพิ่ม</button>
</form>
