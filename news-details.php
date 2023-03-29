<?php
require_once('admin/databases.php');
include 'header.php';
$news_id = $_GET['id'];
$query = "SELECT * FROM news WHERE id=$news_id";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
?>
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg3.jpg)">
            </div>
            <div class="page-header-shape-1"><img src="assets/images/shapes/page-header-shape-1.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>news-detail</li>
                    </ul>
                    <h2>News Details</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--News Details Start-->

        <section class="news-details">
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-8">
                        <h1><?php echo $row['title'] ?></h1>
                        <!-- <p class="lead">Byline Here</p> -->
                        <img src="./<?php echo $row['image'] ?> " class="img-fluid" alt="News Image" style="width:800px;height:400px;" />
                        <p class="my-3">
                           <?php echo $row['short_description'] ?>
                        </p>
                    <p class="my-3"><?php echo $row['article'] ?>
                    </p>
                    
                    </div>
                </div>
            </div>
        </section>
        
        <!--News Details End-->

        <!--CTA One Start-->
        <section class="cta-one cta-three">
            <div class="container">
                <div class="cta-one__content">
                    <div class="cta-one__inner">
                        <div class="cta-one__left">
                            <h3 class="cta-one__title">Make appointment instantly</h3>
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
                                <a href="contact.html" class="thm-btn cta-one__btn">LIVE CHAT</a>
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
<?php
include 'footer.php';
?>