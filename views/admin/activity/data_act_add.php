
  <script language="JavaScript" type="text/javascript">
  function checkma()
  {
    d=document.form1
    if(d.date_act.value=="")
    {
    alert("กรุณากรอก เวลากิจกรรม");
    d.date_act.focus();
    return false;
    }
    else if (d.name_act.value=="") {
       alert("กรุณากรอก ชื่อกิจกรรม");
      d.name_act.focus();
      return false;
    }
  else
    return true;
  }
</script>

                 <div class="container">
                 <form id="form1" name="form1" method="post" action="activity.php?v=data_act_save" enctype="multipart/form-data" class="needs-validation" onsubmit="return checkma()">
                    <div class="form-row">
                      <div class="col-sm-2"></div>
                      <div class="col-sm-7 sm-5">
                        <label for="validationCustom01">ชื่อกิจกรรม</label>
                        <input type="text" class="form-control" name="name_act" >
                        <br>
                        <div class="col-sm-4 sm-3">
                        <label for="validationCustom02">เวลากิจกรรม</label>
                        <input type="date" class="form-control" name="date_act" id="date_act">
                       
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <label for="validationCustomUsername">รายละเอียด</label>
                          <textarea rows="5" type="text" class="form-control" name="detail_act"></textarea>
                          <br>
                          <button class="btn btn-primary" type="submit">เพิ่ม</button>
                          <button class="btn btn-primary" type="reset">ยกเลิก</button>
                        </div>
                      </div>
                    </div>

                  </form> 
                  <br>  
