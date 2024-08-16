<?php
require_once 'models/Order.php';

class OrderController
{
    private $orderModel;

    public function __construct()
    {
        $this->orderModel = new Order();
    }

    public function displayOrders()
    {
        return $this->orderModel->getAllOrders();
    }

    public function getOrder($masohd)
    {
        return $this->orderModel->getOrderById($masohd);
    }

    public function handleAddOrder()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'mahh' => $_POST['mahh'],
                'tenKH' => $_POST['tenKH'],
                'soluongmua' => $_POST['soluongmua'],
                'diachi' => $_POST['diachi'],
                'sodienthoai' => $_POST['sodienthoai'],
                'thanhtien' => $_POST['thanhtien'],
                'tinhtrang' => $_POST['tinhtrang']
            ];

            if ($this->orderModel->addOrder($data)) {
                echo json_encode(['success' => true, 'message' => 'Thêm đơn hàng thành công']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Thêm đơn hàng thất bại']);
            }
            exit;
        }
    }

    public function handleEditOrder($masohd)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'mahh' => $_POST['mahh'],
                'tenKH' => $_POST['tenKH'],
                'soluongmua' => $_POST['soluongmua'],
                'diachi' => $_POST['diachi'],
                'sodienthoai' => $_POST['sodienthoai'],
                'thanhtien' => $_POST['thanhtien'],
                'tinhtrang' => $_POST['tinhtrang']
            ];

            if ($this->orderModel->updateOrder($masohd, $data)) {
                echo json_encode(['success' => true, 'message' => 'Cập nhật đơn hàng thành công']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Cập nhật đơn hàng thất bại']);
            }
            exit;
        }

        return $this->orderModel->getOrderById($masohd);
    }

    public function handleDeleteOrder($masohd)
    {
        if ($this->orderModel->deleteOrder($masohd)) {
            echo json_encode(['success' => true, 'message' => 'Xóa đơn hàng thành công']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Xóa đơn hàng thất bại']);
        }
        exit;
    }
}
?>
