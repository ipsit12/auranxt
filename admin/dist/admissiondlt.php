<?php
include "../../db_connect/connection.php";


  $id=$_GET['x'];

$qrry="DELETE FROM  admission WHERE id='$id'";
$result=mysqli_query($conn,$qrry);
  if($result){
   
   
    ?>
  <script>
    alert ("Delete successfully");
  
  </script>
   <?php
  header("Location:admissiondetails.php")
  ?>
<?php
}else{
    echo "unsuccessful";
  }

?>