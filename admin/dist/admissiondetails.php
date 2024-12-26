<?php
include "../../db_connect/connection.php";
include "include/header.php";

?>
<a href="admissionform.php"><button class="btn btn-primary text-white">New</button></a>
<table class="table ">
  <thead>
    <tr>
    <th scope="col">Sl No</th>
      <th scope="col">Student Name</th>
      <th scope="col">Image</th>
      <th scope="col">Student_Id</th>
      <th scope="col">Course Type</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Course Fee</th>
      <th scope="col">Duration</th>
      <th scope="col">Joining Date</th>
      
      <th scope="col">Adhar</th>
      
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- <a href="commercialgalleryAdd.php" class="ml-3"><button class="btn btn-success text-white ">Add</button></a> -->
  <?php
    $count=0;
    $sql="SELECT * FROM admission";
    $query=mysqli_query($conn,$sql);
   
    while($arr=mysqli_fetch_array($query))
    {
         $id  =$arr['id'];
         
         $name=$arr['studentname'];
         $a_name=$arr['image'];
         $student_id=$arr['student_id'];
         
         $coursetype  =$arr['coursetype'];
         $email=$arr['email'];
         $phone=$arr['phone'];
         $coursefee  =$arr['coursefee'];
         $duration=$arr['duration'];
         $dateofjoining=$arr['dateofjoining'];
         $address=$arr['address'];
       
         $count++;

   
    ?>
        <tr>
      
      <td><?php echo $count?></td>
      <td><?php echo $name?></td>
      <td><img src="admission_image/<?php echo $a_name;?>" width="50px"alt=""></td>
      <td><?php echo $student_id;?></td>
      <td><?php echo $coursetype;?></td>
      <td><?php echo $email;?></td>
      <td><?php echo $phone;?></td>
      <td><?php echo $coursefee;?></td>
      <td><?php echo $duration;?></td>
      <td><?php echo $dateofjoining?></td>
      <td><?php echo $address;?></td>
      
      
      <td><a onclick="return confirm('do u want to delete?')" href="admissiondlt.php?x=<?php echo $id;?>"><i class="fa-solid fa-trash text-danger"></i></a></td>
    </tr>


    <?php

    }
    ?>
  </tbody>
</table>
     
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