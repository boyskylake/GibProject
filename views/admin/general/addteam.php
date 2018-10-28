
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
    else if (d.pic.value=="") {
       alert("กรุณากรอก เพิ่มรูป");
    d.pic.focus();
    return false;
    }
   
  else
    {
      return true;
    }
  }
</script>

<h3>เพิ่มบุคลากร</h3>
<br>

<form id="form1" name="form1" method="POST" action="general.php?v=process_addteam" enctype="multipart/form-data" onsubmit="return checkma()">
  <div class="form-group">
    <label for="exampleFormControlInput1">ชื่อ</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">ตำแหน่ง</label>
    <input type="text" class="form-control" id="pst" name="pst">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">facebook</label>
    <span class="input-group-text"> เช่น https://facebook.com/users/</span>
    <input type="link" class="form-control" id="facebook" name="facebook">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">twitter</label>
    <span class="input-group-text"> เช่น https://twitter.com/users/</span>

    <input type="text" class="form-control" id="twitter" name="twitter">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">rss</label>
    <span class="input-group-text"> เช่น https://rss.com/users/</span>
    
    <input type="text" class="form-control" id="rss" name="rss">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">รูป</label>
    <input type="file" class="form-control" id="Picture" name="Picture">
  </div>


  <button class="btn btn-primary" type="submit">เพิ่ม</button>
</form>
