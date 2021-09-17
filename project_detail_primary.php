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
                $sql = "SELECT * FROM stem_project_primary WHERE s_id = '$refcode'";
                $query = mysqli_query($conn,$sql);
                $fetch = mysqli_fetch_array($query);
            }
        ?>

        
    

        <div class="videoWrapper">
            <!-- Copy & Pasted from YouTube -->
            <iframe width="560" height="349" src="<?php echo $fetch['f_clip2']; ?>?autoplay=1" frameborder="0" allowfullscreen allow="autoplay"></iframe>
        </div>

        <div class="container mt-5">
        
            <div class="row">
                   

                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12 mb-4">
                
                        
                    <img class="card-img-top" src="yrcadmin/yrcstem2021/public_storage/poster/<?php echo $fetch['s_poster']; ?>" alt="Card image cap">
                       
                        
                          
                       
         
                </div>

                <div class="col-xl-8 mt-5">
                    <h3 class="card-title f-pink"><?php echo $fetch['s_name_project']; ?></h3>
                    <small class="mt-0">โรงเรียน<?php echo $fetch['s_school']; ?></small>
                    <hr/>
                    <h6 class="font-bold">สมาชิกกลุ่ม</h6>
                    <p>
                    <?php 
                        echo $fetch['s_name1']; 
                        if($fetch['s_name2'] == '' || $fetch['s_name2'] == '-' ){

                        }else{
                            echo '<br/>';
                            echo $fetch['s_name2']; 
                        }
                        if($fetch['s_name3'] == '' || $fetch['s_name2'] == '-' ){

                        }else{
                            echo '<br/>';
                            echo $fetch['s_name3']; 
                        }
                    ?>
                    </p>

                    <h6 class="font-bold">ครูที่ปรึกษา</h6>
                    <p>
                    <?php 
                        echo $fetch['s_teacher1'];
                        if($fetch['s_teacher2'] == '' || $fetch['s_teacher2'] == '-'){

                        }else{
                            echo '<br/>';
                            echo $fetch['s_teacher2'];
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