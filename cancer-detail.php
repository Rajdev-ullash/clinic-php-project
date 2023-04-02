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

            <!--Why Choose Two Start-->
        <section class="why-choose-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="why-choose-two__left">
                           
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--Why Choose Two End-->
    <!--FAQ One Start-->
        <section class="faq-one">
            <div class="container">
                <div class="section-title text-center">

                    <h2 class="section-title__title">Available Details</h2>
                </div>
               
                    
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="feature-four__single">
                                <div class="feature-four__single-top">
                                    <div class="feature-four__icon">
                                        <!-- <span class="icon-computer"></span> -->
                                    </div>
                                    <h4 class="feature-four__title"><?php echo $row['sname'];?></h4>
                                </div>
                                <p class="feature-four__text mt-2" style="text-align:justify;"><?php echo $row['des'];?></p>

                            </div>
                        </div>
                    </div>
                        
                        


                    
            
              
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