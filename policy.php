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
                    <p>#นโยบาย</p>
                    <h3>เว็บไซต์</h3>
                </div><!-- /.block-title-two -->

            </div><!-- /.container -->
        </section><!-- /.portfolio-two -->

        <div class="container">
            <div class="row">


                <?php 
                    $sql_file = "SELECT * FROM news WHERE n_id = 7";
                    $query_file = mysqli_query($conn,$sql_file);
                    $fetch = mysqli_fetch_array($query_file);
                ?>

                 <div class="col-xl-12 col-lg-3 col-md-6 col-sm-12 mb-4">
                   
                        
                      
                            <p><?php echo $fetch['n_detail']; ?></p>
                        
                           
                      
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

