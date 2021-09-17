<?php
include("connect/connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once './component/head.php'
    ?>
</head>

<body>
    <div class="preloader">
        <img src="assets/img/logo_stem.png" class="preloader__image" alt="">
    </div><!-- /.preloader -->


    <div class="page-wrapper">
        <?php
        require_once './component/navbar.php';
        ?>

        <?php
        require_once './component/banner.php';
        ?>

        <?php
        require_once 'component/welcome.php';
        ?>

        <?php
        require_once 'component/speaking.php';
        ?>

        <?php
        require_once 'component/student.php';
        ?>

        <?php
        require_once 'component/teacher1.php';
        ?>

        <?php
        require_once 'component/stemproject_yrc.php';
        ?>

        <?php
        require_once 'component/schedule.php';
        ?>

        <?php
        require_once 'component/news.php';
        ?>

        <?php
        require_once 'component/support.php';
        ?>

        <?php
        require_once 'component/survey.php';
        ?>

        <?php
        require_once 'component/footer.php';
        ?>
    </div>

    <!-- back to top -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top" style="background-image: linear-gradient(90deg, rgba(240,135,227,1) 0%, rgba(246,98,134,1) 100%) !important;"><i class="fa fa-angle-up"></i></a>





    <?php
    require_once 'component/script.php';
    ?>
</body>

</html>