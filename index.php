<style>
@media (min-width: 768px) {

    .seven-cols .col-md-1x,
    .seven-cols .col-sm-1x,
    .seven-cols .col-lg-1x {
        width: 100%;
        *width: 100%;
    }
}

@media (min-width: 992px) {

    .seven-cols .col-md-1x,
    .seven-cols .col-sm-1x,
    .seven-cols .col-lg-1x {
        width: 14.285714285714285714285714285714%;
        *width: 14.285714285714285714285714285714%;
    }
}

/**
 *  The following is not really needed in this case
 *  Only to demonstrate the usage of @media for large screens
 */
@media (min-width: 1200px) {

    .seven-cols .col-md-1x,
    .seven-cols .col-sm-1x,
    .seven-cols .col-lg-1x {
        width: 14.285714285714285714285714285714%;
        *width: 14.285714285714285714285714285714%;
    }
}

.seven-cols {
    margin-left: 5%;
    text-align: center;
}
</style>
<?php
require_once('admin/databases.php');
include 'header.php';
?>
<!--Main Slider Start-->
<section class="main-slider clearfix">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/slider1.jpg);"></div>
                <!-- /.image-layer -->

                <div class="main-slider-shape-1 float-bob-x">
                    <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h2 class="main-slider__title">First Oncology Solution & <br> Chemotherapy Daycare <br>
                                    in
                                    <span>Chattogram.</span>
                                </h2>

                                <div class="main-slider__btn-box">
                                    <a href="#" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/slider2.jpg);"></div>
                <!-- /.image-layer -->

                <div class="main-slider-shape-1 float-bob-x">
                    <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h2 class="main-slider__title">Super Specialty <br> Laboratory <br> for High Accuracy
                                    <span>Diagnosis.</span>
                                </h2>

                                <div class="main-slider__btn-box">
                                    <a href="about.html" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-right-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow1"></i>
            </div>
        </div>

    </div>
</section>
<!--Main Slider End-->

<!--Feature Three Start-->
<section class="feature-three">
    <div class="feature-three-shape float-bob-x">
        <img src="assets/images/shapes/feature-three-shape.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <!--Feature Three Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                <div class="feature-three__single">
                    <div class="feature-three__icon">
                        <img src="assets/images/features/lab.png">
                    </div>
                    <div class="feature-three__content">
                        <h3 class="feature-three__title">Specialized Cancer management<br></h3>
                    </div>
                </div>
            </div>
            <!--Feature Three Single End-->
            <!--Feature Three Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="200ms">
                <div class="feature-three__single">
                    <div class="feature-three__icon">
                        <img src="assets/images/features/micro.png">
                    </div>
                    <div class="feature-three__content">
                        <h3 class="feature-three__title">High accuracy diagnostics</h3>
                    </div>
                </div>
            </div>
            <!--Feature Three Single End-->
            <!--Feature Three Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="300ms">
                <div class="feature-three__single">
                    <div class="feature-three__icon">
                        <img src="assets/images/features/doctor.png">
                    </div>
                    <div class="feature-three__content">
                        <h3 class="feature-three__title">Specialist consultants</h3>
                    </div>
                </div>
            </div>
            <!--Feature Three Single End-->
        </div>
    </div>
</section>
<!--Feature Three End-->


<!--Services One Start-->
<section class="services-one">
    <div class="services-one__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="services-one__top-left">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">First time in Chattogram</p>
                                <div class="section-title-shape-1">
                                    <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Super Speciality Services</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="services-one__top-right">
                        <p class="services-one__top-text">High accuracy diagnosis, consultation and diseases management
                            powered by state of the art molecular lab and histopathology center.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Insurance Page Two Start-->
    <section class="insurance-page-two">
        <div class="container">
            <div class="row">
                <!--Services Two Single Start-->
                <?php
                            
                            $query = "SELECT * FROM department ORDER BY ord ASC";
                            $select_result = mysqli_query($connection, $query);
                            while($row = mysqli_fetch_array($select_result)){
                    ?>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="service-one__img d-flex justify-content-center">
                            <img src="<?php echo $row['image'];?>" alt="" class="img-fluid"
                                style="height: 120px; width:110px;">
                        </div>
                        <div class="service-one__content">
                            <!-- <div class="services-one__icon">
                                        <span class="icon-shield"></span>
                                    </div> -->
                            <h2 class="service-one__title"><a
                                    href="services.php?id=<?php echo $row['id'];?>"><?php echo $row['dname'];?></a></h2>
                            <p class="service-one__text text-justify"><?php echo $row['short_des'];?></p>
                        </div>
                    </div>
                </div>
                <!--Services Two Single End-->
                <?php
                    }
                    ?>
            </div>
        </div>
    </section>
    <!--Insurance Page Two End-->
</section>
<!--Services One End-->

<!--About One Start-->
<section class="about-one pt">
    <div class="about-one-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
        style="background-image: url(assets/images/backgrounds/about-one-bg.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="about-one__left">
                    <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-one__img">
                            <img src="assets/images/services/chemo.jpg" alt="">
                        </div>
                        <div class="about-one__img-two">
                            <img src="assets/images/resources/about-one-img-2.jpg" alt="">
                        </div>

                        <div class="about-one__shape-1">
                            <img src="assets/images/shapes/about-one-shape-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="about-one__right">
                    <div class="section-title text-left">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">Specialized Oncology Services</p>
                            <div class="section-title-shape-1">
                                <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">World class cancer diagnosis &amp; management in Chattogram
                        </h2>
                    </div>
                    <p class="about-one__text-2">Asperia healthcare ltd has introduced most advance cancer screening and
                        management in Chattogram. Our oncology center provides comprehensive and super specialized,
                        modern diagnostic services, treatment, and care for cancer.</p>

                    <ul class="list-unstyled about-one__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>High accuracy investigation in molecular &amp; histopathology lab</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Devoted team of specialist doctors and nurses.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Affordable day care packages</p>
                            </div>
                        </li>
                    </ul>

                    <div class="about-one__btn-call">
                        <div class="about-one__btn-box">
                            <a href="about.html" class="thm-btn about-one__btn">Discover More</a>
                        </div>
                        <div class="about-one__call">
                            <div class="about-one__call-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="about-one__call-content">
                                <a href="tel:9200368090">+01987818181</a>
                                <p>Call to Our Experts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->

<section class="why-choose-two">
    <div class="container">
        <div class="services-three__single">
            <div class="section-title text-left">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">Services</p>
                    <div class="section-title-shape-1">
                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                    </div>
                    <div class="section-title-shape-2">
                        <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Our Services</h2>
            </div>
        </div>
        <div class="row seven-cols">
            <?php
                            
                $query = "SELECT * FROM const_dept ORDER BY id ASC";
                $select_result = mysqli_query($connection, $query);
                while($row = mysqli_fetch_array($select_result)){
                ?>
            <!--Services Three Single Start-->
            <div class="col-md-1x">
                <img src="<?php echo $row["cons_image"]?>" alt="" style="width:40px;">
                <p><a href="cons_dept-detail.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a></p>
            </div>

            <!--Services Three Single End-->
            <?php
            }
            ?>
        </div>
    </div>
</section>

<!--Services Three Start-->
<section class="services-three pt">
    <div class="container">
        <div class="services-three__inner">
            <div class="services-three-shape-1">
                <img src="assets/images/shapes/services-three-shape-1.png" alt="">
            </div>
            <div class="row">
                <!--Services Three Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-three__single">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">Promotion</p>
                                <div class="section-title-shape-1">
                                    <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Convenient healthcare packages for all</h2>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <?php
                            
                            $query = "SELECT * FROM package where status = 'Active' ORDER BY ord ASC LIMIT 5";
                            $select_result = mysqli_query($connection, $query);
                            while($row = mysqli_fetch_array($select_result)){
                            ?>
                <!--Services Three Single Start-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-three__single">
                        <div class="services-three__img">
                            <img src="admin/<?php echo $row["image"]?>" alt="" style="height:270px">
                            <div class="services-three__content">
                                <h3 class="services-three__title"><a
                                        href="package-detail.php?id=<?php echo $row["id"]?>"><?php echo $row["category"]?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <?php
                        }
                        ?>
                <!--Services Three Single Start-->
                <div class="col-xl-6 col-lg-7 col-md-9 wow fadeInUp" data-wow-delay="700ms">
                    <div class="services-three__single">
                        <div class="services-three__get-quote">
                            <p class="services-three__get-quote-sub-title">Lorem ipsum text</p>
                            <h3 class="services-three__get-quote-title">Choose from more of our packages or get a
                                customized corporate package ...</h3>
                            <a href="insurance-01.html" class="thm-btn services-three__get-quote-btn">More
                                packages</a>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
            </div>
        </div>
    </div>
</section>
<!--Services Three End-->

<!--Counter One Start-->
<Section class="counter-one">
    <div class="counter-one-shape-1 float-bob-y">
        <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
    </div>
    <div class="counter-one-shape-2 float-bob-y">
        <img src="assets/images/shapes/counter-one-shape-2.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <!--Counter One Single Start-->
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="counter-one__single">
                    <div class="counter-one__top">
                        <div class="counter-one__icon">
                            <span class="icon-insurance-1"></span>
                        </div>
                        <div class="counter-one__count-box">
                            <div class="counter-one__count-box-inner">
                                <h3 class="odometer" data-count="12.6">00</h3>
                                <span class="counter-one__plus">k</span>
                            </div>
                        </div>
                    </div>
                    <p class="counter-one__text">Took our services</p>
                </div>
            </div>
            <!--Counter One Single End-->
            <!--Counter One Single Start-->
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="counter-one__single">
                    <div class="counter-one__top">
                        <div class="counter-one__icon">
                            <span class="icon-group"></span>
                        </div>
                        <div class="counter-one__count-box">
                            <div class="counter-one__count-box-inner">
                                <h3 class="odometer" data-count="59">00</h3>
                                <span class="counter-one__plus">+</span>
                            </div>
                        </div>
                    </div>
                    <p class="counter-one__text">Specialist Doctors</p>
                </div>
            </div>
            <!--Counter One Single End-->
            <!--Counter One Single Start-->
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="counter-one__single">
                    <div class="counter-one__top">
                        <div class="counter-one__icon">
                            <span class="icon-life-insurance"></span>
                        </div>
                        <div class="counter-one__count-box">
                            <div class="counter-one__count-box-inner">
                                <h3 class="odometer" data-count="2.8">00</h3>
                                <span class="counter-one__plus">k</span>
                            </div>
                        </div>
                    </div>
                    <p class="counter-one__text">Satisfied customers</p>
                </div>
            </div>
            <!--Counter One Single End-->
            <!--Counter One Single Start-->
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="counter-one__single">
                    <div class="counter-one__top">
                        <div class="counter-one__icon">
                            <span class="icon-success"></span>
                        </div>
                        <div class="counter-one__count-box">
                            <div class="counter-one__count-box-inner">
                                <h3 class="odometer" data-count="99">00</h3>
                                <span class="counter-one__plus">%</span>
                            </div>
                        </div>
                    </div>
                    <p class="counter-one__text">Our success rate</p>
                </div>
            </div>
            <!--Counter One Single End-->
        </div>
    </div>
</Section>
<!--Counter One End-->

<!--Team One Start-->
<section class="team-one">
    <div class="team-one__shape-1 float-bob-y">
        <img src="assets/images/shapes/team-one-shape-1.png" alt="">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <div class="section-sub-title-box">
                <p class="section-sub-title">Doctors</p>
                <div class="section-title-shape-1">
                    <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                </div>
                <div class="section-title-shape-2">
                    <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                </div>
            </div>
            <h2 class="section-title__title">Meet our specialist <br> doctors</h2>
        </div>
        <div class="row">
            <!--Team One Single Start-->
            <?php
                            
                            $dcquery = "SELECT * FROM doctor WHERE status='Homepage'";
                            $dcresult = mysqli_query($connection, $dcquery);
                            while($dcrow = mysqli_fetch_array($dcresult)){
                            ?>
            <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                <div class="team-one__single">
                    <!-- <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="admin/" alt="">
                                </div>
                               
                            </div> -->
                    <div class="team-one__content">
                        <h3 class="team-one__name"><a
                                href="doctor-profile.php?id=<?php echo $dcrow['id'] ?>"><?php echo $dcrow['name'] ?></a>
                        </h3>
                        <p class="team-one__sub-title"><?php echo $dcrow['details'] ?></p>

                    </div>
                </div>
            </div>
            <!--Team One Single End-->
            <?php
                    }
                    ?>

        </div>

    </div>
</section>
<!--Team One End-->


<!--News One Start-->
<?php
                            
            $dcquery = "SELECT * FROM news WHERE is_home_page=1";
            $dcresult = mysqli_query($connection, $dcquery);
                            //check length of dcresult is > 0
            if(mysqli_num_rows($dcresult) > 0){
                                
        ?>
<section class="news-one">
    <div class="container">
        <?php
                            
                            $dcquery = "SELECT * FROM news WHERE is_home_page=1";
                            $dcresult = mysqli_query($connection, $dcquery);
                            //check length of dcresult is > 0
                            if(mysqli_num_rows($dcresult) > 0){
                                
                            ?>
        <div class="section-title text-center">
            <div class="section-sub-title-box">
                <p class="section-sub-title">recent news feed</p>
                <div class="section-title-shape-1">
                    <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                </div>
                <div class="section-title-shape-2">
                    <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                </div>
            </div>
            <h2 class="section-title__title">Latest news & articles <br> from the blog</h2>
        </div>

        <?php
                            
                                    }
                            ?>
        <div class="row">
            <!--News One Single Start-->
            <?php
                            
                            $dcquery = "SELECT * FROM news WHERE is_home_page=1";
                            $dcresult = mysqli_query($connection, $dcquery);
                            //check length of dcresult is > 0
                            if(mysqli_num_rows($dcresult) > 0){
                                while($dcrow = mysqli_fetch_array($dcresult)){
                            ?>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="./<?php echo $dcrow['image'] ?> " alt="">
                        <!-- <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div> -->
                        <div class="news-one__arrow-box">
                            <a href="news-details.php?id=<?php echo $dcrow['id'] ?>" class="news-one__arrow">
                                <span class="icon-right-arrow1"></span>
                            </a>
                        </div>
                    </div>
                    <div class="news-one__content">
                        <!-- <ul class="list-unstyled news-one__meta">
                                    <li><a href="news-details.html"><i class="far fa-calendar"></i> 15 March, 2022 </a>
                                    </li>
                                    <li><a href="news-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul> -->
                        <h3 class="news-one__title"><a
                                href="news-details.php?id=<?php echo $dcrow['id'] ?>"><?php echo $dcrow['title'] ?></a>
                        </h3>
                        <p class="news-one__text"><?php echo $dcrow['short_description'] ?></p>
                        <div class="news-one__read-more">
                            <a href="news-details.php?id=<?php echo $dcrow['id'] ?>">Read More <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                    }
                            }
                    ?>


        </div>
    </div>
</section>

<?php
                            
            }
        ?>
<!--News One End-->

<!--Tracking Start-->
<section class="tracking">
    <div class="container">
        <div class="tracking__inner">
            <div class="tracking-shape-1 float-bob-y">
                <img src="assets/images/shapes/tracking-shape-1.png" alt="">
            </div>
            <div class="tracking-shape-2 float-bob-x">
                <img src="assets/images/shapes/tracking-shape-2.png" alt="">
            </div>
            <div class="tracking-shape-3 float-bob-x">
                <img src="assets/images/shapes/tracking-shape-3.png" alt="">
            </div>
            <div class="tracking-shape-4 float-bob-y">
                <img src="assets/images/shapes/tracking-shape-4.png" alt="">
            </div>
            <div class="tracking__left">
                <div class="tracking__icon">
                    <span class="icon-folder"></span>
                </div>
                <div class="tracking__content">
                    <p class="tracking__sub-title">Looking for a doctor</p>
                    <h3 class="tracking__title">Choose from the best in Chattogram</h3>
                </div>
            </div>
            <div class="tracking__btn-box">
                <a href="about.html" class="thm-btn tracking__btn">Start now</a>
            </div>
        </div>
    </div>
</section>
<!--Tracking End-->
<?php
include 'footer.php';
?>