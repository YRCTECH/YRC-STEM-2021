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
                    <p>#กิจกรรมการแข่งขัน(ครู)</p>
                    <h3>การนำเสนอผลงานทางวิชาการและ<br>ประสบการณ์การจัดการเรียนรู้</h3>
                </div><!-- /.block-title-two -->

            </div><!-- /.container -->
        </section><!-- /.portfolio-two -->

        <div class="container">
            <div class="row">

                <?php
                    $sql = "SELECT * FROM teacher_project ORDER BY t_type";
                    $query = mysqli_query($conn,$sql);
                    while($fetch = mysqli_fetch_array($query)){
                ?>
                    <div class="col-xl-12 col-lg-6 col-md-6">
                    <a href="project_detail_teacher.php?refcode=<?php echo $fetch['t_id']; ?>">
                        <div class="card">
                          <img class="card-img-top" src="holder.js/100px180/" alt="">
                          <div class="card-body">
                            <h5 class="card-title f-gradient"><i class="fas fa-chalkboard-teacher"></i> <?php echo $fetch['t_name_project']; ?></h5>
                            <p class="card-text"><i class="fas fa-school"></i> โรงเรียน<?php echo $fetch['t_school'] ?> (<?php echo $fetch['t_type'] ?>)</p>
                          </div>
                        </div>
                    </a>
                    </div>

                        

                <?php } ?>

                    

              
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

