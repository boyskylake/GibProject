<?php 
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
                <h2 class="h-two">สรุป ทั้งหมด</h2>
            </div>
            <div class="statements">
                <div class="col-md-12 mission" align="center">
                    <?php 
                        require_once 'general/index.php';
                        require_once 'managepig/index.php';
                        require_once 'account/summary.php';

                     ?>
                </div>
            </div>
        </div>
    </div>
   
    <!-- footer start here -->
    <?php require_once 'include/footer.php'; ?>
</body>

</html>