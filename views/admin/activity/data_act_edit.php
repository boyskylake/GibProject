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
  
else
  return true;
  }
</script>

<?php
require_once ('lib/DB.php');
$db=new DB();  

$strSQL = "SELECT * FROM activity WHERE id_act = '".$_GET["id_act"]."' "; 
$db->query($strSQL);
$objResult = $db->fetch_assoc();
if(!$objResult) 
{    
echo "Not found"; 
} 
else
{ 
?>
                <div class="container">
                 <form id="form1" name="form1" method="post" enctype="multipart/form-data" class="needs-validation" action="activity.php?v=data_act_edit_save&id_act=<?php echo $objResult["id_act"];?>" onsubmit="return checkma()" >
                    <div class="form-row">
                      <div class="col-sm-2"></div>
                      <div class="col-sm-7 sm-5">
                        <label for="validationCustom01">ชื่อกิจกรรม</label>
                        <input type="text" class="form-control" name="name_act" value="<?php echo $objResult["name_act"];?>" >
                        
                        <br>
                        <div class="col-sm-4 sm-3">
                        <label for="validationCustom02">เวลากิจกรรม</label>
                        <script language="JavaScript" src="popcalendar.js" type="text/javascript"></script>
                        <input id="timer" readonly="true" type="text" class="form-control" name="date_act" value="<?php echo $objResult["date_act"];?> ">
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <label for="validationCustomUsername">รายละเอียด</label>
                          <textarea rows="5" type="text" class="form-control" name="detail_act"  value=""><?php echo $objResult["detail_act"];?></textarea>
                          <br>
                          <button class="btn btn-primary" type="submit">เพิ่ม</button>
                          <button class="btn btn-primary" type="reset">ยกเลิก</button>
                        </div>
                      </div>
                    </div>

                  </form>
<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<?php 
}
 ?>