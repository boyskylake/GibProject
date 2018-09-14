<?php
require_once ('lib/DB.php');

    $db=new DB();
    $db2=new DB();

$id_act = $_GET["id_act"];
$strSQL = "SELECT * FROM act_photo WHERE  id_act = '".$_GET["id_act"]."' ";
$db->query($strSQL);
$objResult = $db->fetch_assoc();

    if($objResult)
    {
    echo"<br>&nbsp;** ไม่สามารถลบ กิจกรรมได้้ เนื่องจากยังมีรูปภาพกิจกรรมค้างอยู่ กรุณาเข้าไปลบรูปภาพก่อนครับ  <a href='activity.php?v=photo_act&id_act=$id_act' title='รูปภาพกิจกรรม'>[รูปภาพกิจกรรม]</a>";
    }
    else
    {
    $strSQL = "DELETE FROM activity ";             
    $strSQL .="WHERE id_act = '".$_GET["id_act"]."' ";           
    $db2->query($strSQL);
    echo "<meta http-equiv=refresh content=0;URL=activity.php?v=Index>";
    
    }
?>
