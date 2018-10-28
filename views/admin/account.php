<?php 
    session_start();
    $_SESSION['pages'] = $_SERVER['SCRIPT_NAME'];
    require_once 'controller/check_login.php';

    require_once ('lib/Control.php');
    require_once ('lib/DB.php');
    require_once ('lib/Account.php');

    $AC=new Account();
    $db1=new DB();
    $db2=new DB();
    $db3=new DB();
    $db4=new DB();

    $sql = "SELECT SUM(r_money) AS TotalR FROM recieve";
    $db1->query($sql);
    $R_balance=$db1->fetch_array();
    
    $today = date("Y-m-d");
    $sql .= " WHERE date = '$today'";
    $db3->query($sql);
    $today_recieve = $db3->fetch_array();

    $sql = "SELECT SUM(b_money) AS TotalB FROM buy";
    $db2->query($sql);
    $B_balance=$db2->fetch_array();

    $sql .= " WHERE date = '$today'";
    $db4->query($sql);
    $today_buy = $db4->fetch_array();
    
    $balance=(int)($R_balance[0]['TotalR'])-(int)($B_balance[0]['TotalB']);

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
        
            <?php if($balance >= 0){ ?>
            <span class="label label-success" style="font-size: 30px;">
                คงเหลือ <?php echo $AC->putComma($balance).".-"; ?> บาท
            </span>
            <?php }else{ ?>
            <span class="label label-danger">
                คงเหลือ <?php echo $AC->putComma($balance).".-"; ?> บาท
            </span>
            <?php } ?>
        </br></br>
            <span class="label" style="font-size: 20px">
                <?php 
                    echo Account::convertDay($today)." ";
                    echo date("d")." ";
                    echo Account::convertShortMonth($today)." ";
                    echo substr((date("Y")+543), -2); 
                ?>
                &nbsp;|
                <span class="label label-primary">
                    <span class="glyphicon glyphicon-plus-sign"></span> 
                    &nbsp;<?php echo $today_recieve[0]['TotalR']; ?>.-
                </span>
                &nbsp;|
                <span class="label label-danger">
                    <span class="glyphicon glyphicon-minus-sign"></span>
                    &nbsp;<?php echo $today_buy[0]['TotalB']; ?>.-
                </span>
            </span>
        </div>
        <!-- END BALANCE -->
        </div>
        <!-- //header -->
    </div>
    <!-- //banner -->
    <!-- about -->
    <!-- main-textgrids -->
    <!-- <div class="main-textgrids"> -->
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
                    }else{
                        
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