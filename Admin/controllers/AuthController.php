<?php
require_once 'models/Auth.php';

class AuthController {
    private $authModel;

    public function __construct() {
        $this->authModel = new Auth();
    }

    public function login() {
        session_start(); // Bắt đầu session để quản lý thông tin người dùng
        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            // Kiểm tra đăng nhập
            $user = $this->authModel->checkLogin($username, $password);

            if ($user) {
                // Đăng nhập thành công
                $_SESSION['user_id'] = $user['idnv'];
                $_SESSION['username'] = $user['username'];
                header('Location: index.php?page=quanlysanpham');
                exit;
            } else {
                // Đăng nhập thất bại
                $error = 'Tên đăng nhập hoặc mật khẩu không đúng';
            }
        }

        // Hiển thị form đăng nhập
        require_once 'views/auth/login.php';
    }

    // Các phương thức khác nếu cần...
}
