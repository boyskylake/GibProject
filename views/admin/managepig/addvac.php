
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

<h3>ซื้อหวัดซีน</h3>
<br>


<form id="form1" name="form1" method="POST" action="managepig.php?v=process_addvac" onsubmit="return checkma()">
  <div class="form-group">
    <label for="exampleFormControlInput1">ชื่อ วัคซีน</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">วันที่ซื้อ</label>
    <input type="date" class="form-control" id="date" name="date">
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">จำนวน</label>
    <input type="number" min="0" class="form-control" id="amount" name="amount">
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">ราคา (ต่อหน่วย)</label>
    <input type="number" min="0" class="form-control" id="price" name="price">
  </div>

  <button class="btn btn-primary" type="submit">เพิ่ม</button>
</form>
