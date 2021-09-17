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

       
        <?php
            if(isset($_GET['project_subject'])){
                $subject = filter_input(INPUT_GET, 'project_subject' , FILTER_SANITIZE_STRING);
                $sql = "SELECT * FROM project WHERE p_subject = '$subject'";
                $query = mysqli_query($conn,$sql);
                $total = mysqli_num_rows($query);
            }else{
                header("location:index.php");
            }
        ?>
        
    

        <section class="mt-5 pt-5 mb-1">
             <div class="container">
                <div class="block-title-two text-center block-title-two__home-five">
                    <p>#โครงงานสะเต็มศึกษา ยุพราชวิทยาลัย</p>
                    <h3>สาขา <?php echo $subject; ?></h3>
                </div><!-- /.block-title-two -->

            </div><!-- /.container -->
        </section><!-- /.portfolio-two -->

        <div class="container">
            <div class="row">
                <?php 
                    while($fetch = mysqli_fetch_array($query)){
                ?>

                <?php 
                    $sql_file = "SELECT * FROM file WHERE f_id_team = '$fetch[p_id]'";
                    $query_file = mysqli_query($conn,$sql_file);
                ?>

                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <?php 
                            while($fetch_flie = mysqli_fetch_array($query_file)){
                        ?>
                        <img class="card-img-top" src="yrcadmin/yrcstem2021/poster/<?php echo $fetch_flie['f_poster']; ?>" alt="Card image cap">
                        <?php } ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $fetch['p_nameth']; ?><br><small><?php echo $fetch['p_nameen']; ?></small></h5>
                        
                            <a href="project_detail_yrc.php?refcode=<?php echo $fetch['p_id']; ?>" class="btn btn-project w-50"><i class="fas fa-door-open"></i> เข้าชม</a>
                        </div>
                    </div>
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