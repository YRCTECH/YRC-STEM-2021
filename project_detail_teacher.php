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
            if(isset($_GET['refcode'])){
                $refcode = filter_input(INPUT_GET, 'refcode' , FILTER_SANITIZE_STRING);
                $sql = "SELECT * FROM teacher_project WHERE t_id = '$refcode'";
                $query = mysqli_query($conn,$sql);
                $fetch = mysqli_fetch_array($query);
            }
        ?>

        
    

       

        <div class="container mt-5">
        
            <div class="row">
                <div class="col-xl-12 mt-5 text-center">
                    <h3 class="f-pink text-center mt-5"><?php echo $fetch['t_name_project']; ?></h3>
                    <p class="mt-3 text-center" style="font-weight: 600;">โรงเรียน<?php echo $fetch['t_school']; ?> (<?php echo $fetch['t_type']; ?>)</p>
                    <div class="block-title__line"></div>
                </div>
                   

                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12 mb-4">
                
                        
                    <img class="card-img-top" src="yrcadmin/yrcstem2021/public_storage/teacher/poster/<?php echo $fetch['t_poster']; ?>" alt="Card image cap">
                       
                        
                          
                       
         
                </div>

                <div class="col-xl-8 mt-5">
                    
                    <h6 class="font-bold">สมาชิก</h6>
                    <p>
                    <?php 
                        echo $fetch['t_name1']; 
                        if($fetch['t_name2'] == '' || $fetch['t_name2'] == '-' ){

                        }else{
                            echo '<br/>';
                            echo $fetch['t_name2']; 
                        }
                        if($fetch['t_name3'] == '' || $fetch['t_name3'] == '-' ){

                        }else{
                            echo '<br/>';
                            echo $fetch['t_name3']; 
                        }
                    ?>
                    </p>

                    
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