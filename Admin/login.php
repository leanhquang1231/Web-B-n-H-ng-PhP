<?php
require_once 'controllers/AuthController.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $auth = new AuthController();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $auth->login($username, $password);

    if (isset($_SESSION['error'])) {
        $error = $_SESSION['error'];
        unset($_SESSION['error']);
    }
}

require_once 'views/auth/login.php';
?>
