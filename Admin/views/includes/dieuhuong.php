<?php
// Get the 'page' parameter from the URL, default to an empty string if not set
$page = isset($_GET['page']) ? $_GET['page'] : '';

// Include the common header and navigation if needed

// Use a switch statement to include the appropriate file based on the 'page' parameter
switch ($page) {
    case 'quanlysanpham':
        // Show the product management page
        include 'views/products/index.php'; // This will include the modal forms for add/edit/delete
        break;

    case 'quanlynhanvien':
        include 'views/nhanvien/index.php';
        break;

    case 'quanlyloaisanpham':
        include 'views/products/categories.php';
        break;

    case 'quanlyhoadon':
        include 'views/orders/index.php';
        break;

    case 'quanlykhachhang':
        include 'views/users/index.php';
        break;

    default:
        echo "Trang không tồn tại.";
        break;
}

// Include the common footer if needed
?>
