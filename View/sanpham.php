
<?php
// b1: xác định có bao nhiêu sản phẩm, select count(*)
include_once 'Model/connect.php';
$hh = new hanghoa();
$count = $hh->getHangHoaAll()->rowCount();

// b2: xác định limit
$limit = 8;

// b3: tính ra có bao nhiêu trang
$trang = new page();
$page = $trang->findPage($count, $limit);

// b4: tính ra start
$start = $trang->findStart($limit);

// b5: tạo biến chứa trang hiện tại
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
?>

<!-- sản phẩm-->
<?php
$ac = 1;
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'sanpham') {
        if (isset($_GET['act']) && $_GET['act'] == 'sanphamkhuyemai') {
            $ac = 2;
        } else {
            $ac = 1;
        }
    }
}
?>

<!--Section: Examples-->
<section id="examples" class="text-center">
    <!-- Heading -->
    <div class="row">
        <div class="col-lg-8 text-right">
            <?php
            if ($ac == 1) {
                echo '<h3 class="mb-5 font-weight-bold" style="color: red;">TẤT CẢ SẢN PHẨM</h3>';
            }
            if ($ac == 2) {
                echo '<h3 class="mb-5 font-weight-bold" style="color: red;">TẤT CẢ SẢN PHẨM KHUYẾN MÃI</h3>';
            }
            ?>
        </div>
    </div>

    <style>
        .card {
    border: none;
}

.card-img-top {
    width: 100%;
    height: auto;
}

.card-title {
    font-size: 1.25rem;
    font-weight: bold;
}

.card-text {
    margin-bottom: 0.75rem;
}

.pagination {
    justify-content: center;
}

.pagination li a {
    color: #000;
    text-decoration: none;
    padding: 0.5rem 0.75rem;
    border: 1px solid #ddd;
    margin: 0 0.25rem;
}

.pagination li a:hover {
    background-color: #f1f1f1;
}

    </style>
    <!--Grid row-->
    <div class="row">
        <?php
        $hh = new hanghoa();
        $result = $hh->getHangHoaAll();

        // đỗ từng sản phẩm lên view
        while ($set = $result->fetch()):
        ?>
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-4 text-left">
                <div class="card">
                    <a href="index.php?action=sanpham&act=sanphamchitiet&id_product=<?php echo $set['mahh']; ?>">
                        <img src="Content/imagetourdien/<?php echo $set['hinh']; ?>" class="card-img-top" alt="<?php echo $set['tenhh']; ?>">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $set['tenhh']; ?></h5>
                        <p class="card-text">
                            <?php
                            if ($ac == 1) {
                                echo '<strong>' . number_format($set['dongia']) . ' đ</strong>';
                            }
                            if ($ac == 2) {
                                echo '<strong style="color: red;">' . number_format($set['giamgia']) . ' đ</strong> <strike>' . number_format($set['dongia']) . ' đ</strike>';
                            }
                            ?>
                        </p>
                        <p class="card-text">Số lượt xem: <?php echo $set['soluotxem']; ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <!--Grid row-->
</section>
<!-- end sản phẩm mới nhất -->

<div class="col-md-6 div col-md-offset-3">
    <ul class="pagination">
        <?php
        if ($current_page > 1 && $page > 1) {
            echo '<li><a href="index.php?action=sanpham&page=' . ($current_page - 1) . '">Prev</a></li>';
        }
        for ($i = 1; $i <= $page; $i++) {
            echo '<li><a href="index.php?action=sanpham&page=' . $i . '">' . $i . '</a></li>';
        }
        if ($current_page < $page && $page > 1) {
            echo '<li><a href="index.php?action=sanpham&page=' . ($current_page + 1) . '">Next</a></li>';
        }
        ?>
    </ul>
</div>
<style>
    /* CSS cho phần phân trang */
.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination li {
    list-style: none;
    margin: 0 5px;
}

.pagination a {
    display: block;
    padding: 10px 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    text-decoration: none;
    color: #333;
    font-size: 1rem;
    transition: background-color 0.3s, color 0.3s;
}

.pagination a:hover {
    background-color: #007bff;
    color: #fff;
}

.pagination .active a {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}

/* CSS cho phần sản phẩm */
.card {
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s;
}

.card:hover {
    transform: scale(1.05);
}

.card-img-top {
    border-bottom: 1px solid #ddd;
}

.card-title {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 10px;
}

.card-text {
    font-size: 1rem;
    color: #555;
}

.card-text strong {
    color: #000;
}

.card-text strike {
    color: #999;
}

.card-body {
    padding: 15px;
}

.col-lg-3,
.col-md-4 {
    padding-left: 15px;
    padding-right: 15px;
}

</style>
