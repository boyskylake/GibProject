<h3>
  <a href="activity.php?v=data_act_add"><button type="button" class="btn btn-primary">เพิ่มบริการ</button></a>
</h3><br>
<?php 
  require_once ('lib/DB.php');

    $db=new DB();
    $db2=new DB();


                    $sql = "SELECT * FROM `activity` ORDER BY `activity`.`id_act` DESC";
                    $db->query($sql);
                    $numrow = $db->num_rows();

                        if($numrow > 0)
                        {

                    ?>
                    <table class="table">
                        <thead>
                          <tr>
                            <th >ที่</th>
                            <th >หัวเรื่อง</th>
                            <th >วันที่</th>
                            <th >ภาพปก</th>
                            <th >เพิ่มรูปภาพ</th>
                            <th >อนุญาติ</th>
                            <th >แก้ไข</th>
                            <th >ลบ</th>
                          </tr>
                        </thead>
                        <?php 
                            $i = 1;
                             foreach ($db->fetch_array() as $result)
                              {
                                $id_act=$result['id_act'];
                                $name_act=$result['name_act'];
                                $date_act=$result['date_act'];
                                $detail_act=$result['detail_act'];
                                $id_photo=$result['id_photo'];
                                $status_act=$result['status_act'];
                         ?>
                          <tbody>
                          <tr>
                            <td><?php echo $i ?></td>
                                  <td><?php echo $name_act; ?></td>
                                  <td><?php echo $date_act; ?></td>
                                  <td><?php
                                    $strSQL = "SELECT * FROM act_photo where id_photo='$id_photo' ";
                                    $db2->query($strSQL);
                                    $f1 = $db2->fetch_assoc();
                                        $photo = $f1['name_photo'];
                                      
                                     ?>
                                     <img src="activity/myphoto/<?php echo $photo; ?>" width="150" height="150" border="0" /></td>
                                  <td><a href="activity.php?v=photo_act&id_act=<?php echo $id_act?>" title="เพิ่มรูปภาพข่าวประชาสัมพันธ์"><button type="button" class="btn btn-secondary">เพิ่มรูปภาพ</button></a></td>
                                  <td><?php
                                    if($status_act=='1')
                                    {
                                    echo"<form id='form1' name='form1' method='post' action='activity.php?v=data_status&id_act=$id_act&status_act=$status_act'><input type='submit' name='submit' value='อนุญาติแล้ว' class='btn btn-success' /></form>";
                                    }
                                    else
                                    {
                                    echo"<form id='form1' name='form1' method='post' action='activity.php?v=data_status&id_act=$id_act&status_act=$status_act'><input type='submit' name='submit' value='อนุญาติ' class='btn btn-primary' /></form>";
                                    }
                                    ?></td>
                                  <td><a href="activity.php?v=data_act_edit&id_act=<?php echo $id_act?>" title="" ><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
                                  <td><a href="activity.php?v=data_act_del&id_act=<?php echo $id_act?>" onclick="return confirm('คุณแน่ใจหรือไม่ที่จะลบข้อมูลข่าวประชาสัมพันธ์นี้  ++ ยืนยันการลบโดยเจ้าหน้าที่ ++ ')"><button type="button" class="btn btn-danger">ลบ</button></a></td>
                          </tr>
                          <?php
                          $i++;
                            } 
                           ?>
                          </tbody>
                    </table>
                    <?php 
                        }
                     ?>