<?php
require_once 'Database.php';

class Order
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllOrders()
    {
        $sql = "SELECT * FROM cthoadon";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function getOrderById($masohd)
    {
        $sql = "SELECT * FROM cthoadon WHERE masohd = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('i', $masohd);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function addOrder($data)
    {
        $sql = "INSERT INTO cthoadon (mahh, tenKH, soluongmua, diachi, sodienthoai, thanhtien, tinhtrang) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('issssis', $data['mahh'], $data['tenKH'], $data['soluongmua'], $data['diachi'], $data['sodienthoai'], $data['thanhtien'], $data['tinhtrang']);
        return $stmt->execute();
    }

    public function updateOrder($masohd, $data)
    {
        $sql = "UPDATE cthoadon SET mahh = ?, tenKH = ?, soluongmua = ?, diachi = ?, sodienthoai = ?, thanhtien = ?, tinhtrang = ? WHERE masohd = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('issssisi', $data['mahh'], $data['tenKH'], $data['soluongmua'], $data['diachi'], $data['sodienthoai'], $data['thanhtien'], $data['tinhtrang'], $masohd);
        return $stmt->execute();
    }

    public function deleteOrder($masohd)
    {
        $sql = "DELETE FROM cthoadon WHERE masohd = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('i', $masohd);
        return $stmt->execute();
    }
}
?>
