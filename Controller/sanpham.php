 <?php
    // controller điều phối đến view tên là sản phẩm
    $act="sanpham";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];//sanphamkhuyenmai
    }
    switch ($act) {
        case 'sanpham':
            include_once "./View/sanpham.php";
            break;

        case 'sanphamkhuyenmai':
            include_once "./View/sanpham.php";
            break;

        case 'sanphamchitiet':
            include_once "./View/sanphamchitiet.php";
            break;
    }
?>  
<?php
    include_once "./View/sanpham.php";
?>