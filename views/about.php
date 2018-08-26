<?php 
    session_unset();
    session_start();
    $_SESSION['pages'] = $_SERVER['SCRIPT_NAME'];
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
    <!-- //main-textgrids -->
    <!-- different -->
    <!-- <div class="different">
        <div class="container">

            <div class="w3l-heading">
                <h3 class="w3ls_head">Why We are Different</h3>
            </div>

            <div class="w3agile-different-info">
                <p>Cras vehicula massa id ipsum venenatis, non convallis libero pellentesque. Sed tristique massa et mattis mattis. Nunc euismod consequat ex, eu tincidunt justo malesuada vitae. Sed auctor diam quis nulla hendrerit porta. Quisque venenatis,
                    tortor quis tristique congue, lorem lectus elementum augue, in laoreet lorem justo lacinia velit. Phasellus tempus luctus velit, eu fermentum arcu porttitor sit amet. Suspendisse id efficitur sem. Donec laoreet ante at facilisis dictum.
                    Donec sodales porta orci sed porta. Vivamus est enim, pharetra sit amet placerat ut, eleifend quis purus. Sed elementum tortor erat, placerat rutrum augue facilisis vel. Morbi feugiat tortor erat, nec gravida mauris egestas tincidunt.
                    Sed vitae dignissim sapien.</p>
                <div class="w3agile-button">
                    <a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- //different -->
    <!-- team -->
    <div class="team">
        <div class="container">
            <div class="w3ls-heading">
                <h3 class="h-two">ทีมงาน</h3>
                <!-- <p class="sub two">Morbi in dui pretium, finibus sapien vel.</p> -->
            </div>
            <div class="agileinfo-team-grids">
                <div class="col-md-3 wthree-team-grid">
                    <img src="../images/user.png" alt="">
                    <div class="wthree-team-grid-info">
                        <h4>ชื่อ</h4>
                        <p>หน้าที่</p>
                        <div class="team-social-grids">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wthree-team-grid">
                    <img src="../images/user.png" alt="">
                    <div class="wthree-team-grid-info">
                        <h4>ชื่อ</h4>
                        <p>หน้าที่</p>
                        <div class="team-social-grids">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wthree-team-grid">
                    <img src="../images/user.png" alt="">
                    <div class="wthree-team-grid-info">
                        <h4>ชื่อ</h4>
                        <p>หน้าที่</p>
                        <div class="team-social-grids">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wthree-team-grid">
                    <img src="../images/user.png" alt="">
                    <div class="wthree-team-grid-info">
                         <h4>ชื่อ</h4>
                        <p>หน้าที่</p>
                        <div class="team-social-grids">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
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