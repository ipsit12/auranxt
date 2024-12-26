<?php
$Server = "localhost";
$username = "auranxt1";
$password = "auranxt1@123";
$db = "auranxt1";
$conn = mysqli_connect($Server,$username,$password,$db);
if($conn){
    // echo "";
}
else{
    echo "not_connected";
}
?>