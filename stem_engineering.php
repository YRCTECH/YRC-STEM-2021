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
                <div class="block-title-two text-center block-title-two__home-five mb-5">
                    <p>#กิจกรรมการแข่งขัน(นักเรียน)</p>
                    <h3>การออกแบบและสร้างแบบจำลองสามมิติตามกระบวนการทางวิศวกรรม</h3>
                    <div class="block-title__line"></div>
                </div><!-- /.block-title-two -->

            </div><!-- /.container -->
        </section><!-- /.portfolio-two -->

        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 col-12">
                    <h5><i class="far fa-clipboard"></i> เกณฑ์การแข่งขัน</h5>
                    <hr/>
                    <object data="requirements/stem_engineering.pdf" type="application/pdf" style="min-height:100vh;width:100%"></object>
                </div>

                <div class="col-xl-8 col-lg-7 col-md-6 col-12">
                    <h5 class="f-pink"><i class="fas fa-search"></i> ตรวจสอบรายชื่อ</h5>
                    <hr/>
                    
                    <object data="requirements/stem_name_engineering.pdf" type="application/pdf" style="min-height:100vh;width:100%"></object>
                    
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

