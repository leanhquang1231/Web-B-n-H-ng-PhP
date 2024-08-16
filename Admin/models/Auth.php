<?php
require_once 'Database.php';

class Auth {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function checkLogin($username, $password) {
        // Truy vấn để lấy thông tin người dùng dựa trên tên đăng nhập
        $sql = "SELECT * FROM nhanvien WHERE username = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            
            // Log để debug (có thể bỏ đi khi sản phẩm đã hoàn thiện)
            error_log("Attempting login for user: " . $username);
            error_log("Stored password hash: " . $user['matkhau']);
            
            // Kiểm tra mật khẩu bằng password_verify
            if (password_verify($password, $user['matkhau'])) {
                error_log("Login successful for user: " . $username);
                return $user;
            } else {
                error_log("Login failed for user: " . $username . " (incorrect password)");
            }
        } else {
            error_log("Login failed: user not found - " . $username);
        }
        
        return false; // Trả về false nếu đăng nhập không thành công
    }
}
