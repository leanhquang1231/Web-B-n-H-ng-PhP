<?php
require_once 'Database.php';

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllUsers()
    {
        $conn = $this->db->getConnection();
        $sql = "SELECT * FROM khachhang";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $users = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $users;
    }

    public function getUserById($makh)
    {
        $conn = $this->db->getConnection();
        $sql = "SELECT * FROM khachhang WHERE makh = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $makh);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
        return $user;
    }

    public function addUser($tenkh, $username, $matkhau, $email, $diachi, $sodienthoai)
    {
        $conn = $this->db->getConnection();
        $sql = "INSERT INTO khachhang (tenkh, username, matkhau, email, diachi, sodienthoai) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssss', $tenkh, $username, $matkhau, $email, $diachi, $sodienthoai);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    public function updateUser($makh, $tenkh, $username, $matkhau, $email, $diachi, $sodienthoai)
    {
        $conn = $this->db->getConnection();
        $sql = "UPDATE khachhang SET tenkh = ?, username = ?, matkhau = ?, email = ?, diachi = ?, sodienthoai = ? WHERE makh = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssssi', $tenkh, $username, $matkhau, $email, $diachi, $sodienthoai, $makh);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    public function deleteUser($makh)
    {
        $conn = $this->db->getConnection();
        $sql = "DELETE FROM khachhang WHERE makh = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $makh);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
}
?>
