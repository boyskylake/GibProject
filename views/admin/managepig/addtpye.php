
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

<h3>เพิ่มคอกหูม</h3>
<br>

<form id="form1" name="form1" method="POST" action="managepig.php?v=process_addtype" onsubmit="return checkma()">
  <div class="form-group">
    <label for="exampleFormControlInput1">ชนิดสุกร</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <button class="btn btn-primary" type="submit">เพิ่ม</button>
</form>
