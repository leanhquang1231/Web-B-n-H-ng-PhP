
<?php
session_start();
include_once __DIR__ . '/../Model/connect.php';
include_once __DIR__ . '/../Model/cart.php';

$db = new connect();
$cart = new cart();

if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
    header("Location: ../index.php?action=cart");
    exit();
}

$total = $cart->sub_Total();
$success_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $db->db->beginTransaction(); // Start transaction

        // Insert invoice information
        $makh = isset($_SESSION['makh']) ? $_SESSION['makh'] : 0;
        $tenKH = $_POST['tenKH']; // Get customer name from the form
        $query = "INSERT INTO hoadon (makh, ngaydat, tongtien) VALUES (:makh, NOW(), :tongtien)";
        $stmt = $db->execP($query);
        $stmt->execute([
            ':makh' => $makh,
            ':tongtien' => $total
        ]);
        
        $masohd = $db->db->lastInsertId(); // Get last inserted ID

        // Insert invoice details into `cthoadon` table
        $diachi = $_POST['diachi'];
        $sodienthoai = $_POST['sodienthoai'];
        
        foreach ($_SESSION['cart'] as $item) {
            $mahh = $item['mahh'];
            $soluongmua = $item['soluong'];
            $thanhtien = $item['total'];
            
            $query = "INSERT INTO cthoadon (masohd, mahh, tenKH, soluongmua, diachi, sodienthoai, thanhtien, tinhtrang) 
                      VALUES (:masohd, :mahh, :tenKH, :soluongmua, :diachi, :sodienthoai, :thanhtien, 0)";
            $stmt = $db->execP($query);
            $stmt->execute([
                ':masohd' => $masohd,
                ':mahh' => $mahh,
                ':tenKH' => $tenKH, // Insert customer name
                ':soluongmua' => $soluongmua,
                ':diachi' => $diachi,
                ':sodienthoai' => $sodienthoai,
                ':thanhtien' => $thanhtien
            ]);
        }

        $db->db->commit(); // Commit transaction
        unset($_SESSION['cart']);
        $_SESSION['success_message'] = "Đã mua hàng thành công! Mã số hóa đơn của bạn là: $masohd";
        header("Location: success.php"); // Redirect to success page
        exit();
    } catch (Exception $e) {
        $db->db->rollback(); // Rollback transaction on error
        $error = "Lỗi: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thanh Toán</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

.container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    padding: 30px;
}

h2 {
    color: #2c3e50;
    border-bottom: 2px solid #3498db;
    padding-bottom: 10px;
}

h3 {
    color: #2980b9;
    margin-top: 20px;
}

.table {
    border-collapse: separate;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
}

.table th, .table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.table thead {
    background-color: #3498db;
    color: white;
}

.table tbody tr:hover {
    background-color: #f5f5f5;
}

.form-group label {
    font-weight: bold;
    color: #34495e;
}

.form-control {
    border-radius: 4px;
    border: 1px solid #bdc3c7;
    padding: 10px;
    margin-bottom: 15px;
}

.form-control:focus {
    border-color: #3498db;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
}

.btn-primary {
    background-color: #3498db;
    border: none;
    padding: 12px;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #2980b9;
}

.alert {
    border-radius: 4px;
    padding: 15px;
    margin-bottom: 20px;
}

.alert-danger {
    background-color: #e74c3c;
    border-color: #c0392b;
    color: white;
}

@media (max-width: 768px) {
    .col-md-8, .col-md-4 {
        margin-bottom: 20px;
    }
}
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Thanh Toán</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="post">
            <div class="row">
                <div class="col-md-8">
                    <h3>Chi tiết đơn hàng</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($_SESSION['cart'] as $item): ?>
                                <tr>
                                    <td><?php echo $item['name']; ?></td>
                                    <td><?php echo $item['soluong']; ?></td>
                                    <td>$<?php echo number_format((float)str_replace(',', '', $item['dongia']), 2); ?></td>
                                    <td>$<?php echo number_format((float)str_replace(',', '', $item['total']), 2); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="3">Tổng cộng</th>
                                <th>$<?php echo number_format((float)str_replace(',', '', $total), 2); ?></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="col-md-4">
                    <h3>Thông tin giao hàng</h3>
                    <div class="form-group">
                        <label for="tenKH">Tên Khách Hàng:</label>
                        <input type="text" class="form-control" id="tenKH" name="tenKH" required>
                    </div>
                    <div class="form-group">
                        <label for="diachi">Địa chỉ:</label>
                        <input type="text" class="form-control" id="diachi" name="diachi" required>
                    </div>
                    <div class="form-group">
                        <label for="sodienthoai">Số điện thoại:</label>
                        <input type="tel" class="form-control" id="sodienthoai" name="sodienthoai" required>
                    </div>
                    <div class="form-group">
                        <label for="total">Tổng thanh toán:</label>
                        <input type="text" class="form-control" id="total" value="$<?php echo number_format((float)str_replace(',', '', $total), 2); ?>" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Xác nhận thanh toán</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
