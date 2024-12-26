<?php
include "../../db_connect/connection.php";
include "include/header.php";

?>

<table class="table ">
  <thead>
    <tr>
    <th scope="col">Sl No</th>
      <th scope="col"> Name</th>
     
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
     

     
      
      <th scope="col">Message</th>
        <th scope="col">Course</th>
      
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- <a href="commercialgalleryAdd.php" class="ml-3"><button class="btn btn-success text-white ">Add</button></a> -->
  <?php
    $count=0;
    $sql="SELECT * FROM contactenquiery";
    $query=mysqli_query($conn,$sql);
   
    while($arr=mysqli_fetch_array($query))
    {
         $id  =$arr['id'];
         
         $name=$arr['name'];
        
         $email=$arr['email'];
         $phone=$arr['phone'];
         $address=$arr['address'];
        
         
         $message=$arr['message'];
           $course=$arr['course'];
        
         
         $count++;

   
    ?>
        <tr>
      
      <td><?php echo $count?></td>
      <td><?php echo $name?></td>
     
      <td><?php echo $email;?></td>
      <td><?php echo $phone;?></td>
      <td><?php echo $address;?></td>
     
         <td><?php echo $message;?></td>
          <td><?php echo $course;?></td>
     
      
      
      
      <td><a onclick="return confirm('do u want to delete?')" href="dltcontactenquiry.php?id=<?php echo $id;?>"><i class="fa-solid fa-trash text-danger"></i></a></td>
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