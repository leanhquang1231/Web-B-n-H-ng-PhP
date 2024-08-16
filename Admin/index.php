<?php


// Bật hiển thị lỗi cho quá trình phát triển
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <link rel="stylesheet" href="../assets/vendor/chartist/css/chartist.min.css">
    <link href="../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php include('views/includes/header.php'); ?>

    <div class="content-body">
        <div class="">
            <div class="row">
                <div class="col-xl-12 col-sm-12">
                    <div class="col-lg-12">
                        <div class="card">
                            <?php include('views/includes/dieuhuong.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">...</a> 2024</p>
        </div>
    </div>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../assets/vendor/global/global.min.js"></script>
    <script src="../assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="../assets/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="../assets/vendor/peity/jquery.peity.min.js"></script>
    <script src="../assets/vendor/apexchart/apexchart.js"></script>
    <script src="../assets/js/dashboard/dashboard-1.js"></script>
    <script src="../assets/vendor/owl-carousel/owl.carousel.js"></script>
    <script src="../assets/js/custom.min.js"></script>
    <script src="../assets/js/deznav-init.js"></script>
    <script src="../assets/js/demo.js"></script>
    <script src="../assets/js/styleSwitcher.js"></script>
</body>
</html>
