<?php
require_once 'controllers/UserController.php';

$userController = new UserController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $userController->addUser($_POST);
    } elseif (isset($_POST['update'])) {
        $userController->updateUser($_POST['makh'], $_POST);
    } elseif (isset($_POST['delete'])) {
        $userController->deleteUser($_POST['makh']);
    }
}

$users = $userController->getUsers();
$editUser = null;
if (isset($_GET['edit'])) {
    $editUser = $userController->getUser($_GET['edit']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
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
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 8px;
}

h1 {
    color: #2c3e50;
    text-align: center;
    margin-bottom: 30px;
    font-size: 2.5em;
}

button {
    background-color: #3498db;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #2980b9;
}

.form-popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    border-radius: 8px;
    width: 400px;
    z-index: 1000;
}

.form-popup form {
    display: flex;
    flex-direction: column;
}

.form-popup form input,
.form-popup form label {
    margin-bottom: 15px;
}

.form-popup form input {
    padding: 10px;
    border: 1px solid #bdc3c7;
    border-radius: 4px;
    font-size: 16px;
}

.form-popup .close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    cursor: pointer;
    color: #7f8c8d;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.2);
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

a {
    color: #3498db;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

form button {
    background-color: #e74c3c;
    padding: 8px 15px;
    font-size: 14px;
}

form button:hover {
    background-color: #c0392b;
}

@media (max-width: 768px) {
    .container {
        padding: 10px;
    }
    
    .form-popup {
        width: 90%;
    }
    
    table {
        font-size: 14px;
    }
}
    </style>
</head>
<body>
    <h1>Danh sách người dùng</h1>
    <button onclick="openForm()">Thêm người dùng</button>

    <div id="userForm" class="form-popup">
        <form method="POST">
            <span class="close" onclick="closeForm()">&times;</span>
            <input type="hidden" name="makh" value="<?php echo $editUser['makh'] ?? ''; ?>">
            <label for="tenkh">Tên khách hàng:</label>
            <input type="text" name="tenkh" value="<?php echo $editUser['tenkh'] ?? ''; ?>" required>
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?php echo $editUser['username'] ?? ''; ?>" required>
            <label for="matkhau">Mật khẩu:</label>
            <input type="password" name="matkhau" value="<?php echo $editUser['matkhau'] ?? ''; ?>" required>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $editUser['email'] ?? ''; ?>" required>
            <label for="diachi">Địa chỉ:</label>
            <input type="text" name="diachi" value="<?php echo $editUser['diachi'] ?? ''; ?>">
            <label for="sodienthoai">Số điện thoại:</label>
            <input type="text" name="sodienthoai" value="<?php echo $editUser['sodienthoai'] ?? ''; ?>">
            <button type="submit" name="<?php echo isset($editUser) ? 'update' : 'add'; ?>">
                <?php echo isset($editUser) ? 'Cập nhật' : 'Thêm'; ?>
            </button>
        </form>
    </div>

    <?php if (!empty($users)): ?>
        <table>
            <thead>
                <tr>
                    <th>Mã khách hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['makh']); ?></td>
                        <td><?php echo htmlspecialchars($user['tenkh']); ?></td>
                        <td><?php echo htmlspecialchars($user['username']); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                        <td><?php echo htmlspecialchars($user['diachi']); ?></td>
                        <td><?php echo htmlspecialchars($user['sodienthoai']); ?></td>
                        <td>
                            <form method="POST" style="display:inline-block">
                                <input type="hidden" name="makh" value="<?php echo htmlspecialchars($user['makh']); ?>">
                                <button type="submit" name="delete" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Không có người dùng nào.</p>
    <?php endif; ?>

    <script>
        function openForm() {
            document.getElementById("userForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("userForm").style.display = "none";
        }

        function editUser(makh) {
            openForm();
            window.history.pushState({}, '', '?edit=' + makh);
        }

        <?php if (isset($editUser)): ?>
        window.onload = function() {
            openForm();
        };
        <?php endif; ?>
    </script>
</body>
</html>
