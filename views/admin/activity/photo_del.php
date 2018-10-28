
                <?php
                require_once ('lib/DB.php');

                $db=new DB();

                $id_photo=$_GET['id_photo'];
                $id_act=$_GET['id_act'];
                $sql="select * from act_photo where id_photo='$id_photo' ";
                $db->query($sql);
                while ($r = $db->fetch_assoc())  {
                      $name_photo = $r['name_photo'];
                if (file_exists("activity/myphoto/$name_photo")) {
                    unlink("activity/myphoto/$name_photo");
                  }
                }
                $sql="delete from act_photo where id_photo='$id_photo' ";
                $db->query($sql);
                    echo "DELELTE success";
                    echo"<meta http-equiv='refresh' content='0;URL=activity.php?v=photo_act&id_act=$id_act'>";

                ?>