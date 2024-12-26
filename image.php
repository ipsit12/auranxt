<?php
include "db_connect/connection.php";
include "include/header.php";
?>
<!--=================================
    Right menu -->

<!--=================================
    Right menu -->
<!--=================================
    banner -->

<!--=================================
    banner -->
<!--=================================
    Gallery -->
<style>
    body {

        font-family: "Asap", sans-serif;

        margin: 10px;
        font-size: 16px;
    }

    #demo {
        height: 100%;
        position: relative;
        overflow: hidden;
    }


    .green {}

    .thumb {
        margin-bottom: 30px;
    }

    .page-top {
        margin-top: 85px;
    }


    img.zoom {
        width: 100%;
        height: 200px;
        border-radius: 5px;
        object-fit: cover;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
    }


    .transition {
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
    }

    .modal-header {

        border-bottom: none;
    }

    .modal-title {}

    .modal-footer {
        display: none;
    }
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->




<!-- Page Content -->
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
                    <img src="admin/dist/gallery_image/<?php echo $r_name; ?>" class="zoom img-fluid" alt="">
                </a>

                </a>
            </div>




        <?php
        }
        ?>


    </div>




</div>

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
<?php
include "include/footer.php";
?>