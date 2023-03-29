<?php
require_once('admin/databases.php');
include 'header.php';

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
                        <li>Media Center</li>
                    </ul>
                    <h2>Media Center</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                 <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">All News</p>
                        <div class="section-title-shape-1">
                            <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                        </div>
                    </div>
                    
                </div>

            </div>
        </section>
        <!--Contact Page End-->

        <!--All News Start -->
        <div id="news_section">
            <div class="container">
                <div class="row">
                    <?php
                    $i=1;
                    $output='';
                    $query = "SELECT * FROM news ORDER BY id DESC LIMIT 3";

                    $result = mysqli_query($connection, $query);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                            $output .= '
                            <div class="col-md-4">
                                <div class="news-card">
                                    <div class="news-card__img">
                                        <img src="./'.$row['image'].'" alt="" style="width:200px;height:200px;">
                                    </div>
                                    <div class="news-card__content">
                                        <h3><a href="news-details.php?id='.$row['id'].'">'.$row['title'].'</a></h3>
                                        <p>'.$row['short_description'].'</p>
                                        
                                        <a href="news-details.php?id='.$row['id'].'" class="thm-btn news-card__btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                            ';
                            $i++;
                        }
                        echo $output;

                    }
                    ?>
                </div>
            </div>
        </div>
        <!--All News End -->

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