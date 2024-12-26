<?php
include "include/connection.php";


  $sl_no=$_GET['x'];

$qrry="DELETE FROM  land_property WHERE sl_no='$sl_no'";
$result=mysqli_query($conn,$qrry);
  if($result){
   
   
    ?>
  <script>
    alert ("Delete successfully");
  
  </script>
<?php
}else{
    echo "unsuccessful";
  }

?>