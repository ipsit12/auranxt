<?php
include "../../db_connect/connection.php";
include "include/header.php";

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Joining Date</th>
      <th scope="col">Course</th>
      <th scope="col">Location</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $count = 0;
    // Corrected SQL query with single quotes around 'Bhubaneswar'
    $sql = "SELECT * FROM proenquiry WHERE Location = 'Berhampur'";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
      die("SQL Error: " . mysqli_error($conn)); // Add error handling
    }

    while ($arr = mysqli_fetch_array($query)) {
      $id = $arr['id'];
      $name = $arr['name'];
      $email = $arr['email'];
      $phone = $arr['mobile'];
      $subject = $arr['address'];
      $date = $arr['date'];
      $comment = $arr['course'];
      $location = $arr['Location'];

      $count++;
    ?>
      <tr>
        <td><?php echo $count ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $phone; ?></td>
        <td><?php echo $subject; ?></td>
        <td><?php echo $date ?></td>
        <td><?php echo $comment; ?></td>
        <td><?php echo $location; ?></td>
        <td><a onclick="return confirm('Do you want to delete?')" href="enquiry.php?x=<?php echo $id; ?>"><i class="fa-solid fa-trash text-danger"></i></a></td>
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
