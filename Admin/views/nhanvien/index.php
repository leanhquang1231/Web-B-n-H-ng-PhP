<?php
require_once 'controllers/NhanVienController.php';

$nhanVienController = new NhanVienController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $nhanVienController->addNhanVien($_POST);
    } elseif (isset($_POST['update'])) {
        $nhanVienController->updateNhanVien($_POST['idnv'], $_POST);
    } elseif (isset($_POST['delete'])) {
        $nhanVienController->deleteNhanVien($_POST['idnv']);
    }
}

$nhanViens = $nhanVienController->getNhanViens();
$editNhanVien = null;
if (isset($_GET['edit'])) {
    $editNhanVien = $nhanVienController->getNhanVien($_GET['edit']);
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhân viên</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        /* ... (giữ nguyên phần CSS) ... */
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
    <h1>Danh sách nhân viên</h1>
    <button onclick="openForm()">Thêm nhân viên</button>

    <div id="nhanVienForm" class="form-popup">
        <form method="POST">
            <span class="close" onclick="closeForm()">&times;</span>
            <input type="hidden" id="idnv" name="idnv" value="">
            <label for="hoten">Họ tên:</label>
            <input type="text" id="hoten" name="hoten" required>
            <label for="dia">Địa chỉ:</label>
            <input type="text" id="dia" name="dia" required>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="matkhau">Mật khẩu:</label>
            <input type="password" id="matkhau" name="matkhau" required>
            <button type="submit" id="submitBtn" name="add">Thêm</button>
        </form>
    </div>

    <?php if (!empty($nhanViens)): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Địa chỉ</th>
                    <th>Username</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($nhanViens as $nhanVien): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($nhanVien['idnv']); ?></td>
                        <td><?php echo htmlspecialchars($nhanVien['hoten']); ?></td>
                        <td><?php echo htmlspecialchars($nhanVien['dia']); ?></td>
                        <td><?php echo htmlspecialchars($nhanVien['username']); ?></td>
                        <td>
                            <button onclick="editNhanVien(<?php echo htmlspecialchars(json_encode($nhanVien)); ?>)">Sửa</button>
                            <form method="POST" style="display:inline-block">
                                <input type="hidden" name="idnv" value="<?php echo htmlspecialchars($nhanVien['idnv']); ?>">
                                <button type="submit" name="delete" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Không có nhân viên nào.</p>
    <?php endif; ?>

    <script>
        function openForm() {
            document.getElementById("nhanVienForm").style.display = "block";
            document.getElementById("submitBtn").name = "add";
            document.getElementById("submitBtn").innerText = "Thêm";
            // Reset form
            document.getElementById("idnv").value = "";
            document.getElementById("hoten").value = "";
            document.getElementById("dia").value = "";
            document.getElementById("username").value = "";
            document.getElementById("matkhau").value = "";
        }

        function closeForm() {
            document.getElementById("nhanVienForm").style.display = "none";
        }

        function editNhanVien(nhanVien) {
            openForm();
            document.getElementById("idnv").value = nhanVien.idnv;
            document.getElementById("hoten").value = nhanVien.hoten;
            document.getElementById("dia").value = nhanVien.dia;
            document.getElementById("username").value = nhanVien.username;
            document.getElementById("matkhau").value = nhanVien.matkhau;
            document.getElementById("submitBtn").name = "update";
            document.getElementById("submitBtn").innerText = "Cập nhật";
        }
    </script>
</body>
</html>