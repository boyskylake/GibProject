<?php
require_once ('lib/DB.php');
$db=new DB();  

  if($_GET['status_act'] == '1')
  {
        $strSQL = "UPDATE activity SET "; 
        $strSQL .="status_act = '0' "; 
        $strSQL .="WHERE id_act = '".$_GET["id_act"]."' "; 
        $db->query($strSQL);
        
        echo "<meta http-equiv=refresh content=0;URL=activity.php?v=Index>";
        die();
  }
  else
  {
        $strSQL = "UPDATE activity SET "; 
        $strSQL .="status_act = '1' "; 
        $strSQL .="WHERE id_act = '".$_GET["id_act"]."' "; 
        $db->query($strSQL);
        
        echo "<meta http-equiv=refresh content=0;URL=activity.php?v=Index>";
  }
?>