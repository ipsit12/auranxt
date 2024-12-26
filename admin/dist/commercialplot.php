<?php
include "../../db_connect/connection.php";
include "include/header.php";

?>
<table class="table ">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Location</th>
      <th scope="col">Plot</th>
      <th scope="col">Frontroad</th>
      <th scope="col">Facing</th>
      <th scope="col">Approval</th>
      <th scope="col">Dimension</th>
      <th scope="col">Price</th>
      <th scope="col">Negotiable</th>
      <th scope="col">Description</th>
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- <a href="commercialgalleryAdd.php" class="ml-3"><button class="btn btn-success text-white ">Add</button></a> -->
  <?php
    $count=0;
    $sql="SELECT * FROM commercial_plot";
    $query=mysqli_query($conn,$sql);
   
    while($arr=mysqli_fetch_array($query))
    {
         $id  =$arr['id'];
         
         $name=$arr['Name'];
         $image=$arr['image'];
         $location=$arr['Location'];
         $plot=$arr['plot'];
         $frontroad  =$arr['frontroad'];
         $facing=$arr['facing'];
         $approval=$arr['approval'];
         $dimension  =$arr['dimension'];
         $price=$arr['price'];
         $negotiable=$arr['negotiable'];
         $description=$arr['description'];
       
         $count++;

   
    ?>
        <tr>
      
      <td><?php echo $count?></td>
      <td><?php echo $name;?></td>
      <td><img src="../../gallery_image/<?php echo $image;?>" width="50px"alt=""></td>
      <td><?php echo $location;?></td>
      <td><?php echo $plot;?></td>
      <td><?php echo $frontroad;?></td>
      <td><?php echo $facing;?></td>
      <td><?php echo $approval;?></td>
      <td><?php echo $dimension ;?></td>
      <td><?php echo $price;?></td>
      <td><?php echo $negotiable;?></td>
      <td><?php echo $description;?></td>
      
      <td><a onclick="return confirm('do u want to delete?')" href="commercialplotdlt.php?x=<?php echo $id;?>"><i class="fa-solid fa-trash text-danger"></i></a></td>
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