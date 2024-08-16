<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$act = isset($_GET['act']) ? $_GET['act'] : "cart";

include_once 'Model/cart.php';
$cart = new cart();

switch ($act) {
    case 'cart':
        include_once "./View/cart.php";
        break;

    case 'cart_action':
        if (isset($_POST['mahh'], $_POST['soluong'], $_POST['dongia'])) {
            $id = $_POST['mahh'];
            $soluong = $_POST['soluong'];
            $dongia = $_POST['dongia'];
            $totalItems = $cart->addToCart($id, $soluong, $dongia);

            echo "<script>window.location.href = 'index.php?action=cart';</script>";
            exit;
        }
        break;

    case 'remove_item':
        if (isset($_POST['mahh'])) {
            $cart->removeFromCart($_POST['mahh']);
            echo "<script>window.location.href = 'index.php?action=cart';</script>";
            exit;
        }
        break;

    case 'update_quantity':
        if (isset($_POST['mahh'], $_POST['quantity'])) {
            $cart->updateQuantity($_POST['mahh'], $_POST['quantity']);
            echo "<script>window.location.href = 'index.php?action=cart';</script>";
            exit;
        }
        break;

    default:
        include_once "./View/cart.php";
        break;
}
?>