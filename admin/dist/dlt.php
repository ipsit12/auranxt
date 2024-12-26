<?php
include "../../db_connect/connection.php";

  $id=$_GET['id'];

$qry="DELETE FROM contact WHERE id='$id'";
$result=mysqli_query($conn,$qry);
  if($result){
   
    ?>
  <script>
    alert ("Deleted successfully");
  
  </script>
  <?php
  header("Location:contact.php")
  ?>
<?php
}else{
    echo "unsuccessful";
  }

?>