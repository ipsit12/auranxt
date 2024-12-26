<?php
include "include/header.php";
include "db_connect/connection.php";

if (isset($_POST['save'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    // Add subject field here
    $message = mysqli_real_escape_string($conn, $_POST['course']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $sql = "INSERT INTO `contactenquiery`(`name`, `email`, `phone`, `message`, `address`,`course`) VALUES ('$name','$email','$phone','$message','$address','$course')";
   
    $result = mysqli_query($conn, $sql);
    if ($result) {
?>
        <script>
            alert("Data submitted Successfully");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Data Failed");
        </script>
<?php
    }
}
?>

<!--<div class="slider-area">-->
<!--    <div class="slider-active owl-carousel">-->
<!--        <div class="single-slider slider-height-1 bg-img" style="background-image:url(clientimage/part2.jpg);width:100%;height:1000px;">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-9 col-md-7 col-12 col-sm-12">-->
<!--                         <div class="slider-content slider-animated-1 pt-230">-->
<!--                            <h1 class="animated">MakeYour Own World</h1>-->
<!--                            <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>-->
<!--                            <div class="slider-btn">-->
<!--                                <a class="animated default-btn btn-green-color" href="about-us">ABOUT US</a>-->
<!--                                <a class="animated default-btn btn-white-color" href="contact">CONTACT US</a>-->
<!--                            </div>-->
<!--                        </div> -->
<!--                    </div>-->
<!--                </div>-->
<!--                 <div class="slider-single-img slider-animated-1">-->
<!--                    <img class="animated" src="assets/img/slider/single-slide-1.png" alt="">-->
<!--                </div> -->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="single-slider slider-height-1 bg-img" style="background-image:url(clientimage/part1.jpg);">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-9 col-md-7 col-12 col-sm-12">-->
<!--                         <div class="slider-content slider-animated-1 pt-230">-->
<!--                            <h1 class="animated">MakeYour Own World</h1>-->
<!--                            <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>-->
<!--                            <div class="slider-btn">-->
<!--                                <a class="animated default-btn btn-green-color" href="index.php">ABOUT US</a>-->
<!--                                <a class="animated default-btn btn-white-color" href="contact.php">CONTACT US</a>-->
<!--                            </div>-->
<!--                        </div> -->
<!--                    </div>-->
<!--                </div>-->
               
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    
    <div class="carousel-inner">
            <div class="carousel-item active">
             <img src="clientimage/part2.jpg" class="d-block w-100" alt="..." style="width:100%;height:700px; object-fit:fill;">
            </div>
            <div class="carousel-item">
              <img src="clientimage/part1.jpg" class="d-block w-100" alt=""style="width:100%;height:700px; object-fit:fill;">
            </div>
    
    </div>
</div>
<div class="choose-us section-padding-1">
    <div class="container-fluid">
        <div class="row no-gutters choose-negative-mrg">
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-light-blue">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-2.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Techno Digital Academy</h3>
                         <!--<p>AURA NXT Beauty TECHNO Digital Academy is at the forefront of revolutionizing the beauty industry through cutting-edge digital education. Offering comprehensive courses, it empowers aspiring beauty professionals with the latest techniques, trends, and technologies. With a focus on innovation and creativity, students learn not just traditional beauty skills, but also digital marketing, social media strategies, and e-commerce tools to thrive in the modern beauty landscape. AURA NXT Beauty TECHNO Digital Academy is shaping the future of beauty education, equipping students with the skills they need to succeed in an ever-evolving industry. </p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-yellow">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-2.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3> 100% Placement Assistance </h3>
                        <!-- <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation. </p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-blue">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-3.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Accessed and Certified by University</h3>
                        <!-- <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation. </p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-green">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-4.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Scholarship Facility</h3>
                        <!-- <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation. </p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-us pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <div class="section-title section-title-green mb-30">
                        <h2> <span>About Us</span></h2>
                        <p>Aura NXT Skills Academy is a leading institution dedicated to providing high-quality education with a proud history of nurturing talent and fostering careers in the beauty industry. Having established a reputation for excellence in the beauty industry, we are now expanding our course offerings.</p>
                    </div>
                    <p> We are now offering more specialized courses and short courses that cover a broad range of topics in personal development. Our state-of-the-art facilities, experienced trainers, and industry-relevant curriculum ensure that students receive the best education and harmony .</p>
                    
                    <div class="about-btn mt-45">
                        <a class="default-btn" href="index.php">ABOUT US</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-img default-overlay">
                    <img src="newimage/IMG-20240222-WA0016.jpg" alt="">
                    <a class="video-btn video-popup" href="Aura NXT_Anuradha Mohanty.mp4">
                        <img class="animated" src="assets/img/icon-img/video.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="course-area bg-img pt-130" >
    <div class="container">
        <div class="section-title mb-75 course-mrg-small">
        <h2> <span>Courses</span></h2>
            <p>Aura NXT Skills Academy is a leading institution dedicated to providing high-quality education with a proud history of nurturing talent and fostering careers in the beauty industry. Having established a reputation for excellence in the beauty industry, we are now expanding our course offerings.</p>
            <P>We are now offering more specialized courses and short courses that cover a broad range of topics in personal development. Our state-of-the-art facilities, experienced trainers, and industry-relevant curriculum ensure that students receive the best education and harmony .</P>
            <h6>AURA NXT academy various offers in Beauty course in bhubaneswar
Makeup course in bhubaneswar
 Hair course in Bhubaneswar
Beauty training academy in Bhubaneswar,
Job placement for beautician in Bhubaneswar 
Nail extensions course in bhubaneswar
Nail extensions training centre in Bhubaneswar.India.</h6>
        </div>
        <div class="course-slider-active-3">
            <div class="single-course">
                <div class="course-img">
                    <a ><img class="animated" src="clientimage/MAKEUP.jpg" alt="" height="500px"></a>
                    <span>Addmission Going On</span>
                </div>
                <div class="course-content">
                    <h4 style="color:green;font-size:25px;">MAKEUP</a></h4>
                    <!--<p>AURA Nxt offers basic makeup courses for beginners, covering fundamental techniques and product knowledge. Their advance courses delve into advanced makeup artistry, including contouring, special effects</p>-->
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                           
                            <span><a class="default-btn" href="proenquiry.php">ENQUIRY NOW</a></span>
                        </div>
                        <!--<div class="sin-credit-duration">-->
                           
                        <!--    <span> <a class="default-btn" href="hairskinmakeup.php">READ MORE</a></span>-->
                        <!--</div>-->
                    </div>
                    
                </div>
            </div>
           
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details"><img class="animated" src="clientimage/SKIN.jpg" alt=""height="500px"></a>
                    <span>Addmission Going On</span>
                </div>
                <div class="course-content">
                    <h4 style="color:green;font-size:25px;">SKIN</a></h4>
<!--                    <p>AURA NXT Skin Basic Course: Lay the foundation for skincare-->
<!--expertise with fundamental-->
<!--concepts.</p>-->
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <!-- <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div> -->
                        <div class="sin-credit-duration">
                           
                            <span><a class="default-btn" href="proenquiry.php">ENQUIRY NOW</a></span>
                        </div>
                        <!--<div class="sin-credit-duration">-->
                           
                        <!--    <span> <a class="default-btn" href="hairskinmakeup.php">READ MORE</a></span>-->
                        <!--</div>-->
                    </div>
                    <!-- <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
                    </div> -->
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details"><img class="animated" src="clientimage/NAILS.jpg" alt=""height="500px"></a>
                    <span>Addmission Going On</span>
                </div>
                <div class="course-content">
                    <h4 style="color:green;font-size:25px;">NAIL</a></h4>
<!--                    <p>AURA NXT Nail Extension courses empower individuals to create stunning, long-lasting nail-->
<!--enhancements with confidence..</p>-->
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <!-- <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div> -->
                        <div class="sin-credit-duration">
                           
                            <span><a class="default-btn" href="proenquiry.php">ENQUIRY NOW</a></span>
                        </div>
                        <!--<div class="sin-credit-duration">-->
                           
                        <!--    <span> <a class="default-btn" href="hairskinmakeup.php">READ MORE</a></span>-->
                        <!--</div>-->
                    </div>
                    <!-- <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
                    </div> -->
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details"><img class="animated" src="clientimage/HAIR.jpg" alt=""height="500px"></a>
                    <span>Admission Going On</span>
                </div>
                <div class="course-content">
                    <h4 style="color:green;font-size:25px;">HAIR</a></h4>
                    <!--<p>fundamental skills in hair styling, cutting, and coloring, laying a strong foundation for beginners to enter the world of hairdressing..</p>-->
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                    <div class="sin-credit-duration">
                           
                           <span><a class="default-btn" href="proenquiry.php">ENQUIRY NOW</a></span>
                       </div>
                       <!--<div class="sin-credit-duration">-->
                          
                       <!--    <span> <a class="default-btn" href="hairskinmakeup.php">READ MORE</a></span>-->
                       <!--</div>-->
                    </div>
                    <!-- <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
                    </div> -->
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details"><img class="animated" src="clientimage/NAIL.jpg" alt="" height="500px"></a>
                    <span>Addmission Going On</span>
                </div>
                <div class="course-content">
                    <h4 style="color:green;font-size:25px;">NAIL</a></h4>
                    <!--<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>-->
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                    <div class="sin-credit-duration">
                           
                           <span><a class="default-btn" href="proenquiry.php">ENQUIRY NOW</a></span>
                       </div>
                       <!--<div class="sin-credit-duration">-->
                          
                       <!--    <span> <a class="default-btn" href="hairskinmakeup.php">READ MORE</a></span>-->
                       <!--</div>-->
                    </div>
                    
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details"><img class="animated" src="clientimage/PEDIURE.jpg" alt="" height="500px"></a>
                    <span>Addmission Going On</span>
                </div>
                <div class="course-content">
                    <h4 style="color:green;font-size:25px;">NAIL</a></h4>
                    <!--<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>-->
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                    <div class="sin-credit-duration">
                           
                           <span><a class="default-btn" href="proenquiry.php">ENQUIRY NOW</a></span>
                       </div>
                       <!--<div class="sin-credit-duration">-->
                          
                       <!--    <span> <a class="default-btn" href="hairskinmakeup.php">READ MORE</a></span>-->
                       <!--</div>-->
                    </div>
                    
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details"><img class="animated" src="clientimage/manicure (2).jpg" alt="" height="500px"></a>
                    <span>Addmission Going On</span>
                </div>
                <div class="course-content">
                    <h4 style="color:green;font-size:25px;">NAIL</a></h4>
                    <!--<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>-->
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                    <div class="sin-credit-duration">
                           
                           <span><a class="default-btn" href="proenquiry.php">ENQUIRY NOW</a></span>
                       </div>
                       <!--<div class="sin-credit-duration">-->
                          
                       <!--    <span> <a class="default-btn" href="hairskinmakeup.php">READ MORE</a></span>-->
                       <!--</div>-->
                    </div>
                    
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details"><img class="animated" src="clientimage/HAIR 2.jpg" alt=""height="500px"></a>
                    <span>Addmission Going On</span>
                </div>
                <div class="course-content">
                     <h4 style="color:green;font-size:25px;">HAIR</a></h4>
                    <!--<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>-->
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                    <div class="sin-credit-duration">
                           
                           <span><a class="default-btn" href="proenquiry.php">ENQUIRY NOW</a></span>
                       </div>
                       <!--<div class="sin-credit-duration">-->
                          
                       <!--    <span> <a class="default-btn" href="hairskinmakeup.php">READ MORE</a></span>-->
                       <!--</div>-->
                    </div>
                    <!-- <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
                    </div> -->
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details"><img class="animated" src="clientimage/SPA.jpg" alt=""height="500px"></a>
                    <span>Addmission Going On</span>
                </div>
                <div class="course-content">
                    <h4 style="color:green;font-size:25px;">HAIR</a></h4>
                    <!--<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>-->
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                    <div class="sin-credit-duration">
                           
                           <span><a class="default-btn" href="proenquiry.php">ENQUIRY NOW</a></span>
                       </div>
                       <!--<div class="sin-credit-duration">-->
                          
                       <!--    <span> <a class="default-btn" href="Spawesternoriental.php">READ MORE</a></span>-->
                       <!--</div>-->
                    </div>
                    <!-- <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="register-area bg-img pt-130 pb-130" id="Enquiry" style="background-image:url(assets/img/bg/bg-2.jpg);">
    <div class="container">
        <div class="section-title-2 mb-75 white-text">
            <h2>Enquiry <span>Now</span></h2>
            <p>Enquiry now and get ready for connect with us</p>
        </div>
        <div class="register-wrap">
            <div id="register-3" class="mouse-bg">
                <div class="winter-banner">
                    <img src="assets/img/banner/regi-1.png" alt="">
                    <div class="winter-content">
                        <span> </span>
                        <h3>2024</h3>
                        <span>ADMISSION </span>
                    </div>
                </div>
            </div>
    <div class="row">
           
    
        <div class="register-form">
            <h4></h4>
            <form method="post" >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-form-style mb-20">
                            <input name="name" placeholder="Name" type="text">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form-style mb-20">
                            <input name="address" placeholder="Address" type="text">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form-style mb-20">
                            <input name="phone" placeholder="Phone" type="text">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form-style mb-20">
                            <input name="email" placeholder="Email" type="email">
                        </div>
                    </div>
                    <div class="col-lg-12">
                             <div class="contact-form-style mb-20">
                            <select class="form-control" name="course">
                                <option value="">Select Course</option>
                                <option value="CERTIFICATE COURSE IN HAIR TECHNOLOGY">CERTIFICATE COURSE IN HAIR
                                    TECHNOLOGY
                                </option>
                                <option value="ADVANCE CERTIFICATE IN HAIR TECHNOLOGY">ADVANCE CERTIFICATE IN HAIR
                                    TECHNOLOGY</option>
                                <option value="DIPLOMA IN HAIR TECHNOLOGY">DIPLOMA IN HAIR TECHNOLOGY</option>
                                <option value="DIPLOMA IN BEAUTY CULTURE">DIPLOMA IN BEAUTY CULTURE</option>
                                <option value="CERTIFICATE COURSE IN ART OF MAKEUP">CERTIFICATE COURSE IN ART OF MAKEUP
                                </option>
                                <option value="CERTIFICATE COURSE IN PROFESSIONAL MAKEUP">CERTIFICATE COURSE IN
                                    PROFESSIONAL MAKEUP</option>
                                <option value="ADVANCE CERTIFICATE IN PROFESSIONAL MAKEUP">ADVANCE CERTIFICATE IN
                                    PROFESSIONAL MAKEUP</option>
                                <option value="MASTER COURSE IN ESTHIOLOGY">MASTER COURSE IN ESTHIOLOGY</option>
                                <option value="ADVANCE DIPLOMA IN ESTHIOLOGY">ADVANCE DIPLOMA IN ESTHIOLOGY</option>
                                <option value="CERTIFICATE COURSE IN HAIR AND BEAUTY">CERTIFICATE COURSE IN HAIR
                                    AND BEAUTY
                                </option>
                                <option value="CERTIFICATE COURSE IN ESTHIOLOGY">CERTIFICATE COURSE IN ESTHIOLOGY
                                </option>
                                <option value="CERTIFICATE COURSE IN NAIL EXTENSION AND NAIL ART">CERTIFICATE COURSE IN
                                    NAIL
                                    EXTENSION AND NAIL ART</option>
                                <option value="SEMI PERMANET MAKEUP">SEMI PERMANENT MAKEUP</option>
                                <option value="CERTIFICATE COURSE IN SPA THERAPY">CERTIFICATE COURSE IN SPA THERAPY
                                </option>
                                <option value="CERTIFICATE COURSE IN BEGINNERS MAKEUP">CERTIFICATE COURSE IN
                                    BEGINNERS MAKEUP</option>
                                <option value="PERSONAL GROOMING">PERSONAL GROOMING</option>
                                <option value="AROMA BODY MASSAGE">AROMA BODY MASSAGE</option>
                                <option value="SELF MAKEUP">SELF MAKEUP</option>
                                <option value="AROMA BODY POLLISHING">AROMA BODY POLLISHING</option>
                                <option value="MANICURE AND PEDICURE">MANICURE AND PEDICURE</option>
                                <option value="ADVANCE FACIALS">ADVANCE FACIALS</option>
                                <option value="STYLING WITH MACHINE">STYLING WITH MACHINE</option>
                                <!--<option value="Asethetics Courses">ASETHETICS COURSES</option>-->
                                <!--<option value="World Skill Competition Training">WORLD SKILL COMPETITION TRAINING</option>-->
                                <!--                 <option value="Skill Courses -->
                                <!--">Skill Courses -->
                                <!--                            </option>-->
                                <option value="Holistic spa & Ayurveda Therapy

">HOLISTIC SPA & AYURVEDA THERAPY

                                </option>
                                <option value="Ayurveda Therapy & Panchakarma

">AYURVEDA THERAPY & PANCHAKARMA

                                </option>
                                <option value="Communication skills

"> COMMUNICATION SKILLS

                                </option>
                                <option value="Professional Image & Etiquette


">PROFESSIONAL IMAGE & ETIQUETTE


                                </option>
                                <option value="Spoken English


"> SPOKEN ENGLISH


                                </option>
                                <option value=" Advance Cosmetology

">ADVANCE COSMETOLOGY

                                </option>
                                <option value="Skill Competition In Hair



"> SKILL COMPETITION IN HAIR


                                </option>
                                <option value=" Skill competition in Skin

">SKILL COMPETITION IN SKIN

                                </option>
                            </select>
</div>
                        </div>

                    <div class="col-lg-12">
                        <div class="contact-form-style">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button class="submit default-btn" type="submit" name="save">SUBMIT NOW</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

        </div>
    </div>
    <div id="register-1" class="mouse-bg"></div>
    <div id="register-2" class="mouse-bg"></div>
</div>
<!-- <div class="teacher-area pt-130 pb-100">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Best <span>Teacher</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="custom-row">
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/teacher-1.jpg" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Robi Khan</h4>
                        <h5>Lecturer</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                            <p>Tempor incididunt magna aliqua.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/teacher-2.jpg" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Jui Khan</h4>
                        <h5>Lecturer</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                            <p>Tempor incididunt magna aliqua.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/teacher-3.jpg" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Fawd Khan</h4>
                        <h5>Lecturer</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                            <p>Tempor incididunt magna aliqua.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/teacher-4.jpg" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Fawd Khan</h4>
                        <h5>Lecturer</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                            <p>Tempor incididunt magna aliqua.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/teacher-5.jpg" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Jui Khan</h4>
                        <h5>Lecturer</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                            <p>Tempor incididunt magna aliqua.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--<div class="event-area bg-img default-overlay pt-130 pb-130" style="background-image:url(assets/img/bg/bg-3.jpg);">-->
<!--    <div class="container">-->
<!--        <div class="section-title mb-75">-->
<!--            <h2><span>Fran</span>chies</h2>-->
<!--            <p>Profile - AURA is a successful, committed & experienced team of professionals whose support will take your business to the next level.-->
<!--Vision - To make your business the most-->
<!--successful model in beauty & wellness industry and to aspire optimum skill development in the state of Odisha.-->
<!--Why AURA Franchise?-->
<!--You buy a team of expert & a successful business Model & pay a fraction of what it would-->
<!--cost to do it on your own for a financially-->
<!--rewarding business.</p>-->
<!--        </div>-->
<!--        <div class="event-active owl-carousel nav-style-1">-->
           
            
           
            
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- <div class="blog-area pt-130 pb-100">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Our <span>Newsfeed</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="blog-details"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <span>Education</span>
                        <div class="blog-content">
                            <h4><a href="blog-details">Testing is a great thing.</a></h4>
                            <p>doloremque laudan tium, totam ersps uns iste natus</p>
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Adrin Azra</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i> 15</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-date">
                            <a href="#"><i class="fa fa-calendar-o"></i> Jun, 24th 2018</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="blog-details"><img src="assets/img/blog/blog-2.jpg" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <span>Education</span>
                        <div class="blog-content">
                            <h4><a href="blog-details">A variation of the ordinary.</a></h4>
                            <p>doloremque laudan tium, totam ersps uns iste natus</p>
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Tayeb Jon</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i> 12</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-date">
                            <a href="#"><i class="fa fa-calendar-o"></i> Feb, 18th 2017</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="blog-details"><img src="assets/img/blog/blog-3.jpg" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <span>Education</span>
                        <div class="blog-content">
                            <h4><a href="blog-details">In publishing and graphic.</a></h4>
                            <p>doloremque laudan tium, totam ersps uns iste natus</p>
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Rifat Al</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i> 20</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-date">
                            <a href="#"><i class="fa fa-calendar-o"></i> Oct, 14th 2018</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="blog-details"><img src="assets/img/blog/blog-4.jpg" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <span>Education</span>
                        <div class="blog-content">
                            <h4><a href="blog-details">Learn English in ease.</a></h4>
                            <p>doloremque laudan tium, totam ersps uns iste natus</p>
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>Md Tamim</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i> 08</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-date">
                            <a href="#"><i class="fa fa-calendar-o"></i> Jun, 21th 2017</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?php
include "include/footer.php";
?>
