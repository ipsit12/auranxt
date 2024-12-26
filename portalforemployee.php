<?php
include "include/header.php";
include "db_connect/connection.php";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Validate and sanitize input data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $region = mysqli_real_escape_string($conn, $_POST['region']);
    $postalcode = mysqli_real_escape_string($conn, $_POST['postalcode']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $alternate = mysqli_real_escape_string($conn, $_POST['alternate']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $hear = mysqli_real_escape_string($conn, $_POST['hear']);

    // Handle file upload
    if (isset($_FILES['txtImageUpload']) && $_FILES['txtImageUpload']['error'] == UPLOAD_ERR_OK) {
        $cv_name = basename($_FILES['txtImageUpload']['name']);
        $cv_tmp_name = $_FILES['txtImageUpload']['tmp_name'];
        $cv_path = "image/" . $cv_name;
        
      

        // Move uploaded file to destination directory
        if (move_uploaded_file($cv_tmp_name, $cv_path)) {
            
            // Construct the SQL query
            $sql = "INSERT INTO `jobportal`(`name`, `email`, `phone`, `address`, `city`, `region`, `postalcode`, `country`, `alternate`, `position`, `cv`, `hear_about_us`) 
            VALUES ('$name', '$email', '$phone', '$address', '$city', '$region', '$postalcode', '$country', '$alternate', '$position', '$cv_name', '$hear')";

            // Execute the SQL query
            $result = mysqli_query($conn, $sql);

            // Check if the query executed successfully
            if ($result) {
                ?>
                 
                <script>alert('Data inserted successfully');</script>;
                <?php
            } else {
                echo "<script>alert('Data failed to insert');</script>";
            }
        } else {
            echo "<script>alert('Error uploading file');</script>";
        }
    } else {
        echo "<script>alert('No file uploaded');</script>";
    }
}
?>

<!-- Your HTML form code goes here -->



<style>
    /* Make form responsive */
    .form-container {
        max-width: 600px;
        /* Adjust maximum width as needed */
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        /* Set background color for the form */
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-container label,
    .form-container input,
    .form-container select {
        width: 100%;
        margin-bottom: 10px;
    }

    .form-container input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        /* Green submit button */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

<!-- bootstrap css -->

<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(clientimage/IMG-20240305-WA0017.jpg);">

    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Placement</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="course-area bg-img pt-130">
    <div class="container">
        <div class="section-title mb-75 course-mrg-small">
            <h2> <span>Servi</span>ces</h2>
            <p>AURA Nxt's Hospitality Placement Portal offers a seamless platform for job seekers in Odisha to register for free and explore diverse opportunities in the hospitality sector. This user-friendly portal connects aspiring professionals with a range of job
                openings, fostering a dynamic environment for career growth. With easy registration, it serves as a gateway to numerous employment possibilities, enhancing the
                job-seeking experience across the vibrant landscape of Odisha.
            </P>
        </div>
    </div>
</div>
<div class="form-container">
<form  method="post" enctype="multipart/form-data">

        <label for="Name" class="mt-4 mb-2">Name</label>

        <input type="text" placeholder="Name"  name="name" />



        <label for="email" class="mt-4 d-block">Email</label>
        <input type="email" name="email" placeholder="email">


        <label for="Address" class="mt-4 d-block">Address</label>
        <input type="text" name="address"  placeholder="Street Address" style="width: 100%">
       

        <div class="d-flex justify-content-between align-items-center gap-3">
            <input type="text" name="city" class="address mt-3" placeholder="City" style="width: 50%">
            <input type="text" name="region" class="address mt-3" placeholder="Region" style="width: 50%">
        </div>

        <div class="d-flex justify-content-between align-items-center gap-3">
            <input type="text" class="address mt-3" name="postalcode" placeholder="Postal/Zip Code" style="width: 50%">
            <input type="text" class="address mt-3" name="country" placeholder="Country" style="width: 50%">
        </div>

        <div class="d-flex justify-content-between align-items-center gap-3">
            <div style="width:50%;">
                <label for="phone" class="mt-4 d-block">Phone Number</label>
                <input type="tel" class="phone" name="phone" placeholder="### ### ####" style="width: 100%">
            </div>

            <div style="width:50%;">
                <label for="phone" class="mt-4 d-block">Alternate Number(WhatsApp)</label>
                <input type="tel" class="phone" name="alternate" placeholder="### ### ####" style="width: 100%">
            </div>

        </div>

        <div class="d-flex justify-content-between align-items-center gap-3">
            <div style="width:50%;">
                <label for="position" class="mt-4 d-block">Position that you are applying for</label>
                <select name="position" id="position" name="position" style="width: 100%">
                    <option selected>*Please Select*</option>
                    <option value="developer">Beauty Consultant</option>
                    <option value="sales executive">Esthetician</option>
                     <option value="developer">Makeup Artist</option>
                    <option value="Cosmetologist">Cosmetologist</option>
                     <option value="Beauty Therapist">Beauty Therapist</option>
                    <option value="Salon Receptionist">Salon Receptionist</option>
                     <option value="Front Desk Coordinator">Front Desk Coordinator</option>
                    <option value="Office Administrator">Office Administrator</option>
                     <option value="Office Manager">Office Manager</option>
                    <option value="Customer Service Representative (Beauty Industry">Customer Service Representative (Beauty Industry</option>
                     <option value="Spa Receptionist">Spa Receptionist</option>
                    <option value="Front Office Executive">Front Office Executive</option>
                     <option value="Beauty Advisor">Beauty Advisor</option>
                    <option value="Administrative Assistant (Beauty Industry)">Administrative Assistant (Beauty Industry)</option>
                     <option value="Operations Coordinator">Operations Coordinator</option>
                    <option value="Front Desk Supervisor">Front Desk Supervisor</option>
                     <option value="Office Coordinator">Office Coordinator</option>
                    <option value="Beauty Sales Associate">Beauty Sales Associatee</option>
                     <option value="Office Assistant">Office Assistant</option>
                    <option value="Spa Manager">Spa Manager</option>
                    
                </select>
            </div>

            <!--<div style="width:50%;">-->
            <!--    <label for="jobtype" class="mt-4 d-block">Job Type</label>-->
            <!--    <select name="jobtype" name="jobtype" id="jobtype" style="width: 100%">-->
            <!--        <option selected>*Please Select*</option>-->
            <!--        <option value="type 1">Type 1</option>-->
            <!--        <option value="type 2">Type 2</option>-->
            <!--    </select>-->
            <!--</div>-->

        </div>


        <label for="" >Add resume/CV URL</label>
        <input type="file" name="txtImageUpload" accept="pdf" style="width: 50%">


        <p class="mt-4">How did you hear about us?</p>
        <input type="radio" value="Google Search" id="googlesearch" name="hear">
        <label for="googlesearch">Google Search</label> <br>
        <input type="radio" value="online advert" id="onlineadvert" name="hear">
        <label for="onlineadvert">Online Advert</label> <br>
        <input type="radio" value="friend recommendation" id="friendrecommendation" name="hear">
        <label for="friendrecommendation">Friend Recommendation</label> <br>
        <input type="radio" value="other" id="other" name="hear">
        <label for="other">Other</label> <br>

        <input type="submit" name="submit" value="SEND APPLICATION">

    </form>
</div>

<!-- bootstrap js -->

<?php
include "include/footer.php" ?>
