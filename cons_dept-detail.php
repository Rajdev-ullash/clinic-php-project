<style>
.feature-four_singlex {
    position: relative;
    display: block;
    background-color: var(--insur-white);
    border-radius: var(--insur-bdr-radius);
    padding: 20px 20px 20px;
    margin-bottom: 30px;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}

.right-arrow {
    color: red !important;
    margin-left: auto;
    margin-right: 0;
}

.right-arrow h3 {
    color: #999999 !important;
}
</style>
<?php
require_once('admin/databases.php');
include 'header.php';
$dept = $_GET['id'];
$query = "SELECT * FROM const_dept WHERE id=$dept";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
$cons_dept_id = $row['id'];
?>
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(<?php echo $row['cons_image'];?>)">
    </div>
    <div class="page-header-shape-1"><img src="assets/images/shapes/page-header-shape-1.png" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li><span>/</span></li>
                <li>Services</li>
            </ul>
            <h2><?php echo $row['title'];?></h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Why Choose Two Start-->
<section class="why-choose-two">
    <div class="container">
        <div class="section-title text-center">

            <h2 class="section-title__title">ABOUT</h2>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="why-choose-two__left">

                    <p class="why-choose-two__text"><?php echo $row['description'];?></p>

                </div>
            </div>

        </div>
    </div>
</section>
<section class="why-choose-two">
    <div class="container">
        <div class="section-title text-center">

            <h2 class="section-title__title">CONSULTATION & APPOINTMENT</h2>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="why-choose-two__left">

                    <p class="why-choose-two__text"><?php echo $row['const_des'];?></p>

                </div>
            </div>

        </div>
    </div>
</section>
<!--Why Choose Two End-->
<!--Team One Start-->
<section class="team-one">
    <div class="team-one__shape-1 float-bob-y">
        <img src="assets/images/shapes/team-one-shape-1.png" alt="">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <div class="section-sub-title-box">
                <p class="section-sub-title">Related Doctors</p>
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
                            
                            $dcquery = "SELECT * FROM doctor WHERE cons_dept_id='$cons_dept_id'";
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
<!--FAQ One Start-->
<section class="">
    <div class="container">
        <div class="section-title text-center">

            <h2 class="section-title__title">Related Tests</h2>
        </div>

        <?php
                           

                                ?>
        <section class="feature-four">
            <div class="container">
                <div class="feature-four__bottom">
                    <div class="row">
                        <?php 
                                        $squery = "SELECT * FROM tests WHERE const_dept_id='$cons_dept_id'";
                                        $sresult = mysqli_query($connection, $squery);
                                        while($srow = mysqli_fetch_array($sresult)){
                                            ?>

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="feature-four_singlex">
                                <div class="feature-four__single-top">
                                    <h4 class="feature-four__title">
                                        <?php echo $srow['tname'];?>
                                    </h4>
                                    <span class="right-arrow">
                                        <h3>
                                            >
                                        </h3>
                                    </span>
                                </div>


                            </div>
                        </div>
                        <?php
                                        }
                                        
                                    ?>
                    </div>
                </div>
            </div>
        </section>


        <?php
                        
                        ?>







    </div>
</section>
<!--FAQ One End-->

<!--CTA One Start-->
<section class="cta-one cta-three">
    <div class="container">
        <div class="cta-one__content">
            <div class="cta-one__inner">
                <div class="cta-one__left">
                    <h3 class="cta-one__title">For more information please call</h3>
                </div>
                <div class="cta-one__right">
                    <div class="cta-one__call">
                        <div class="cta-one__call-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="cta-one__call-number">
                            <a href="tel:9200368090">+92 (003) 68-090</a>
                            <p>Appointment Hotline</p>
                        </div>
                    </div>
                    <div class="cta-one__btn-box">
                        <a href="contact.html" class="thm-btn cta-one__btn">CONTACT</a>
                    </div>
                </div>
                <div class="cta-one__img">
                    <img src="assets/images/resources/cta-one-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->
<br>
<?php
include 'footer.php';
?>