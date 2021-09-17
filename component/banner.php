<?php
$sql_status = "SELECT * FROM setting ORDER BY s_id ASC";
$query_status = mysqli_query($conn, $sql_status);
$fetch_setting = mysqli_fetch_array($query_status);
?>
<?php
if ($fetch_setting['s_banner'] === 'open') {
?>
    <!-- <div class="container-fluid wow slideInDown" data-wow-delay="0.5s" style="margin-top:70px" >

        <div class="embed-responsive embed-responsive-21by9 mt-5 ">
            <iframe class="embed-responsive-item radius-banner" src="<?php echo $fetch_setting['s_link']; ?>?autoplay=1&modestbranding=1&rel=0&controls=0" allowfullscreen></iframe>
        </div>
    </div> -->
    <style>
        iframe {
            border-radius: 15px !important;
        }
    </style>
    <div class="container-fluid wow slideInDown " data-wow-delay="0.5s" style="margin-top:70px">
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v12.0&appId=2907292946154070&autoLogAppEvents=1" nonce="6DRkBGS6"></script>

        <div class="">
            <div class="fb-video embed-responsive-item" data-href="https://www.facebook.com/TPchannelFan/videos/381831303545978" data-show-text="false">
                <blockquote cite="https://www.facebook.com/TPchannelFan/videos/381831303545978/" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/TPchannelFan/videos/381831303545978/"></a>
                    <p>[LIVE] ติดตาม การ #ประชุม ร่วมกันของรัฐสภา ครั้งที่ 7 (สมัยสามัญประจำปีครั้งที่หนึ่ง) โดยจะเป็นการพิจารณา
                        &quot;ร่าง พ.ร.บ.ส่งเสริมการใช้ประโยชน์ผลงานวิจัยและนวัตกรรม พ.ศ. ....&quot; ต่อจากการประชุมครั้งก่อน
                        จากนั้นจะเป็นการพิจารณา 2 เรื่องด่วน &quot;ร่าง พ.ร.บ.การศึกษาแห่งชาติ พ.ศ. ....&quot; และ &quot;ร่าง
                        พ.ร.บ.ส่งเสริมการเรียนรู้ พ.ศ. ....&quot;
                        ถ่ายทอดสดทาง
                        - #โทรทัศน์รัฐสภา #ช่อง10 #วิทยุรัฐสภา
                        - Facebook Live : #วิทยุและโทรทัศน์รัฐสภา
                        - YouTube และ Application : TPchannel
                        - Website : tpchannel.org</p>โพสต์โดย <a href="https://www.facebook.com/TPchannelFan/">วิทยุและโทรทัศน์รัฐสภา</a> เมื่อ วันพฤหัสบดีที่ 16 กันยายน
                    2021
                </blockquote>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="container-fluid wow slideInDown " data-wow-delay="0.5s" style="margin-top:70px">
        <img src="./assets/img/banner.svg" class="img-fluid radius-banner" alt="">
    </div>

<?php } ?>