<?php
// Include necessary files
include "include/header.php";
include "db_connect/connection.php";

// Check if the form is submitted
if(isset($_POST['submit'])){
    // Retrieve form data
    $name = $_POST['name'];
    $orgname = $_POST['company_name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $address = $_POST['adress']; 
    $course = $_POST['course'];
    $location = $_POST['location'];

    // Prepare and bind SQL statement to prevent SQL injection
    $sql = "INSERT INTO proenquiry (name, orgname, email, mobile, address, course, Location) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $name, $orgname, $email, $mobile_no, $address, $course, $location);
    
    // Execute the statement
    if($stmt->execute()){
        echo "<script>alert('Data submitted Successfully');</script>";
    } else {
        echo "<script>alert('Data Failed');</script>";
    }
    $stmt->close();
}

?>
<style>
* inquiry form */ .inquiry-main {
    width: 100%;
    padding: 20px;
    border-radius: 5px;
}

.inquiry-main label.inquiry-label span {
    color: #a2aabd;
    font-size: 1.2em;
    font-weight: 500;
    left: 0;
    opacity: 0;
    position: absolute;
    top: -1em;
    transition: all 0.1s linear;
}

.inquiry-main input.inquiry-input:focus+label.inquiry-label span,
.inquiry-main input.inquiry-input+label.inquiry-label.show span {
    border-radius: 4px;
    color: #2088cd;
    font-size: 1em;
    padding: 0 .15em;
    opacity: 1;
    top: -4.2em;
}

.inquiry-main input.inquiry-input:focus::-webkit-input-placeholder {
    color: red !important;
    opacity: 0;

}

.inquiry-main input.inquiry-input {
    color: #666;
    font-size: 1em;
    padding: .75em .5em .5em;
    padding-bottom: 0;
    width: 100%;
    border: 0 !important;
    border-bottom: 1px solid #ececec !important;
    border-radius: 0 !important;
    /* background-image: linear-gradient(#9FC2FA, #9FC2FA); */
    background-size: 0 2px, auto;
    background-repeat: no-repeat;
    background-position: center bottom;
    transition: all .2s ease-out !important;
    outline: 0 !important;
}

.inquiry-main textarea.inquiry-textarea {
    border: 0;
    border-bottom: 1px solid #ececec !important;
}

.inquiry-main textarea.inquiry-textarea::-webkit-input-placeholder {
    font-size: 1.2em;
    font-weight: 500;
}

.inquiry-main .field {
    margin-bottom: 1em;
    position: relative;
}

.inquiry-main input.inquiry-input:hover {
    background-size: 100% 2px, auto;
}

.inquiry-main input.inquiry-input {
    width: 100% !important;
    margin-bottom: 10px !important;
}

.inquiry-main input.inquiry-input:focus {
    box-shadow: inset 0 -2px 0 #9FC2FA !important;
    outline: 0 !important;
    box-shadow: none;
}

.inquiry-main textarea.inquiry-textarea:focus {
    box-shadow: inset 0 -2px 0 #9FC2FA !important;
    border: 0;
    outline: 0 !important;
    box-shadow: none;
}

.inquiry-main input.inquiry-input[type=number]::-webkit-inner-spin-button,
.inquiry-main input.inquiry-input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
}

.inquiry-main input.inquiry-input[type=number] {
    -moz-appearance: textfield;
}

.bg-layer {
    /* background-image: linear-gradient(45deg, rgba(26, 168, 226,0.6), rgba(26, 168, 226,0.6)),url(/files/bg-layer.jpg); */
    background-size: cover;
}

.br-left {
    border-radius: 5% 0% 0% 5% / 5% 0% 0% 5%;
}

.br-right {
    border-radius: 0% 5% 5% 0% / 0% 5% 5% 0%;
}

.inquiry-main .inquiry-label,
.inquiry-main .inquiry-label,
.inquiry-main textarea.inquiry-textarea {
    width: 100%;
}

#inquiry,
.inquiry-main .inquiry-label,
.inquiry-main .inquiry-input {
    position: relative;
}

.inquiry-main .inquiry-input,
.inquiry-main textarea.inquiry-textarea {
    padding: 0.5em;
    border: none;
    font: 300 100%/1.2 Ubuntu, sans-serif;
}

.inquiry-main .inquiry-input[type="text"],
.inquiry-main .inquiry-input[type="email"],
.inquiry-main textarea.inquiry-textarea {
    margin: 0 0 1em;
    outline: none;
}

.inquiry-main .inquiry-input.invalid,
.inquiry-main textarea.inquiry-textarea.invalid {
    border-color: #d5144d;
}

.inquiry-main .inquiry-label>span {
    vertical-align: top;
    display: inline-block;
    padding: 0.5em;
    border: 1px solid transparent;
    text-align: right;
}

.inquiry-main .inquiry-input,
.inquiry-main textarea.inquiry-textarea {

    line-height: 1.5;
}

@media screen and (max-width: 600px) {

    .inquiry-main input.inquiry-input:focus+label.inquiry-label span,
    .inquiry-main input.inquiry-input+label.inquiry-label.show span {
        top: -4.5em;
    }

    .inquiry-main {
        width: auto;
        padding: 0;
        margin: 0 auto;
    }

    .br-left {
        border-radius: 0;
    }

    .br-right {
        border-radius: 0;
    }

    .inquiry-form-section .container-fluid .p-5 {
        padding: 50px 0 !important;
    }
}
</style>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95"
        style="background-image:url(https://www.excellenthicare.com/image/Enquiry_banner.jpg);">
        <div class="container" id="enquiry-container">
            <h2>Enquiry</h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Enquiry</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="container mt-4 mb-4">
    <h2 align="center"><a href="https://finbyz.tech" target="_blank"><u>Enquiry Form</u></a></h2>

</div>
<!--<p class="proenquiry-text px-4">AURA NXT Skin Basic Course: Lay the foundation for skincare expertise with fundamental-->
<!--    concepts, covering cleansing routines, basic product knowledge, and introductory facial treatments.<br>-->

<!--    AURA NXT Skin Advanced Course: Elevate your skills with in-depth insights into advanced skincare techniques,-->
<!--    specialized treatments, and the science behind skincare products, empowering you to address diverse skin-->
<!--    concerns.<br>-->

<!--    URA NXT Skin Short-Term Course: Perfect for busy individuals, this condensed program offers essential skincare-->
<!--    essentials and quick-result treatments, providing a comprehensive overview for those seeking knowledge. Message-->
<!--    skincare </p>-->
<section class=" bg-layer inquiry-form-section">
    <div class="container">
        <div class="row p-5">
            <div class="col-md-6 bg-white br-left d-flex align-items-center justify-content-center">
                <div class="mt-4 mb-4">
                    <div class="text-center">
                        <h2 class="finbyz-fadeinup t-blue">
                            Request for Enquiry
                        </h2>
                    </div>

                    <div class="p-4">

                        <img src="https://finbyz.tech/files/envelope-icon.svg" alt="Request for FREE Demo"
                            title="Request for FREE Demo" class="finbyz-zoomin">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mtn-1 mln-2 bg-white br-right">
                <div id="inquiry-form">
                    <form method="post">

                        <div class="mb-4">
                            <label class="inquiry-label"><span>Name</span></label>
                            <input class="form-control inquiry-input" name="name" type="text" placeholder="Name">
                        </div>

                        <div class="mb-4">
                            <label class="inquiry-label"><span>Organization Name</span>
                            </label>
                            <input class="form-control inquiry-input" name="company_name" type="text"
                                placeholder="Organization Name">
                        </div>

                        <div class="mb-4">
                            <label class="inquiry-label"><span>Email</span>
                            </label>
                            <input class="form-control inquiry-input" name="email" type="email" placeholder="Email">
                        </div>

                        <div class="mb-4">

                            <label class="inquiry-label"><span>Mobile No</span>
                            </label>
                            <input class="form-control inquiry-input" data-bind="value:mobile_no" name="mobile_no"
                                min="0" required="" placeholder="Mobile No" type="text">
                        </div>

                        <div class="mb-4">
                            <label class="inquiry-label"><span>Address</span>
                            </label>
                            <input class="form-control inquiry-input" data-bind="value:mobile_no" name="adress" min="0"
                                required="" placeholder="Address" type="text">
                        </div>

                        <div class="mb-4">
                            <label>Enrolled Course</label>
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

                        <div class="mb-4">
                            <label>Choose Location</label>
                            <select class="form-control" name="location">
                                <option value="">Select Course</option>
                                <option value="Bhubaneswar">Bhubaneswar</option>
                                <option value="Berhampur">Berhampur</option>

                            </select>
                        </div>



                        <!-- <input name="submit" type="submit" value="Send"/> -->

                        <button class="btn btn-dark" name="submit" type="submit">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("include/footer.php") ?>