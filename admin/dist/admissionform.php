<?php
include "../../db_connect/connection.php";
?>
<?php
if(isset($_POST['submit'])){
    $r = $_FILES['txtImageUpload']['tmp_name'];
    $r_type = $_FILES['txtImageUpload']['type'];
    $r_size = $_FILES['txtImageUpload']['size'];
    $r_name = $_FILES['txtImageUpload']['name'];
    if ($r_type == 'image/jpg' || $r_type == 'image/jpeg' || $r_type == 'image/png' || $r_type == 'image/gif' || $r_type == 'image/webp') {
        //   here is the path of image
        $path = "admission_image/" . $r_name;
        $upload = move_uploaded_file($r,$path);
    $name = $_POST['Name'];
    $student_id = $_POST['student_id'];
    $course = $_POST['course'];
    $fee = $_POST['fee'];
    $duration = $_POST['duration'];
    $aadhar = $_POST['aadhar'];
    $phone = $_POST['phone']; 
    $email = $_POST['email'];
    $address = $_POST['address']; 
   
    

    $sql ="INSERT INTO `admission`(`student_id`, `studentname`, `coursetype`, `email`, `phone`, `adhar`, `address`, `coursefee`, `duration`, `image`) VALUES
     ('$student_id',' $name','$course','$email','$phone','$aadhar','$address','$fee','$duration','$r_name')";
     

     $res = mysqli_query($conn,$sql);
     if($res == true){
        ?>
        <script>
            alert ("data inserted successfully");
            </script>
        <?php
        header("Location:admissiondetails.php");
     }
     else{
        ?>
        <script>
            alert ("data failed to insert");
            </script>
        <?php
     }
}}

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    @import "font-awesome.min.css";
@import "font-awesome-ie7.min.css";
/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
  
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}

</style>
<body>
<a href="admissiondetails.php"><button class="btn btn-primary text-white">Back</button></a>
<div class="container">
    <h1 class="well">Admission  Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form method="post" enctype="multipart/form-data">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Student Name</label>
								<input type="text" name="Name" placeholder="Enter First Name Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>student_id</label>
								<input type="text" name="student_id"placeholder="student_id" id="student_id" class="form-control">
							</div>
						</div>					
						
						<div class="form-group">
            <label>Course Type</label>
            <select class="form-control" name="course">
                <option value="">Select Course</option>
                <option value="Beauty &  Wellness Courses">Beauty &  Wellness Courses</option>
                <option value="Ayurveda Therapist Course">Ayurveda Therapist Course</option>
                <option value="Professional Development Courses">Professional Development Courses</option>
                <option value="CBSE Schools-Beauty Wellness Skill Training">CBSE Schools-Beauty Wellness Skill Training</option>
                <option value="Asethetics Courses">Asethetics Courses</option>
                <option value="World Skill Competition Training">World Skill Competition Training</option>
              </select>
        </div>
        <div class="row">
							<div class="col-sm-6 form-group">
								<label>Course fee</label>
								<input type="text" name="fee" placeholder="Enter fee" class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Duration</label>
								<input type="text" name="duration"placeholder="Course duration" class="form-control">
							</div>	
						</div>			
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Aadhar card</label>
								<input type="text" name="aadhar"placeholder="Enter Designation Here.." class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Image</label>
								<input type="file" name="txtImageUpload" placeholder="passport size image" class="form-control">
							</div>	
						</div>						
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="phone" placeholder="Enter Phone Number Here.." class="form-control">
					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="text" name="email"placeholder="Enter Email Address Here.." class="form-control">
					</div>	
					
                    <div class="form-group">
							<label>Address</label>
							<textarea name="address"placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
						</div>	
            <button type="submit" name="submit" class="btn btn-lg btn-info">Submit</button>

					</div>
				</form> 
				</div>
	</div>
	</div>
</body>
<script>
   
    window.addEventListener('DOMContentLoaded', (event) => {
        var student_id = "Stu" + Math.floor(Math.random() * 10000);
        document.getElementById("student_id").value = student_id;
    });
</script>
