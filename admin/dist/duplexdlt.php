<?php
include "../../db_connect/connection.php";


  $id=$_GET['x'];

$qrry="DELETE FROM  duplex_project WHERE sl_no='$id'";
$result=mysqli_query($conn,$qrry);
  if($result){
   
   
    ?>
  <script>
    alert ("Delete successfully");
  
  </script>
   <?php
  header("Location:duplexgallery.php")
  ?>
<?php
}else{
    echo "unsuccessful";
  }

?>