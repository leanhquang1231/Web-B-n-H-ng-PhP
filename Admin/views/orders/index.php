<?php
require_once 'controllers/OrderController.php';

$orderController = new OrderController();
$orders = $orderController->displayOrders();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách đơn hàng</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
        }

        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #ffffff;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ecf0f1;
        }

        th {
            background-color: #3498db;
            color: white;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f5f7fa;
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
            
            table {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Danh sách đơn hàng</h1>

        <?php if (!empty($orders)): ?>
            <table>
                <thead>
                    <tr>
                        <th>Mã số hóa đơn</th>
                        <th>Mã hàng hóa</th>
                        <th>Tên khách hàng</th>
                        <th>Số lượng mua</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Thành tiền</th>
                        <th>Tình trạng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($order['masohd']); ?></td>
                            <td><?php echo htmlspecialchars($order['mahh']); ?></td>
                            <td><?php echo htmlspecialchars($order['tenKH']); ?></td>
                            <td><?php echo htmlspecialchars($order['soluongmua']); ?></td>
                            <td><?php echo htmlspecialchars($order['diachi']); ?></td>
                            <td><?php echo htmlspecialchars($order['sodienthoai']); ?></td>
                            <td><?php echo htmlspecialchars($order['thanhtien']); ?></td>
                            <td><?php echo htmlspecialchars($order['tinhtrang']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Không có hóa đơn nào.</p>
        <?php endif; ?>
    </div>
</body>
</html>