<?php include("include/header.php");
include "db_connect/connection.php";?>

<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(assets/franchise.jpg);">
        <div class="container">
            <!--<h2>Franchies</h2>-->
            
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Franchise</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="event-area bg-img default-overlay pt-130 pb-130" style="background-image:url(assets/img/bg/bg-3.jpg);">
    <div class="container">
        <div class="section-title mb-75">
           <h2>Why AURA <span>NXT Fran</span>chise?</h2>
            <p>
                You buy a team of expert & a successful business Model & pay a fraction of what it would
cost to do it on your own for a financially
rewarding business.

            </p>
            <p>Profile - AURA is a successful, committed & experienced team of professionals whose support will take your business to the next level.
        <br/>
Vision - To make your business the most
successful model in beauty & wellness industry and to aspire optimum skill development in the state of Odisha.
</p>
         
        </div>
        <div class="event-active owl-carousel nav-style-1">
           
           
           
           
        </div>
    </div>
</div>
<!-- /.container -->

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['mob'];
    $subject = $_POST['subject'];

    $sql = "INSERT INTO `enquiry`( `name`, `email`, `phone`, `subject`) VALUES
     ('$name','$email','$phone',' $subject')";
    $result = mysqli_query($conn , $sql);
    if($result){
        ?>
        <script>
        alert("Data submitted Successfully");
        </script>
        <?php
        // header("Location:index.php");
    }
    else{
        ?>
        <script>
        alert("Data Failed");
        </script>
        <?php
        // header("Location:contact-us.php");
    }
}
?>
<style>
    .form_main {
        width: 100%;
    }

    .form_main h4 {
        font-family: roboto;
        font-size: 20px;
        font-weight: 300;
        margin-bottom: 15px;
        margin-top: 20px;
        text-transform: uppercase;
    }

    .heading {
        border-bottom: 1px solid #fcab0e;
        padding-bottom: 9px;
        position: relative;
    }

    .heading span {
        background: #9e6600 none repeat scroll 0 0;
        bottom: -2px;
        height: 3px;
        left: 0;
        position: absolute;
        width: 75px;
    }

    .form {
        border-radius: 7px;
        padding: 6px;
    }

    .txt[type="text"] {
        border: 1px solid #ccc;
        margin: 10px 0;
        padding: 10px 0 10px 5px;
        width: 1000px;
    }

    .txt_3[type="text"] {
        margin: 10px 0 0;
        padding: 10px 0 10px 5px;
        width: 100%;
    }

    .txt2[type="submit"] {
        background: #242424 none repeat scroll 0 0;
        border: 1px solid #4f5c04;
        border-radius: 25px;
        color: #fff;
        font-size: 16px;
        font-style: normal;
        line-height: 35px;
        margin: 10px 0;
        padding: 0;
        text-transform: uppercase;
        width: 30%;
    }

    .txt2:hover {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        color: #5793ef;
        transition: all 0.5s ease 0s;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form_main">
                <h4 class="heading"><strong>Enquiry </strong>  <span></span></h4>
                <div class="form " id="franchise-form">
                    <form  method="post" >
                        <input type="text" required="" placeholder="Please input your Name" value="" name="name" class="txt">
                        <input type="text" required="" placeholder="Please input your mobile No" value="" name="mob" class="txt">
                        <input type="text" required="" placeholder="Please input your Email" value="" name="email" class="txt">
                        <input type="text" required="" placeholder="Please input query" value="" name="subject" class="txt">
                        
                        <!-- <select required="" value="" name="address" class="txt" style="width:1000px;background-color:#eceff8;height:50px;">
                            <option value="Choose Interest Course">Choose Interest Course</option>

                            <option value="Beauty &  Wellness Courses">Beauty & Wellness Courses</option>
                            <option value="Ayurveda Therapist Course">Ayurveda Therapist Course</option>
                            <option value="Professional Development Courses">Professional Development Courses</option>
                            <option value="CBSE Schools-Beauty Wellness Skill Training">CBSE Schools-Beauty Wellness Skill Training</option>
                            <option value="Asethetics Courses">Asethetics Courses</option>
                            <option value="World Skill Competition Training">World Skill Competition Training</option>
                        </select> -->


                        <input type="submit" value="submit" name="submit" class="txt2">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("include/footer.php") ?>