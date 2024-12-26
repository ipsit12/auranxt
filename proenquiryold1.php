<?php
include "include/header.php";
include "db_connect/connection.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $orgname = $_POST['company_name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $address = $_POST['adress']; 
    $course = $_POST['course'];

    // Prepare and bind SQL statement to prevent SQL injection
    $sql = "INSERT INTO `proenquiry`(`name`, `orgname`, `email`, `mobile`, `address`, `course`) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $orgname, $email, $mobile_no, $address, $course);

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
    * inquiry form */
  .inquiry-main{
    width: 100%;
    padding: 20px;
    border-radius:5px; 
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
  .inquiry-main input.inquiry-input:focus + label.inquiry-label span,
  .inquiry-main input.inquiry-input + label.inquiry-label.show span {
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
  
  .inquiry-main input.inquiry-input{
    color: #666;
    font-size: 1em;
    padding: .75em .5em .5em;
    padding-bottom: 0;
    width: 100%;
    border: 0!important;
    border-bottom: 1px solid #ececec!important;
    border-radius: 0!important;
    /* background-image: linear-gradient(#9FC2FA, #9FC2FA); */
    background-size: 0 2px, auto;
    background-repeat: no-repeat;
    background-position: center bottom;
    transition: all .2s ease-out!important;
    outline: 0!important;
  }
  .inquiry-main textarea.inquiry-textarea {
  border: 0;
    border-bottom: 1px solid #ececec!important;
  }
  .inquiry-main textarea.inquiry-textarea::-webkit-input-placeholder{
  font-size: 1.2em;
  font-weight: 500;
  }
  .inquiry-main .field {
  margin-bottom: 1em;
  position: relative;
  }
  .inquiry-main input.inquiry-input:hover{
  background-size: 100% 2px, auto;
  }
  .inquiry-main input.inquiry-input{
  width: 100%!important;
  margin-bottom: 10px!important;
  }
  .inquiry-main input.inquiry-input:focus{
  box-shadow: inset 0 -2px 0 #9FC2FA!important;
  outline: 0!important;
  box-shadow: none;
  }
  .inquiry-main textarea.inquiry-textarea:focus{
  box-shadow: inset 0 -2px 0 #9FC2FA!important;
  border: 0;
  outline: 0!important;
  box-shadow: none;
  }
  .inquiry-main input.inquiry-input[type=number]::-webkit-inner-spin-button, 
.inquiry-main input.inquiry-input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
}

.inquiry-main input.inquiry-input[type=number] {
  -moz-appearance: textfield;
}
  .bg-layer{
  /* background-image: linear-gradient(45deg, rgba(26, 168, 226,0.6), rgba(26, 168, 226,0.6)),url(/files/bg-layer.jpg); */
  background-size: cover;
  }
  .br-left{
  border-radius: 5% 0% 0% 5% / 5% 0% 0% 5% ;
  }
  .br-right{
  border-radius: 0% 5% 5% 0% / 0% 5% 5% 0% ;
  }
  
.inquiry-main .inquiry-label, .inquiry-main .inquiry-label, .inquiry-main textarea.inquiry-textarea{
  width: 100%;
}

#inquiry, .inquiry-main .inquiry-label, .inquiry-main .inquiry-input {
position: relative;
}

.inquiry-main .inquiry-input, .inquiry-main textarea.inquiry-textarea {
padding: 0.5em;
border: none;
font: 300 100%/1.2 Ubuntu, sans-serif;
}
.inquiry-main .inquiry-input[type="text"], .inquiry-main .inquiry-input[type="email"], .inquiry-main textarea.inquiry-textarea {
margin: 0 0 1em;
outline: none;
}
.inquiry-main .inquiry-input.invalid, .inquiry-main textarea.inquiry-textarea.invalid {
border-color: #d5144d;
}
.inquiry-main .inquiry-label > span {
  vertical-align: top;
  display: inline-block;
  padding: 0.5em;
  border: 1px solid transparent;
  text-align: right;
}
.inquiry-main .inquiry-input, .inquiry-main textarea.inquiry-textarea{
  
  line-height: 1.5;
}

  @media screen and (max-width: 600px){
  .inquiry-main input.inquiry-input:focus + label.inquiry-label span,
  .inquiry-main input.inquiry-input + label.inquiry-label.show span {
    top: -4.5em;
    }
    .inquiry-main{
      width: auto;
      padding: 0;
      margin: 0 auto;
  }
  .br-left{
    border-radius:0;
  }
  .br-right{
    border-radius: 0 ;
  }
  .inquiry-form-section .container-fluid .p-5{
    padding: 50px 0!important;
  }
  }
</style>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-2.jpg);">
        <div class="container">
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
<div class="container">
                <h2 align="center"><a href="https://finbyz.tech" target= "_blank"><u>Enquiry Form</u></a></h2>
        
</div>
AURA NXT Skin Basic Course: Lay the foundation for skincare expertise with fundamental concepts, covering cleansing routines, basic product knowledge, and introductory facial treatments.<br>

AURA NXT Skin Advanced Course: Elevate your skills with in-depth insights into advanced skincare techniques, specialized treatments, and the science behind skincare products, empowering you to address diverse skin concerns.<br>

URA NXT Skin Short-Term Course: Perfect for busy individuals, this condensed program offers essential skincare essentials and quick-result treatments, providing a comprehensive overview for those seeking knowledge. Message skincare
<section class="mt-100 bg-layer inquiry-form-section">
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
											
                      <img src="https://finbyz.tech/files/envelope-icon.svg" alt="Request for FREE Demo" title="Request for FREE Demo" class="finbyz-zoomin">
                      </div>
										</div>
									</div>
									<div class="col-md-6 mtn-1 mln-2 bg-white br-right">
										<div id="inquiry-form">
											<form method="post">
                                                <label class="inquiry-label"><span>Name</span></label>
												<input class="form-control inquiry-input" name="name" type="text"  placeholder="Name">
												
												
												<label class="inquiry-label"><span>Oraganization Name</span>
												</label>
												<input class="form-control inquiry-input" name="company_name" type="text"  placeholder="Oraganization Name">
												<label class="inquiry-label"><span>Email</span>
												</label>
												<input class="form-control inquiry-input" name="email" type="email"  placeholder="Email">
												<label class="inquiry-label"><span>Mobile No</span>
												</label>
												<input class="form-control inquiry-input" data-bind="value:mobile_no" name="mobile_no" min="0" required="" placeholder="Mobile No" type="text"
												> 
												<label class="inquiry-label"><span>Address</span>
												</label>
                                                <input class="form-control inquiry-input" data-bind="value:mobile_no" name="adress" min="0" required="" placeholder="Address" type="text" >
                                                <label>Enrolled Course</label>
            <select class="form-control" name="course">
                <option value="">Select Course</option>
                <option value="Beauty &  Wellness Courses">Beauty &  Wellness Courses</option>
                <option value="Ayurveda Therapist Course">Ayurveda Therapist Course</option>
                <option value="Professional Development Courses">Professional Development Courses</option>
                <option value="CBSE Schools-Beauty Wellness Skill Training">CBSE Schools-Beauty Wellness Skill Training</option>
                <option value="Asethetics Courses">Asethetics Courses</option>
                <option value="World Skill Competition Training">World Skill Competition Training</option>
              </select>
													
                                               
										
												
												<!-- <input name="submit" type="submit" value="Send"/> -->
												
													<button class="btn btn-dark" name="submit" type="submit" >Submit</button>
												
											</form>
										</div>
									</div>
								</div>
							</div>
						</section>
                        
<?php include("include/footer.php") ?>