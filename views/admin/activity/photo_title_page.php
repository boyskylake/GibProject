
  <?php
 require_once ('lib/DB.php');

	$db=new DB();

$strSQL = "UPDATE `activity` SET `id_photo`= '".$_GET["id_photo"]."' WHERE `id_act` = '".$_GET["id_act"]."' ";
// $strSQL = "UPDATE activity SET "; 
// $strSQL .="id_photo = '".$_GET["id_photo"]."' "; 
// $strSQL .="WHERE id_act = '".$_GET["id_act"]."' "; 

$db->query($strSQL);

echo "<meta http-equiv=refresh content=2;URL=activity.php?v=Index>";
	

?>
        