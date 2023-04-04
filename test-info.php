<?php
require_once('admin/databases.php');
include 'header.php';
$dept = $_GET['id'];
$query = "SELECT * FROM services WHERE sid=$dept";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
?>
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(<?php echo $row['image'];?>)">
    </div>
    <div class="page-header-shape-1"><img src="assets/images/shapes/page-header-shape-1.png" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li><span>/</span></li>
                <li><a href="services.php?id=<?php echo $row['dept'];?>">Services</a></li>
                <li><span>/</span></li>
                <li>Tests</li>
            </ul>
            <h2><?php echo $row['sname'];?></h2>
        </div>
    </div>
</section>
<!--Page Header End-->
<section class="why-choose-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="why-choose-two__left">
                    <div class="section-title text-left">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">Diagnostics</p>
                            <div class="section-title-shape-1">
                                <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">High accuracy diagnostics</h2>
                    </div>
                    <p class="why-choose-two__text">Asperia Healthcare Ltd started with a clear mission, to provide
                        world class diagnosis and consultancy with high accuracy on time at an affordable cost. Besides
                        super specialized molecular lab and histopathology, Asperia Healthcare Ltd provides complete
                        range of general diagnostic services including pathology, radiology and imaging. Asperia general
                        diagnostic centre helps facilitate the provision of timely, affordable and state-of-art
                        diagnostic care in a safe and secure environment.</p>
                    <br>
                    <p class="why-choose-two__text">At Asperia general diagnostic centre, we understand the importance
                        of high quality and reliable diagnostic findings for superior clinical outcomes. We equipped
                        with instruments and devices of highest technical standards and managed by the most skilled
                        Pathologists and Radiologists thereby meeting the needs of the physicians and patients. To
                        achieve consistent safety and quality, we comply with the most stringent quality and ethical
                        norms. We continuously expand our value-added services to better serve patients with dignity,
                        respect and compassion.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Why Choose Two Start-->

<section class="feature-four">
    <div class="container">
        <div class="feature-four__bottom">
            <div class="row">

                <div class="col-xl-12 col-lg-12">

                    <div class="feature-four__single">

                        <h4><?php echo $row['sname'];?></h4>
                        <br>
                        <p><?php echo $row['des'];?></p>
                        <br>
                        <h5>Available tests:</h5>
                        <br>
                        <div class="row">

                            <div class="col-xl-4 col-lg-4">
                                <ul class="list-unstyled feature-four__points">
                                    <?php 
                                $s=$row['sid'];
                                $tquery = "SELECT * FROM tests WHERE servicehead=$s ORDER BY testid ASC";
                                $tresult = mysqli_query($connection, $tquery);
                                while($srow = mysqli_fetch_array($tresult)){
                                ?>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><?php echo $srow['tname'];?></p>
                                        </div>
                                    </li>

                                    <?php
                                }
                                        
                        ?>



                                </ul>
                            </div>
                        </div> <!-- list row ends -->
                    </div>
                </div>

            </div>



        </div>
    </div>

    </div>
    </div>

    </div>

</section>
<!--Why Choose Two End-->
<!--FAQ One Start-->

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