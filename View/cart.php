<?php
include_once 'Controller/cart.php';
include_once 'Model/cart.php';
$cart = new cart();

if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Giỏ Hàng </h2>
        <div class="row">
            <div class="col-md-8">
                <?php foreach ($_SESSION['cart'] as $item) { ?>
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img width="100" height="100" src="<?php echo './Content/imagetourdien/' . $item['hinh']; ?>" alt="">
                                </div>
                                <div class="col-md-9">
                                    <h5 class="card-title"><?php echo $item['name']; ?></h5>
                                    <p>Giá: <?php echo '$' . $item['dongia']; ?></p>
                                    <form method="post" action="index.php?action=cart&act=update_quantity">
                                        <input type="hidden" name="mahh" value="<?php echo $item['mahh']; ?>">
                                        <input type="number" name="quantity" value="<?php echo $item['soluong']; ?>" min="1" onchange="this.form.submit()">
                                    </form>
                                    <p> Tổng Giá: <?php echo '$' . $item['total']; ?></p>
                                    <form method="post" action="index.php?action=cart&act=remove_item">
                                        <input type="hidden" name="mahh" value="<?php echo $item['mahh']; ?>">
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hóa Đơn</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Tổng Giá:
                                <span><?php $subtotal = $cart->sub_Total(); echo '$' . $subtotal; ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Số Lượng:
                                <span id="totalItems"><?php echo $cart->getTotalItems(); ?></span>
                            </li>
                        </ul>
                        <button class="btn btn-primary btn-block mt-3" onclick="window.location.href='view/payment.php'">Thanh Toán</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
<?php
} else {
    echo '<p style="font-size: 50px; text-align: center;>Giỏ Hàng Trống, Mời Bạn Mua Hàng</p>';
}
?>
