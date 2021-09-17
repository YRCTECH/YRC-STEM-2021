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


    <div class="page-wrapper">
        <?php 
            require_once './component/navbar.php'; 
        ?>

    
        
    

        <section class="mt-5 pt-5 mb-1">
             <div class="container">
                <div class="block-title-two text-center block-title-two__home-five">
                    <p>#กิจกรรมการแข่งขัน(นักเรียน)</p>
                    <h3>การประกวดโครงงานสะเต็มศึกษา <br>ระดับ มัธยมศึกษาตอนปลาย</h3>
                </div><!-- /.block-title-two -->

            </div><!-- /.container -->
        </section><!-- /.portfolio-two -->

        <div class="container">
            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <a href="stem_project_poster.php"><img src="assets/img/poster.png" class="w-100 img-fluid"></a>
           
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <a href="stem_project_oral.php"><img src="assets/img/oral.png" class="w-100 img-fluid"></a>
           
                </div>

                    

              
            </div>
        </div>



           
       

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

