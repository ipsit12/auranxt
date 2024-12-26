<?php
include "../../db_connect/connection.php";

  $id=$_GET['id'];

$qry="DELETE FROM jobportal WHERE id='$id'";
$result=mysqli_query($conn,$qry);
  if($result){
   
    ?>
  <script>
    alert ("Deleted successfully");
  
  </script>
  <?php
  header("Location:jobportal.php")
  ?>
<?php
}else{
    echo "unsuccessful";
  }

?>