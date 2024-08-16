<?php
class CheckoutController {
    public function index() {
        // Chuyển hướng sang trang thanh toán
        header("Location: index.php?action=payment");
        exit();
    }
}
?>
