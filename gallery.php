<?php
include "db_connect/connection.php";
include "include/header.php"
?>
<style>
    .button-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        padding: 20px;

        /* Adjust this value as needed */
    }

    /* Adjust button styles for responsiveness if necessary */
    @media (max-width: 768px) {
        .button-container {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" id="gallery-breadcrumb" style="background-image:url(https://weareadaptive.com/wp-content/uploads/2020/12/Acceptance-testing-image-scaled.jpg);">
        <div class="container position-absolute" id="gallery-container">
            <h2>Gallery</h2>
        </div>
    </div>
    <div class="breadcrumb-bottom" id="gallery-breadcrumb-bottom" >
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Gallery</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="button-container d-flex align-items-center gap-2">
    <button class="btn btn-success" onclick="openData('data1')">IMAGE</button>
    <button class="btn btn-success" onclick="openData('data2')">VIDEO</button>
</div>

<div id="data1" style="display: none;">
    <!-- Data 1 content goes here -->
    <div class="container page-top">



        <div class="row">
            <?php
            $sql = "SELECT * FROM gallery";

            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($query)) {
                $r_name = $row['image'];

            ?>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="admin/dist/gallery_image/<?php echo $r_name; ?>" class="fancybox" rel="ligthbox">
                        <img src="admin/dist/gallery_image/<?php echo $r_name; ?>" class="zoom img-fluid" style="width:300px;height:300px;" alt="">
                    </a>

                    </a>
                </div>




            <?php
            }
            ?>


        </div>




    </div>
</div>


   <div id="data2" style="display: none;">
    <!-- Data 1 content goes here -->
    <div class="container page-top">



        <div class="row">
            <?php
            $sql1 = "SELECT * FROM video";

            $query1 = mysqli_query($conn, $sql1);

            while ($row = mysqli_fetch_assoc($query1)) {
                $a_name = $row['video'];

            ?>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <video controls style="width:500px;">
        <source src="admin/dist/gallery_image/<?php echo $a_name;?>"></source>
      </video>
                </div>




            <?php
            }
            ?>


        </div>




   
</div>
</div>
<script>
    function openData(id) {
        // Hide all data elements
        var allData = document.querySelectorAll("[id^='data']");
        allData.forEach(function(data) {
            data.style.display = 'none';
        });

        // Show the selected data element
        var selectedData = document.getElementById(id);
        selectedData.style.display = 'block';
    }
</script>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
</script>
<?php
include "include/footer.php"
?>