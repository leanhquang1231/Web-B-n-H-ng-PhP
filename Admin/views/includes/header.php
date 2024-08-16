<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mixue Admin Dashboard</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fc;
            color: #333;
        }
        .header {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .navbar {
            padding: 0.5rem 1rem;
        }
        .header-left h5 {
            color: #333;
            font-weight: 600;
        }
        .nav-link {
            color: #333;
        }
        .deznav {
            background-color: #ffffff;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }
        .metismenu a {
            color: #555;
            padding: 0.75rem 1.5rem;
            transition: all 0.3s ease;
        }
        .metismenu a:hover, .metismenu a:focus {
            background-color: #f1f5fe;
            color: #3d5ee1;
        }
        .nav-label {
            color: #3d5ee1;
            font-weight: 600;
            margin-top: 1rem;
        }
        .header-profile img {
            border-radius: 50%;
        }
        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .dropdown-item:hover {
            background-color: #f1f5fe;
        }
        .logo-container {
            padding: 1rem;
            text-align: center;
            background-color: #ffffff;
        }
        .logo-container img {
            max-width: 150px;
        }
    </style>
</head>

<body>
    <div class="logo-container">
        <img src="https://mixuediemdien.com/wp-content/uploads/2023/07/logo_mixue.webp" alt="Mixue Logo">
    </div>

    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <h5>Trang Quản Trị Bán Kem Mixue</h5>
                    </div>
                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <img src="images/profile/pic1.jpg" width="20" alt="">
                                <div class="header-info">
                                    <span>Anh Quang</span>
                                    <small>Super Admin</small>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="app-profile.html" class="dropdown-item">
                                    <i class="fas fa-user-circle mr-2"></i>
                                    <span>Profile</span>
                                </a>
                                <a href="email-inbox.html" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2"></i>
                                    <span>Inbox</span>
                                </a>
                                <a href="logout.php" class="dropdown-item logout-btn">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                <span>Logout</span>
                            </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">Quản lý</li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-th-large"></i>
                        <span class="nav-text">Quản lý</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="index.php?page=quanlysanpham"><i class="fas fa-box mr-2"></i>Quản lý sản phẩm</a></li>
                        <li><a href="index.php?page=quanlynhanvien"><i class="fas fa-users mr-2"></i>Quản lý nhân viên</a></li>
                        <li><a href="index.php?page=quanlyhoadon"><i class="fas fa-file-invoice mr-2"></i>Quản lý hóa đơn</a></li>
                        <li><a href="index.php?page=quanlykhachhang"><i class="fas fa-user-friends mr-2"></i>Quản lý khách hàng</a></li>
                    </ul>
                </li>
            
            </ul>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.logout-btn').click(function(e) {
                e.preventDefault();
                window.location.href = 'login.php';
            });
        });
    </script>
</body>

</html>