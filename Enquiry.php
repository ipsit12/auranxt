<?php
include "include/header.php";
include "db_connect/connection.php";
?>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['mob'];
    $subject = $_POST['subject'];
    $service = $_POST['service'];

   $sql = "INSERT INTO `enquiry` (`name`, `email`, `phone`, `subject`, `course`) VALUES ('$name','$email','$phone','$subject','$service')";
   
    $result = mysqli_query($conn, $sql);
    if ($result) {
?>
        <script>
            alert("Data submitted Successfully");
        </script>
    <?php
        // header("Location:index.php");
    } else {
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
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(https://www.excellenthicare.com/image/Enquiry_banner.jpg);">
        <div class="container">
            <h2>Enquiry </h2>

        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Enquiry </span></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form_main">
                <h4 class="heading"><strong>Enquiry </strong> Contact <span></span></h4>
                <div class="form">
                    <form method="post">
                        <input type="text" required="" placeholder="Please input your Name" value="" name="name" class="txt">
                        <input type="text" required="" placeholder="Please input your mobile No" value="" name="mob" class="txt">
                        <input type="text" required="" placeholder="Please input your Email" value="" name="email" class="txt">
                        <input type="text" required="" placeholder="Please input query" value="" name="subject" class="txt">
                        <label>Enrolled Service</label>
                        <select class="form-control" name="service">
                            <option value="">Select Service</option>
                            <option value="Haircut and styling
">Haircut and styling
                            </option>
                            <option value="Hair coloring and highlights
">Hair coloring and highlights
                            </option>
                            <option value=" Hair treatments (such as keratin treatment, hair spa)
"> Hair treatments (such as keratin treatment, hair spa)
                            </option>
                            <option value=" Manicure and pedicure
"> Manicure and pedicure
                            </option>
                            <option value="Nail art $ Nail Extension
">Nail art $ Nail Extension
                            </option>
                            <option value="Waxing (for various body parts)
">Waxing (for various body parts)
                            </option>
                            <option value=" Eyebrow shaping and tinting
"> Eyebrow shaping and tinting
                            </option>
                            <option value="Eyelash extensions
">Eyelash extensions
                            </option>
                            <option value="Facials
">Facials
                            </option>
                            <option value="Massages (such as head massage, back massage)
">Massages (such as head massage, back massage)
                            </option>
                            <option value="Makeup application (for special occasions or events)
">Makeup application (for special occasions or events)
                            </option>
                            <option value=" Body scrub and exfoliation
"> Body scrub and exfoliation
                            </option>
                            <option value="Henna application (for hands, feet, or hair)

">Henna application (for hands, feet, or hair)

                            </option>
                            <option value=" Threading (for facial hair removal)

"> Threading (for facial hair removal)

                            </option>
                            <option value=" Bridal packages (including makeup, hairstyling, and other services for weddings or special events)
"> Bridal packages (including makeup, hairstyling, and other services for weddings or special events)

                            </option>
                            
                           
                             <option value="None
"> None
                            </option>
                        </select>

                        <!-- <select required="" value="" name="address" class="txt" style="width:1000px;background-color:#eceff8;height:50px;">
                            <option value="Choose Interest Course">Choose Interest Course</option>

                           
                        </select> -->


                        <input type="submit" value="submit" name="submit" class="txt2">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "include/footer.php";
?>