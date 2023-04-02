<?php
require_once('admin/databases.php');
include 'header.php';
$dept = $_GET['id'];
$query = "SELECT * FROM department WHERE id=$dept";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
?>
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $row['header_image'];?>)">
            </div>
            <div class="page-header-shape-1"><img src="assets/images/shapes/page-header-shape-1.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>Services</li>
                    </ul>
                    <h2><?php echo $row['dname'];?></h2>
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
                            
                            <p class="why-choose-two__text"><?php echo $row['description'];?></p>
                           
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

                    <h2 class="section-title__title">Available Services &amp; Tests</h2>
                </div>
                        <?php
                            if($row['dname'] == 'Oncology'){
                                ?>
                                <div class="row">
                                    <?php 
                                        $squery = "SELECT * FROM services WHERE dept=$dept ORDER BY ord ASC";
                                        $sresult = mysqli_query($connection, $squery);
                                        while($srow = mysqli_fetch_array($sresult)){
                                            ?>
                                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                                <div class="services-one__single">
                                                    <div class="service-one__img d-flex justify-content-center">
                                                        <img src="<?php echo $srow['image'];?>" alt="" class="img-fluid" style="height: 200px; width:250px;">
                                                    </div>
                                                    <div class="service-one__content">
                                                        <!-- <div class="services-one__icon">
                                                            <span class="icon-shield"></span>
                                                        </div> -->
                                                        <h2 class="service-one__title"><a href="cancer-detail.php?id=<?php echo $srow['sid'];?>"><?php echo $srow['sname'];?></a></h2>
                                                        <p class="service-one__text text-justify"><?php echo $srow['short_des'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        
                                    ?>
                                </div>
                            <?php
                        }
                        ?>
                        <?php
                            if($row['dname'] !== 'Oncology'){
                                ?>
                                <div class="row">
                                    <?php 
                                        $squery = "SELECT * FROM services WHERE dept=$dept ORDER BY ord ASC";
                                        $sresult = mysqli_query($connection, $squery);
                                        while($srow = mysqli_fetch_array($sresult)){
                                            ?>
                                            <div class="col-md-4">
                                                <div class="feature-four__single">
                                                    <div class="feature-four__single-top">
                                                        <div class="feature-four__icon">
                                                            <!-- <span class="icon-computer"></span> -->
                                                            <img src="<?php echo $srow['image'];?>" class="img-fluid rounded-top" alt="">
                                                        </div>
                                                        <h4 class="feature-four__title"><a href="test-info.php?id=<?php echo $srow['sid'];?>">
                                                            <?php echo $srow['sname'];?>
                                                        </a></h4>
                                                    </div>
                                                <p class="feature-four__text"><?php echo $srow['short_des'];?></p>

                                                </div>
                                            </div>
                                            <?php
                                        }
                                        
                                    ?>
                                </div>
                            <?php
                        }
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