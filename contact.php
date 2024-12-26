<?php
include "db_connect/connection.php";
include "include/header.php";

?>

<?php

if (isset($_POST['save'])) {
  

  // Validate and sanitize input data
  $name = $_POST['names'];
  $email = $_POST['email'];
  $phone =  $_POST['phones'];
  $comment = $_POST['comments'];


// exit();


  // Check if required fields are not empty
  if (!empty($name) && !empty($email) && !empty($phone) && !empty($comment)) {
    $sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `comment`) VALUES ('$name', '$email', '$phone', '$comment')";
    $result = mysqli_query($conn, $sql);
   
    if ($result) {
?>
      <script>
        alert("Data submitted Successfully");
        window.location.href = 'index.php'; // Redirect to index.php
      </script>
<?php
      exit; // Terminate further execution
    } else {
      echo "Error: " . mysqli_error($conn); // Display SQL error, if any
    }
  } else {
    echo "All fields are required."; // Display error message if required fields are empty
  }
}
?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-6.jpg); background-size:cover; background-repeat:no-repeat;">
        <div class="container">
            <h2>Contact Us</h2>
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>-->
        </div>
    </div>
    <div class="breadcrumb-bottom" id="contact-breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Contact Us</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-area pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-map mr-70">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3742.6612181330966!2d85.84454297523622!3d20.272880381193886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDE2JzIyLjQiTiA4NcKwNTAnNDkuNiJF!5e0!3m2!1sen!2sin!4v1721298684631!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7485.3125138316345!2d85.847133!3d20.273086!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a7f8bbd77779%3A0x7c5e8f4f80d72f0c!2sMallick%20Commercial%20Complex!5e0!3m2!1sen!2sin!4v1709205306934!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-form">
                    <div class="contact-title mb-45">
                        <h2 id="stay"> <span> Stay Connected</span></h2>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipis do eiusmod tempor indunt ut labore et dolore magna aliqua.</p>-->
                    </div>
                    <form method="post">
                        <input name="names" placeholder="Name*" type="text">
                        <input name="email" placeholder="Email*" type="email">
                        <input name="phones" placeholder="phone" type="text">
                        <textarea name="comments" placeholder="Message"></textarea>
                        <button  name="save">SEND MESSAGE</button>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-info-area mb-2 bg-img pt-180 pb-140 default-overlay" style="background-image:url(assets/img/bg/contact-info.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="fa fa-calendar-o"></i></span>
                    </div>
                    Bhubaneswar Location</a>
          </h2>
          <p class="card-text">A/69,Mallick Commercial Complex, Unit 3,
            Near Hotel HHI,
            KharvelNagr,Bhubaneswar,751001
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="fa fa-calendar-o"></i></span>
                    </div>
                    <div class="contact-info-phn">
                        <div class="info-phn-title">
                            <span>Phone : </span>
                        </div>
                        <div class="info-phn-number">
                            <p>+91-7008797750</p>
                            <p>+91-9937221804</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="fa fa-calendar-o"></i></span>
                    </div>
                    <a href="#">auranxt@email.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="brand-logo-area pt-130 pb-130">
    <div class="container">
        <div class="brand-logo-active owl-carousel">
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/1.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/3.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/4.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/5.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/6.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
        </div>
    </div>
</div> -->

<?php
include "include/footer.php";
?>