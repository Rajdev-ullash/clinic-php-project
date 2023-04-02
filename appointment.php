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
                        <li>Appointment</li>
                    </ul>
                    <h2>Appointment</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                 <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">Request an appointment</p>
                        <div class="section-title-shape-1">
                            <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                
                    <div class="col-md-6 offset-md-3">
                        <div class="contact-page__right">
                            <div class="contact-page__form">
                                <form action="appointment_insert.php" method="post" id="appform" name="appform">
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Patient name" name="name" id="name">
                                            </div>
                                        </div>
                                         <div class="col-xl-4">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Age in years" name="age" id="age">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email" id="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Phone number" name="phone" id="phone">
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                               <select class="form-select my-select" name="doc" id="doc">
                                                 <option value="0">Select Doctor</option>
                                                   
                                                   <?php
                                                    $query = "SELECT id,name,dept,department,did FROM doctor join dept on dept.did=doctor.dept order by dept";
                                                    $result = mysqli_query($connection, $query);
                                                    
                                                    while($row = mysqli_fetch_assoc($result)){
                                                        $id = $row['id'];
                                                        $name = $row['name'];
                                                        $dept = $row['department'];
                                                        
                                            
                                                        echo "<option value='$id'>$name ($dept)</option>";
                                                    }

                                                    ?>
                                                    
                    
                                                </select>

                                            </div>
                                        </div>
                                         <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input class="my-select" type="date" name="apdate" id="adate">
                                            </div>
                                        </div>
                                         <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                 <input class="my-select" type="time" name="aptime" id="atime">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__btn-box">
                                                <button type="button" class="thm-btn comment-form__btn" onclick="addRecord()">Request</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

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

<script type="text/javascript">

        

        
        

     
      // ----------------- my functions ---------------------
      
        function addRecord() {
            var name = $('#name').val();
            var age = $('#age').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var doc = $('#doc').val();
            var apdate = $('#adate').val();
            var aptime = $('#atime').val();

            if(name == "" || age == "" || email == "" || phone == "" || doc == "" || apdate == "" || aptime == ""){
                alert("Please fill all the fields");
                return;
            }
            
            var form = $('#appform')[0];
            var data = new FormData(form);
            data.append("name", name);
            data.append("age", age);
            data.append("email", email);
            data.append("phone", phone);
            data.append("doc", doc);
            data.append("apdate", apdate);
            data.append("aptime", aptime);
            
            $.ajax({
                type: "POST",
                url: "appointment_insert.php",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 600000,
                success: function (data) {
                    console.log("SUCCESS : ", data);
                    // $('#success').html(data);
                    // $('#appform')[0].reset();
                    
                    if(data == "1"){

                        //sent a mail
                        
                        
                        //redirect success.php page
                        window.location.href = "success.php";
                    }

                },
                error: function (e) {
                    console.log("ERROR : ", e);
                    $("#success").html(e);
                }
            });
        }

      </script>