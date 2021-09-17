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
                    <h3>การประกวดการแสดงเชิงสะเต็มศึกษา<br>(STEM Showcase)</h3>
                    <div class="block-title__line"></div>
                </div><!-- /.block-title-two -->

            </div><!-- /.container -->
        </section><!-- /.portfolio-two -->

        <div class="container">
            <div class="row">

            <div class="col-xl-4 col-lg-8 col-md-4 col-12">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">เกณฑ์การแข่งขัน</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">ตรวจสอบรายชื่อ ม.ต้น</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">ตรวจสอบรายชื่อ ม.ปลาย</a>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <object data="requirements/stem_showcase.pdf" type="application/pdf" style="min-height:100vh;width:100%"></object>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <object data="requirements/stem_showcase_name1.pdf" type="application/pdf" style="min-height:100vh;width:100%"></object>
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <object data="requirements/stem_showcase_name2.pdf" type="application/pdf" style="min-height:100vh;width:100%"></object>
                    </div>
              
                </div>
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

