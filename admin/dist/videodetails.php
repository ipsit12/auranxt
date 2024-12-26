<?php
include "../../db_connect/connection.php";
include "include/header.php";

?>

<?php
if (isset($_POST['submit'])) {
 
    $r = $_FILES['txtImageUpload']['tmp_name'];
    $r_type = $_FILES['txtImageUpload']['type'];
    $r_size = $_FILES['txtImageUpload']['size'];
    $r_name = $_FILES['txtImageUpload']['name'];
   
    if ($r_type == 'video/mp4' || $r_type == 'video/ogg') {
        //   here is the path of image
        $path = "gallery_image/" . $r_name;
        $upload = move_uploaded_file($r, $path);
       


        $sql = "INSERT INTO `video`(`video`) VALUES ('$r_name')";


        $res = mysqli_query($conn, $sql);
        if ($res) {
?>
            <script>
                alert("data inserted successfully");
            </script>
        <?php
            // header("Location:videodetails.php");
        } else {
        ?>
            <script>
                alert("data failed to insert");
            </script>
<?php
        }
    }
}

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    @import "font-awesome.min.css";
    @import "font-awesome-ie7.min.css";

    /* Space out content a bit */
    body {
        padding-top: 20px;
        padding-bottom: 20px;

    }

    /* Everything but the jumbotron gets side spacing for mobile first views */
    .header,
    .marketing,
    .footer {
        padding-right: 15px;
        padding-left: 15px;
    }

    /* Custom page header */
    .header {
        border-bottom: 1px solid #e5e5e5;
    }

    /* Make the masthead heading the same height as the navigation */
    .header h3 {
        padding-bottom: 19px;
        margin-top: 0;
        margin-bottom: 0;
        line-height: 40px;
    }

    /* Custom page footer */
    .footer {
        padding-top: 19px;
        color: #777;
        border-top: 1px solid #e5e5e5;
    }

    /* Customize container */
    @media (min-width: 768px) {
        .container {
            max-width: 730px;
        }
    }

    .container-narrow>hr {
        margin: 30px 0;
    }

    /* Main marketing message and sign up button */
    .jumbotron {
        text-align: center;
        border-bottom: 1px solid #e5e5e5;
    }

    .jumbotron .btn {
        padding: 14px 24px;
        font-size: 21px;
    }

    /* Supporting marketing content */
    .marketing {
        margin: 40px 0;
    }

    .marketing p+h4 {
        margin-top: 28px;
    }

    /* Responsive: Portrait tablets and up */
    @media screen and (min-width: 768px) {

        /* Remove the padding we set earlier */
        .header,
        .marketing,
        .footer {
            padding-right: 0;
            padding-left: 0;
        }

        /* Space out the masthead */
        .header {
            margin-bottom: 30px;
        }

        /* Remove the bottom border on the jumbotron for visual effect */
        .jumbotron {
            border-bottom: 0;
        }
    }
</style>

<body>
    
    <div class="container">
        <h1 class="well">Video Form</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form method="post" enctype="multipart/form-data">
                    <div class="col-sm-12">


                        <div class="row">

                            <div class="col-sm-6 form-group">
                                <label>Video</label>
                                <input type="file" name="txtImageUpload"  class="form-control">
                            </div>
                        </div>

                        <button type="submit" name="submit" class="btn btn-lg btn-info">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>


<table class="table ">
  <thead>
    <tr>
    <th scope="col">Sl No</th>
      
      <th scope="col">Video</th>
     
      
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- <a href="commercialgalleryAdd.php" class="ml-3"><button class="btn btn-success text-white ">Add</button></a> -->
  <?php
    $count=0;
    $sql="SELECT * FROM video";
    $query=mysqli_query($conn,$sql);
   
    while($arr=mysqli_fetch_array($query))
    {
         $id  =$arr['id'];
         
         
         $a_name=$arr['video'];
         
         $count++;

   
    ?>
        <tr>
      
      <td><?php echo $count?></td>
      
      <td><video controls style="width:300px;">
        <source src="gallery_image/<?php echo $a_name;?>"></source>
      </video> </td>
     
      
      <td><a onclick="return confirm('do u want to delete?')" href="videodlt.php?x=<?php echo $id;?>"><i class="fa-solid fa-trash text-danger"></i></a></td>
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