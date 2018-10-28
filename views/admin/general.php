<?php 
    session_start();
    $_SESSION['pages'] = $_SERVER['SCRIPT_NAME'];

    require_once 'controller/check_login.php';

    require_once ('lib/control_gen.php');
    require_once ('lib/DB.php');
    
    $db = new DB();

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
            <!-- BALANCE -->
        <div style="margin-top: 20px; margin-right: 40px; text-align: right" class="pull-right">
        
        
        </br></br>
            
        </div>
        <!-- END BALANCE -->
        </div>
        <!-- //header -->
    </div>
    <!-- //banner -->
        <div class="container" style="margin-top: 25px">
            <div class="row">
                <!-- Menu -->
                <div class="col-md-3">
                    <?php Control::viewMenu(); ?>
                </div>
                <!-- Content -->
                <div class="col-md-9">
                    <?php 
                    if (isset($_GET['v'])) {
                        Control::content($_GET['v']);
                    }
                    else{
                    Control::content($_GET['v'] = 'Index'); 
                    }
                    ?>
                </div>
            </div>
        </div>
    <!-- footer start here -->
    <?php require_once 'include/footer.php'; ?>
</body>

</html>