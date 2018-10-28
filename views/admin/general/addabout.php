
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

<h3>เพิ่มข้อมูลเกี่ยวกับเรา</h3>
<br>

<form id="form1" name="form1" method="POST" action="general.php?v=process_addabout" onsubmit="return checkma()">
  <div class="form-group">
    <label for="exampleFormControlInput1">หัวข้อ</label>
    <input type="text" class="form-control" id="topic" name="topic">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">รายละเอียด</label>
    <textarea class="form-control" rows="6" name="des" id="des"></textarea>
  </div>
  <button class="btn btn-primary" type="submit">เพิ่ม</button>
</form>
