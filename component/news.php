<section class="blog-one">
    <div class="container-fluid">
        <div class="blog-one__left">
            <div class="block-title text-left">
                <p class="wow fadeInLeft"><span>#สะเต็มขอบอก</span></p>
                <h3 class="wow fadeInLeft">ประกาศ ข่าวสาร<br>ของงาน</h3>
                <div class="block-title__line"></div><!-- /.block-title__line -->
            </div><!-- /.block-title -->
            <p class=" wow fadeInLeft" data-wow-delay="0.2s">
                ติดตามข่าวสารของงาน The 1<sup>st</sup> National Basic <br />STEM Innovation E-FORUM 2021
                ตลอดระยะเวลาการจัดงานวันที่ 18-19 กันยายน 2564 ได้ที่นี่น้าาาา
            </p>
            <div class="blog-one__carousel-btn__wrap">
                <a href="#" class="blog-one__carousel-btn-left wow fadeInLeft" data-wow-delay="0.4s"><i class="fa fa-angle-double-left"></i></a>
                <a href="#" class="blog-one__carousel-btn-right wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-angle-double-right"></i></a>
            </div><!-- /.blog-one__carousel-btn__wrap -->
        </div><!-- /.blog-one__left -->
        <div class="blog-one__right">
            <div class="blog-one__carousel owl-carousel owl-theme thm__owl-carousel" data-carousel-prev-btn=".blog-one__carousel-btn-left" data-carousel-next-btn=".blog-one__carousel-btn-right" data-options='{"margin": 30, "stagePadding": 0, "items": 3, "smartSpeed": 700, "autoplay": true, "autoplayTimeout": 7000, "nav": false, "dots": false, "responsive": { "0": { "items": 1 }, "991": { "items": 2 }, "1200": { "items": 3 } }}'>
                <?php
                $i = 1;
                $sql_news = "SELECT * FROM news WHERE n_id != 7";
                $query_news = mysqli_query($conn, $sql_news);
                while ($fetch_news = mysqli_fetch_array($query_news)) {
                ?>
                    <div class="item 
                <?php
                    if ($i <= 3) {
                        echo "wow fadeInLeft";
                    }else{
                        echo "";
                    }
                ?>" >
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <?php
                                if ($fetch_news['n_ref'] == '1') {
                                    echo '<img class="img-fluid" src="assets/img/news1.jpg">';
                                } else if ($fetch_news['n_ref'] == '2') {
                                    echo '<img class="img-fluid" src="assets/img/news2.jpg">';
                                } else if ($fetch_news['n_ref'] == '3') {
                                    echo '<img class="img-fluid" src="assets/img/news3.jpg">';
                                } else if ($fetch_news['n_ref'] == '4') {
                                    echo '<img class="img-fluid" src="assets/img/news4.jpg">';
                                } else {
                                    echo 'OUT';
                                }
                                ?>

                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content">

                                <h3 class="mt-4">
                                    <a href="#">
                                        <?php echo $fetch_news['n_name']; ?>
                                    </a>

                                </h3>
                                <p align="left" class="mt-3"><i class="fas fa-calendar-day"></i>
                                    <?php echo $fetch_news['n_date']; ?></p>
                                <a href="news_detail.php?news_ref=<?php echo $fetch_news['n_id']; ?>" class="thm-btn blog-one__btn mt-3">อ่านต่อ
                                    <i class="fa fa-angle-double-right"></i>
                                </a><!-- /.thm-btn -->

                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.item -->
                <?php
                    $i++;
                } ?>

            </div><!-- /.blog-one__carousel owl-carousel owl-theme thm__owl-carousel -->
        </div><!-- /.blog-one__right -->
    </div><!-- /.container-fluid -->
</section><!-- /.blog-one -->