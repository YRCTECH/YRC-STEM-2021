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
            if(isset($_GET['news_ref'])){
                $news_ref = filter_input(INPUT_GET, 'news_ref' , FILTER_SANITIZE_STRING);
                $sql = "SELECT * FROM news WHERE n_id = '$news_ref'";
                $query = mysqli_query($conn,$sql);
                $fetch = mysqli_fetch_array($query);
            }
        ?>

        
    

        <div class="container mt-5">
        
            <div class="row">
                   

                <div class="col-xl-12">
                
                        
                    <h3 class="f-pink text-center mt-5">เรื่อง : <?php echo $fetch['n_name']; ?></h3>
                    <p class="mt-3 text-center" style="font-weight: 600;">วันที่ <?php echo $fetch['n_date']; ?></p>
                    <hr/>
                    <p><?php echo $fetch['n_name']; ?></p>

                    <?php
                        if($fetch['n_document'] == ''){
                    ?>
                    <?php }else{ ?>
                        <object data="yrcadmin/yrcstem2021/public_storage/doc/<?php echo $fetch['n_document']; ?>" type="application/pdf" style="min-height:100vh;width:100%"></object>
                    <?php } ?>
                       
                        
                          
                       
         
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