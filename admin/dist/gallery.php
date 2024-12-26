<?php
include "../../db_connect/connection.php";
?>
<?php
if (isset($_POST['submit'])) {
    $r = $_FILES['txtImageUpload']['tmp_name'];
    $r_type = $_FILES['txtImageUpload']['type'];
    $r_size = $_FILES['txtImageUpload']['size'];
    $r_name = $_FILES['txtImageUpload']['name'];
    if ($r_type == 'image/jpg' || $r_type == 'image/jpeg' || $r_type == 'image/png' || $r_type == 'image/gif' || $r_type == 'image/webp') {
        //   here is the path of image
        $path = "gallery_image/" . $r_name;
        $upload = move_uploaded_file($r, $path);
       


        $sql = "INSERT INTO `gallery`( `image`) VALUES ('$r_name')";


        $res = mysqli_query($conn, $sql);
        if ($res == true) {
?>
            <script>
                alert("data inserted successfully");
            </script>
        <?php
            header("Location:gallery.php");
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
    <a href="gallerydetails.php"><button class="btn btn-primary text-white">Back</button></a>
    <div class="container">
        <h1 class="well">Gallery Form</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form method="post" enctype="multipart/form-data">
                    <div class="col-sm-12">


                        <div class="row">

                            <div class="col-sm-6 form-group">
                                <label>Image</label>
                                <input type="file" name="txtImageUpload" placeholder="passport size image" class="form-control">
                            </div>
                        </div>

                        <button type="submit" name="submit" class="btn btn-lg btn-info">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
