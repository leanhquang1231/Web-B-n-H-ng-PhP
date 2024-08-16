<?php
require_once 'Model/payment.php';
require_once 'Model/cart.php';

class PaymentController {
    private $paymentModel;

    public function __construct() {
        $this->paymentModel = new PaymentModel();
    }

    public function showPaymentPage() {
        include 'View/payment.php';
    }

    public function processPayment() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $makh = $_POST['makh'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];

            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                $cart = new Cart();
                $tongtien = $cart->sub_Total();

                $masohd = $this->paymentModel->createOrder($makh, $tongtien, $name, $address, $phone);

                if ($masohd) {
                    // Clear the cart after successful payment
                    unset($_SESSION['cart']);

                    // Redirect to a thank you page or order confirmation page
                    header("Location: index.php?action=thank_you&masohd=" . $masohd);
                    exit();
                } else {
                    // Handle order creation failure
                    header("Location: index.php?action=payment&error=order_failed");
                    exit();
                }
            } else {
                // Handle empty cart
                header("Location: index.php?action=cart&error=empty_cart");
                exit();
            }
        }
    }
}
?>
