  <?php														
require_once ('lib/DB.php');

$db = new DB();
$db2 = new DB();

$name_act = $_POST['name_act'];

$strSQL1 = "SELECT * FROM activity where name_act = '".$name_act."' ";
$db->query($strSQL1);

foreach ($db->fetch_array() as $value) {
  $name = $value['name_act'];
}
if (isset($name)) {
  if ($name == $name_act) {

        echo "มีชื่อนี้แล้ว กรุณาใส่ชื่ออื่น";      
        echo "<meta http-equiv=refresh content=3;URL=activity.php?v=data_act_add>";
        exit();
  }
}
  
  else
  {
      $date_in = date("d-m-Y");
      $strSQL = "INSERT INTO activity ";
      $strSQL .="(name_act,date_act,detail_act,id_photo,date_in,status_act) "; 
      $strSQL .="VALUES "; 
      $strSQL .="('".$_POST["name_act"]."','".$_POST["date_act"]."','".$_POST["detail_act"]."','0','$date_in','0')"; 
      $db2->query($strSQL);
    
        echo "<script type='text/javascript'>alert('successfully');";
        echo "window.location = 'activity.php?v=Index'; </script>";
        // echo "<meta http-equiv=refresh content=0;URL=activity.php?v=data_act>";
  }

 ?>