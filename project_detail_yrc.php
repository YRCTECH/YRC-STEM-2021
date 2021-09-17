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
        if (isset($_GET['refcode'])) {
            $refcode = filter_input(INPUT_GET, 'refcode', FILTER_SANITIZE_STRING);
            $sql = "SELECT * FROM project WHERE p_id = '$refcode'";
            $query = mysqli_query($conn, $sql);
            $total = mysqli_num_rows($query);
            $fetch = mysqli_fetch_array($query);
        } else {
            header("location:index.php");
        }
        ?>

        <?php
        $sql_file = "SELECT * FROM file WHERE f_id_team = '$fetch[p_id]'";
        $query_file = mysqli_query($conn, $sql_file);
        $fetch_flie = mysqli_fetch_array($query_file);
        ?>



        <<div class="container-fluid wow slideInDown" data-wow-delay="0.5s" style="margin-top:50px">
            <div class="embed-responsive embed-responsive-21by9 ">
                <iframe class="embed-responsive-item radius-banner" src="<?php echo $fetch_flie['f_clip2']; ?>?autoplay=1" allowfullscreen></iframe>
            </div>
    </div>

    <!--div class="videoWrapper">
            <iframe width="560" height="349" src="<?php echo $fetch_flie['f_clip2']; ?>?autoplay=1" frameborder="0" allowfullscreen allow="autoplay"></iframe>
        <div-->

    <div class="container mt-3">

        <div class="row">


            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">


                <img class="card-img-top" src="yrcadmin/yrcstem2021/poster/<?php echo $fetch_flie['f_poster']; ?>" alt="Card image cap">





            </div>

            <div class="col-xl-8 col-lg-6 col-md-6 mt-5">
                <h3 class="card-title f-pink"><?php echo $fetch['p_nameth']; ?></h3>
                <small class="mt-0"><?php echo $fetch['p_nameen']; ?></small>
                <hr />
                <h6 class="font-bold">สมาชิกกลุ่ม</h6>
                <p>
                    <?php
                    echo $fetch['p_fname1'];
                    echo $fetch['p_name1'];
                    echo '&nbsp;';
                    echo $fetch['p_surname1'];
                    if ($fetch['p_name2'] == '') {
                    } else {
                        echo '<br/>';
                        echo $fetch['p_fname2'];
                        echo $fetch['p_name2'];
                        echo '&nbsp;';
                        echo $fetch['p_surname2'];
                    }
                    if ($fetch['p_name3'] == '') {
                    } else {
                        echo '<br/>';
                        echo $fetch['p_fname3'];
                        echo $fetch['p_name3'];
                        echo '&nbsp;';
                        echo $fetch['p_surname3'];
                    }
                    ?>
                </p>

                <h6 class="font-bold">ครูที่ปรึกษา</h6>
                <p>
                    <?php
                    echo $fetch['p_fname_t'];
                    echo $fetch['p_name_t'];
                    echo '&nbsp;';
                    echo $fetch['p_sname_t'];

                    ?>
                </p>
            </div>






        </div>
    </div>


    </div->

    <?php
    require_once 'component/footer.php';
    ?>

    </!--div>

    <!-- back to top -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top" style="background-image: linear-gradient(90deg, rgba(240,135,227,1) 0%, rgba(246,98,134,1) 100%) !important;"><i class="fa fa-angle-up"></i></a>





    <?php
    require_once 'component/script.php';
    ?>
</body>

</html>