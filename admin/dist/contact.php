<?php
include "../../db_connect/connection.php";
include "include/header.php";

?>
<table class="table ">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Name</th>
      <th scope="col">Mail</th>
      <th scope="col">Number</th>
     
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $count=0;
    $sql="SELECT * FROM contact";
    $query=mysqli_query($conn,$sql);
   
    while($arr=mysqli_fetch_array($query))
    {
         $sl_no =$arr['id'];
         $user_name=$arr['name'];
         $user_mail=$arr['email'];
         $user_phone=$arr['phone'];
         $user_subject=$arr['comment'];
         
         $count++;

   
    ?>
        <tr>
      
        <td><?php echo $count?></td>
      <td><?php echo $user_name;?></td>
      <td><?php echo $user_mail;?></td>
      <td><?php echo $user_phone;?></td>
      <td><?php echo $user_subject;?></td>
     
      <td><a onclick="return confirm('do u want to delete?')" href="dlt.php?id=<?php echo $sl_no;?>"><i class="fa-solid fa-trash text-danger"></i></a></td>
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