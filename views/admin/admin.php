<?php 
    // session_unset();
    session_start();
    $_SESSION['pages'] = $_SERVER['SCRIPT_NAME'];
    require_once 'controller/check_login.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'include/header.php'; ?>
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
                    <?php require_once 'include/navber.php'; ?>
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
                <h2 class="h-two">Stagement</h2>
                <!-- <p class="sub two">Morbi in dui pretium, finibus sapien vel.</p> -->
            </div>
            <div class="ab-agile">
                <!-- <div class="col-md-5 ab-pic">
                    <img src="images/ab1.jpg" alt=" " />
                </div> -->
               <!--  <div class="col-md-7 ab-text">
                    <h4>Aenean quis faucibus libero</h4>
                    <p>ข้อมูล</p>
                    <ul class="ab">
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Lorem ipsum dolor sit amet,consectetur adipiscing elit</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Pellentesque eu erat lacus,consectetur adipiscing elit</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Lorem ipsum dolor sit amet,consectetur adipiscing elit</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Lorem ipsum dolor sit amet,consectetur adipiscing elit</a></li>
                    </ul>
                </div> -->
                <div class="clearfix"> </div>
            </div>
            <div class="statements">
                <div class="col-md-12 mission">
                    <h4>หัวข้อ</h4>
                    <p>รายละเอียด</p>
                 <!--    <ul class="ab">
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Lorem ipsum dolor sit amet,consectetur adipiscing elit</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Pellentesque eu erat lacus,consectetur adipiscing elit</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Lorem ipsum dolor sit amet,consectetur adipiscing elit</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Lorem ipsum dolor sit amet,consectetur adipiscing elit</a></li>
                    </ul> -->
                </div>
                <!-- <div class="col-md-5 facts">
                    <img src="images/ab2.jpg" alt=" " />
                </div> -->
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
   
    <!-- footer start here -->
    <?php require_once 'include/footer.php'; ?>
</body>

</html>