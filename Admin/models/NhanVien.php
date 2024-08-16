<?php
require_once 'Database.php';

class NhanVien {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM nhanvien";
        $result = $this->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM nhanvien WHERE idnv = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function create($data) {
        $query = "INSERT INTO nhanvien (hoten, dia, username, matkhau) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssss", $data['hoten'], $data['dia'], $data['username'], $data['matkhau']);
        $stmt->execute();
    }

    public function update($id, $data) {
        $query = "UPDATE nhanvien SET hoten = ?, dia = ?, username = ?, matkhau = ? WHERE idnv = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssi", $data['hoten'], $data['dia'], $data['username'], $data['matkhau'], $id);
        $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM nhanvien WHERE idnv = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
?>
