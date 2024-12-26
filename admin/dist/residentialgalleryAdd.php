<?php
include "include/connection.php";
include "include/header.php";

?>

<form name="frmHomeBanners" id="frmHomeBanners" method="post"   enctype="multipart/form-data" action="">
                                           <div class="col-xl-6">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Caption
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
														<input type="text" class="form-control" id="validationCustom01" placeholder="" required="" name="food_name">
														
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom02">Image Document <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="file" name="txtImageUpload" class="form-control" id="validationCustom02" placeholder="photo" required="">
														
                                                    </div>
                                                </div>
												
                                                
                                                    <div class="mb-3 row">
                                                    <div class="col-lg-8 ms-auto">
                                                        <button type="submit" name="AddGallery" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
       </form>

<?php

if(isset($_POST['AddGallery']))
{
   $food_name= $_POST['food_name'];
    $r=$_FILES['txtImageUpload']['tmp_name'];
    $r_type=$_FILES['txtImageUpload']['type'];
    $r_size=$_FILES['txtImageUpload']['size'];
    $r_name=$_FILES['txtImageUpload']['name'];
    if($r_type=='image/jpg'|| $r_type=='image/jpeg'|| $r_type=='image/png'|| $r_type=='image/gif')
    { 
      echo "yes";
        $path="images/".$r_name;
        $upload=move_uploaded_file($r,$path);
        if($upload)
        {
            $q="INSERT INTO `residential_house`(`img_pic`, `img_name`) VALUES ('$food_name','$r_name')";
            $run=mysqli_query($conn,$q);
            if($run)
            {      
                    
                   ?>
                   <script>
                    alert("image added succesfully");
                   </script>
               
<?php
            }
            else
            {
              ?>
              <script>
               alert("image  not added succesfully");
              </script>
          
<?php
              
        
            }
        }
    }
}


            


?>
     
      <?php

        include "include/footer.php";

      ?>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="vendors/chart.js/js/chart.min.js"></script>
    <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>
    <script>
    </script>

  </body>
</html>