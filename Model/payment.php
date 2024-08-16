<?php
class PaymentModel {
    private $db;

    public function __construct() {
        try {
            // Adjust the login credentials to match your MySQL configuration
            $this->db = new PDO('mysql:host=localhost;dbname=mixue', 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }

    public function createOrder($makh, $tongtien, $name, $address, $phone) {
        try {
            $sql = "INSERT INTO hoadon (makh, ngaydat, tongtien, name, address, phone) VALUES (:makh, NOW(), :tongtien, :name, :address, :phone)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([
                ':makh' => $makh,
                ':tongtien' => $tongtien,
                ':name' => $name,
                ':address' => $address,
                ':phone' => $phone
            ]);
            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            echo "Order creation failed: " . $e->getMessage();
            return false;
        }
    }
}
?>
