<?php
require_once ('lib/DB.php');

$db=new DB();

$strSQL = "UPDATE activity SET "; 
$strSQL .="name_act = '".$_POST["name_act"]."',date_act = '".$_POST["date_act"]."',detail_act = '".$_POST["detail_act"]."' "; 
$strSQL .="WHERE id_act = '".$_GET["id_act"]."' "; 
$db->query($strSQL);

  echo "<meta http-equiv=refresh content=0;URL=activity.php?v=Index>";

?> 
