  <link rel="stylesheet" href="activity/css/lightbox.css" type="text/css" media="screen" />
  <script src="activity/js/prototype.js" type="text/javascript"></script>
  <script src="activity/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
  <script src="activity/js/lightbox.js" type="text/javascript"></script>

    <?php
    require_once ('lib/DB.php');

    $db=new DB();
    $db2=new DB();
    $db3=new DB();

    $id_act = $_GET['id_act'];
    $strSQL = "SELECT * FROM activity where id_act=".$id_act." ";
    $db->query($strSQL);
    foreach ($db->fetch_array() as $value) {
      $objResultname_act = $value['name_act'];
      $objResultid_act = $value['id_act'];
    }
    
    ?>

     <h5 align="left"><a href="activity.php?v=photo_add&id_act=<?php echo $objResultid_act;?>" title="photo_add">เพิ่มรูป</a></h5> 
     <h5 align="right"><a href="activity.php?v=photo_add&id_act=<?php echo $objResultid_act;?>" title="photo_add">ลบภาพทั้งหมด</a></h5> 
      <br>

<?php
	 echo"<img src='activity/images/ic_pho.PNG' width='23' height='23' />  <b>".$objResultname_act."</b>";
	 
    $strSQL = "SELECT * FROM act_photo where id_act= '".$id_act."' ORDER BY id_photo ASC ";
    $db2->query($strSQL);
    $objResult = $db2->fetch_assoc();
    if(!$objResult)
	{
	echo "<img src='activity/images/9MNUSsbvD0i.png'  width='32' height='32' /> [<a href='activity.php?v=photo_add&id_act=".$id_act."' title=''>photo_add</a>]";
	}
	else
	{	
    $strSQL3 = "SELECT * FROM `act_photo` WHERE `id_act` = '$id_act' ORDER BY `id_photo` ASC";
    $db3->query($strSQL3);
    echo"<table border=\"0\"  cellspacing=\"1\" cellpadding=\"1\"><tr>";   
    $intRows = 0;
    foreach ($db3->fetch_array() as $objResult)
    {
   $intRows++;
   echo "<td>";                                 
   ?>
    <br>
                <table>
                  <tr>
                    <td>

                      <table>
                      <tr>
                  <a href="activity/myphoto/<?php echo $objResult["name_photo"];?>" rel="lightbox[roadtrip]"><img src="activity/myphoto/<?php echo $objResult["name_photo"];?>" width="163" border="0"/></a>
                      </tr>
                    </table>

                      <table>
                        <tr>
                          <td>
                            <br>
                            <a href="activity.php?v=photo_title_page&id_photo=<?php echo $objResult["id_photo"];?>&id_act=<?php echo $objResult["id_act"];?>" title="">ตั้งภาพนี้เป็นปกอัลบั้ม</a>
                          </td>
                          </tr>
                          <tr>
                          <td>
                            <a href="activity.php?v=photo_del&id_photo=<?php echo $objResult["id_photo"];?>&id_act=<?php echo $objResult["id_act"];?>" onclick="return confirm('ยืนยันการลบข้อมูล')" title="">ลบ</a>
                          </td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>

       <?php
        echo"</td>";
        if(($intRows)%5==0)
       {
        echo"</tr>";
        }
       else
       {
       echo "<td>";
        }  
    }
    echo"</tr></table>";
  }
    ?>
    <br>
    <br>
    <br>

