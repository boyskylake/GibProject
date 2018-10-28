<?php 
    session_unset();
    session_start();
    $_SESSION['pages'] = $_SERVER['SCRIPT_NAME'];

    require_once ('../lib/DB.php');
        $db_service=new DB();
        $db=new DB();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../lib/header.php'; ?>
</head>

<body>
    <!-- banner -->
    <div class="banner-1">
        <div class="header agileinfo-header">
            <!-- header -->
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <?php require_once '../lib/navber.php'; ?>
                    <!-- //navbar-collapse -->
                </div>
                <!-- //container-fluid -->
            </nav>
        </div>
        <!-- //header -->

    </div>
    <!-- //banner -->
    <!-- about -->
    <!-- main-textgrids -->
    <div class="main-textgrids">
        <div class="container">
            <div class="w3ls-heading">
                <h2 class="h-two">เกี่ยวกับเรา</h2>
            </div>
            <div class="ab-agile">
                <div class="clearfix"> </div>
            </div>
            <div class="statements">
                <?php 
                    $sql_about="SELECT * FROM `td_about` ORDER BY `Id` DESC";
                    $db_service->query($sql_about);

                    foreach ($db_service->fetch_array() as $value) {

                 ?>
                <div class="col-md-12 mission">
                    <h4><?php echo $value['Topic'] ?></h4>
                    <p><?php echo $value['Description'] ?></p>
                
                </div>
                <?php 
                    }
                 ?>
               
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
  

    <!-- team -->
    <div class="team">
        <div class="container">
            <div class="w3ls-heading">
                <h3 class="h-two">ทีมงาน</h3>
                <!-- <p class="sub two">Morbi in dui pretium, finibus sapien vel.</p> -->
            </div>
            <div class="agileinfo-team-grids">
                <?php 
                    $sql = "SELECT * FROM `td_team` ORDER BY `Id` DESC";
                    $db->query($sql);

                    foreach ($db->fetch_array() as $result) {
                 ?>
                <div class="col-md-3 wthree-team-grid">
                    <img src="../images/<?php echo $result['pic_file']; ?>" alt="">
                    <div class="wthree-team-grid-info">
                        <h4>ชื่อ <?php echo $result['name']; ?></h4>
                        <p>ตำแหน่ง : <?php echo $result['position']; ?></p>
                        <div class="team-social-grids">
                            <ul>
                                <li><a href="<?php echo $result['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo $result['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo $result['rss']; ?>"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
               <?php 
                }
                ?>
                
                <!-- <div class="clearfix"> </div> -->
            </div>
        </div>
    </div>
    <!-- //team -->
    <!-- //about -->
    <!-- bootstrap-pop-up -->
    
    <!-- //bootstrap-pop-up -->
    <!-- footer start here -->
    <?php require_once '../lib/footer.php'; ?>
</body>

</html>