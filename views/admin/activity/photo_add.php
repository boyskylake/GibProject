<script language="javascript">
  function fncCreateElement(){
    
     var mySpan = document.getElementById('mySpan');
    
    var myElement1 = document.createElement('input');
    myElement1.setAttribute('type',"file");
    myElement1.setAttribute('name',"filUpload[]");
    myElement1.setAttribute('size',"40");
    mySpan.appendChild(myElement1);    

     var myElement2 = document.createElement('<br>');
     mySpan.appendChild(myElement2);
  }
</script>

         <form id="form1" name="form1" method="post" action="activity.php?v=photo_save" enctype="multipart/form-data" onsubmit="return checkma()">
           
           <img src="images/photo.PNG" width="19" height="16" /> <span class="style21"> ADD</span>
           <br><br>
           <table width="70%"   border="0" cellpadding="1" cellspacing="0">
             <tr>
               <td>
              <table>
                   <tr>
                     <td>&nbsp;</td>
                     <td>
     <?php
         require_once ('lib/DB.php');

        $db=new DB();
        $db2=new DB();

       $id_act = $_GET['id_act'];
       $strSQL = "SELECT * FROM activity where id_act = ".$id_act." ";
       $db->query($strSQL);
       $objResult = $db->fetch_assoc();
       echo $objResult['name_act'];
     ?>
     <br>
  <input type="hidden" value="<?php echo $objResult['id_act'];?>" name="id_act" id="id_act" />
  <br>
                      </td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><input name="filUpload[]" type="file"  size="40" />
                                <input name="btnButton" id="btnButton" type="button" value="+" onclick="JavaScript:fncCreateElement();"/>	
                              <br><span id="mySpan"></span></td>
                            </tr>
                            <tr>
                              <td width="2%">&nbsp;</td>
                              <td width="98%">
                                <input name="submit" type="submit" id="submit" value="OK"/>
                              </td>
                            </tr>
                          </table>
                       </td>
                      </tr>
                    </table>
                    </form>


